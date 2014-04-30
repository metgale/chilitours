<?php
App::uses('Sanitize', 'Utility');
App::uses('Multibyte', 'I18n');

/**
 * Sluggable Behavior
 * 
 * Based on https://github.com/CakeDC/utils/blob/2.0/Model/Behavior/SluggableBehavior.php
 */
class SluggableBehavior extends ModelBehavior {

	/**
	 * Default behavior settings
	 *
	 * `label` The field used to generate the slug from.
	 * `slug` The field to store the slug in.
	 * `scope` Conditions for the find query to check if the slug already exists.
	 * `separator` The character used to separate the words in the slug.
	 * `length` The maximum length of the slug.
	 * `unique` Check if the slug is unique.
	 * `update` Update the slug or not.
	 * `trigger` Defines a property in the model that has to be true to generate the slug.
	 *
	 * Note that trigger will temporary bypass update and act like update is set to true.
	 *
	 * @var array
	 */
	protected $_defaults = array(
		'label' => 'title',
		'slug' => 'slug',
		'scope' => array(),
		'separator' => '-',
		'length' => 255,
		'unique' => true,
		'update' => false,
		'trigger' => false);

	/**
	 * Behavior setup CakePHP callback
	 *
	 * @param Model $model Model instance.
	 * @param array $config Behavior configuration.
	 * @return void
	 */
	public function setup(Model $model, $config = array()) {
		$this->settings[$model->alias] = array_merge($this->_defaults, $config);
	}

	/**
	 * Behavior beforeSave CakePHP callback
	 *
	 * @param object $model
	 */
	public function beforeSave(Model $model, $options = array()) {
		$settings = $this->settings[$model->alias];
		if (is_string($this->settings[$model->alias]['trigger'])) {
			if ($model->{$this->settings[$model->alias]['trigger']} != true) {
				return true;
			}
		}

		if (empty($model->data[$model->alias])) {
			return true;
		} else if (empty($model->data[$model->alias][$this->settings[$model->alias]['label']])) {
			return true;
		} else if (!$this->settings[$model->alias]['update'] && !empty($model->id) && !is_string($this->settings[$model->alias]['trigger'])) {
			return true;
		}

		$slug = $model->data[$model->alias][$settings['label']];
		if (method_Exists($model, 'beforeSlugGeneration')) {
			$slug = $model->beforeSlugGeneration($slug, $settings['separator']);
		}

		$settings = $this->settings[$model->alias];
		$slug = $this->slug($model, $slug, $settings['separator']);

		if ($settings['unique'] === true || is_array($settings['unique'])) {
			$slug = $this->makeUniqueSlug($model, $slug);
		}

		if (!empty($model->whitelist) && !in_array($settings['slug'], $model->whitelist)) {
			$model->whitelist[] = $settings['slug'];
		}
		$model->data[$model->alias][$settings['slug']] = $slug;
		return true;
	}

	/**
	 * Search if the slug already exists and if yes increments it
	 *
	 * @param object $model
	 * @param string the raw slug
	 * @return string The incremented unique slug
	 * 
	 */
	public function makeUniqueSlug(Model $model, $slug = '') {
		$settings = $this->settings[$model->alias];
		$conditions = array();
		if ($settings['unique'] === true) {
			$conditions[$model->alias . '.' . $settings['slug']] = $slug;
		} else if (is_array($settings['unique'])) {
			foreach ($settings['unique'] as $field) {
				$conditions[$model->alias . '.' . $field] = $model->data[$model->alias][$field];
			}
			$conditions[$model->alias . '.' . $settings['slug']] = $slug;
		}

		if (!empty($model->id)) {
			$conditions[$model->alias . '.' . $model->primaryKey . ' !='] = $model->id;
		}

		$conditions = array_merge($conditions, $settings['scope']);

		$duplicates = $model->find('all', array(
			'recursive' => -1,
			'conditions' => $conditions,
			'fields' => array($settings['slug'])));

		if (!empty($duplicates)) {
			$duplicates = Set::extract($duplicates, '{n}.' . $model->alias . '.' . $settings['slug']);
			$startSlug = $slug;
			$index = 1;

			while ($index > 0) {
				if (!in_array($startSlug . $settings['separator'] . $index, $duplicates)) {
					$slug = $startSlug . $settings['separator'] . $index;
					$index = -1;
				}
				$index++;
			}
		}

		return $slug;
	}

	/**
	 * Generates a slug from a (multibyte) string
	 *
	 * @param object $model
	 * @param string $string
	 * @return string
	 */
	public function slug(Model $model, $string = null) {
		if (empty($string)) {
			return null;
		}

		$separator = $this->settings[$model->alias]['separator'];

		$string = str_replace(array('?', "'", "`"), '', $string);
		$string = $this->_replaceCharacters($string);
		$string = mb_strtolower($string);
		$string = preg_replace('/\xE3\x80\x80/', ' ', $string);
		$string = preg_replace('[\'s ]', 's ', $string);
		$string = str_replace(' ', $separator, $string);
		$string = preg_replace('#[:\#\*"()~$^{}`@+=;,<>!&%\.\]\/\'\\\\|\[]#', "\x20", $string);
		$string = trim($string);
		$string = preg_replace('#\x20+#', $separator, $string);
		$string = preg_replace("#[$separator]+#", $separator, $string);
		$string = Sanitize::clean($string, array('connection' => $model->useDbConfig));

		return $string;
	}
	
	/**
	 * Replace some Latin and special characters
	 * 
	 * @param string $string
	 * @return string 
	 */
	protected function _replaceCharacters($string) {
		$translations = array(
			// Decompositions for Latin-1 Supplement
			chr(195).chr(128) => 'A', chr(195).chr(129) => 'A',
			chr(195).chr(130) => 'A', chr(195).chr(131) => 'A',
			chr(195).chr(132) => 'A', chr(195).chr(133) => 'A',
			chr(195).chr(135) => 'C', chr(195).chr(136) => 'E',
			chr(195).chr(137) => 'E', chr(195).chr(138) => 'E',
			chr(195).chr(139) => 'E', chr(195).chr(140) => 'I',
			chr(195).chr(141) => 'I', chr(195).chr(142) => 'I',
			chr(195).chr(143) => 'I', chr(195).chr(145) => 'N',
			chr(195).chr(146) => 'O', chr(195).chr(147) => 'O',
			chr(195).chr(148) => 'O', chr(195).chr(149) => 'O',
			chr(195).chr(150) => 'O', chr(195).chr(153) => 'U',
			chr(195).chr(154) => 'U', chr(195).chr(155) => 'U',
			chr(195).chr(156) => 'U', chr(195).chr(157) => 'Y',
			chr(195).chr(159) => 's', chr(195).chr(160) => 'a',
			chr(195).chr(161) => 'a', chr(195).chr(162) => 'a',
			chr(195).chr(163) => 'a', chr(195).chr(164) => 'a',
			chr(195).chr(165) => 'a', chr(195).chr(167) => 'c',
			chr(195).chr(168) => 'e', chr(195).chr(169) => 'e',
			chr(195).chr(170) => 'e', chr(195).chr(171) => 'e',
			chr(195).chr(172) => 'i', chr(195).chr(173) => 'i',
			chr(195).chr(174) => 'i', chr(195).chr(175) => 'i',
			chr(195).chr(177) => 'n', chr(195).chr(178) => 'o',
			chr(195).chr(179) => 'o', chr(195).chr(180) => 'o',
			chr(195).chr(181) => 'o', chr(195).chr(182) => 'o',
			chr(195).chr(182) => 'o', chr(195).chr(185) => 'u',
			chr(195).chr(186) => 'u', chr(195).chr(187) => 'u',
			chr(195).chr(188) => 'u', chr(195).chr(189) => 'y',
			chr(195).chr(191) => 'y',
			// Decompositions for Latin Extended-A
			chr(196).chr(128) => 'A', chr(196).chr(129) => 'a',
			chr(196).chr(130) => 'A', chr(196).chr(131) => 'a',
			chr(196).chr(132) => 'A', chr(196).chr(133) => 'a',
			chr(196).chr(134) => 'C', chr(196).chr(135) => 'c',
			chr(196).chr(136) => 'C', chr(196).chr(137) => 'c',
			chr(196).chr(138) => 'C', chr(196).chr(139) => 'c',
			chr(196).chr(140) => 'C', chr(196).chr(141) => 'c',
			chr(196).chr(142) => 'D', chr(196).chr(143) => 'd',
			chr(196).chr(144) => 'D', chr(196).chr(145) => 'd',
			chr(196).chr(146) => 'E', chr(196).chr(147) => 'e',
			chr(196).chr(148) => 'E', chr(196).chr(149) => 'e',
			chr(196).chr(150) => 'E', chr(196).chr(151) => 'e',
			chr(196).chr(152) => 'E', chr(196).chr(153) => 'e',
			chr(196).chr(154) => 'E', chr(196).chr(155) => 'e',
			chr(196).chr(156) => 'G', chr(196).chr(157) => 'g',
			chr(196).chr(158) => 'G', chr(196).chr(159) => 'g',
			chr(196).chr(160) => 'G', chr(196).chr(161) => 'g',
			chr(196).chr(162) => 'G', chr(196).chr(163) => 'g',
			chr(196).chr(164) => 'H', chr(196).chr(165) => 'h',
			chr(196).chr(166) => 'H', chr(196).chr(167) => 'h',
			chr(196).chr(168) => 'I', chr(196).chr(169) => 'i',
			chr(196).chr(170) => 'I', chr(196).chr(171) => 'i',
			chr(196).chr(172) => 'I', chr(196).chr(173) => 'i',
			chr(196).chr(174) => 'I', chr(196).chr(175) => 'i',
			chr(196).chr(176) => 'I', chr(196).chr(177) => 'i',
			chr(196).chr(178) => 'IJ',chr(196).chr(179) => 'ij',
			chr(196).chr(180) => 'J', chr(196).chr(181) => 'j',
			chr(196).chr(182) => 'K', chr(196).chr(183) => 'k',
			chr(196).chr(184) => 'k', chr(196).chr(185) => 'L',
			chr(196).chr(186) => 'l', chr(196).chr(187) => 'L',
			chr(196).chr(188) => 'l', chr(196).chr(189) => 'L',
			chr(196).chr(190) => 'l', chr(196).chr(191) => 'L',
			chr(197).chr(128) => 'l', chr(197).chr(129) => 'L',
			chr(197).chr(130) => 'l', chr(197).chr(131) => 'N',
			chr(197).chr(132) => 'n', chr(197).chr(133) => 'N',
			chr(197).chr(134) => 'n', chr(197).chr(135) => 'N',
			chr(197).chr(136) => 'n', chr(197).chr(137) => 'N',
			chr(197).chr(138) => 'n', chr(197).chr(139) => 'N',
			chr(197).chr(140) => 'O', chr(197).chr(141) => 'o',
			chr(197).chr(142) => 'O', chr(197).chr(143) => 'o',
			chr(197).chr(144) => 'O', chr(197).chr(145) => 'o',
			chr(197).chr(146) => 'OE',chr(197).chr(147) => 'oe',
			chr(197).chr(148) => 'R',chr(197).chr(149) => 'r',
			chr(197).chr(150) => 'R',chr(197).chr(151) => 'r',
			chr(197).chr(152) => 'R',chr(197).chr(153) => 'r',
			chr(197).chr(154) => 'S',chr(197).chr(155) => 's',
			chr(197).chr(156) => 'S',chr(197).chr(157) => 's',
			chr(197).chr(158) => 'S',chr(197).chr(159) => 's',
			chr(197).chr(160) => 'S', chr(197).chr(161) => 's',
			chr(197).chr(162) => 'T', chr(197).chr(163) => 't',
			chr(197).chr(164) => 'T', chr(197).chr(165) => 't',
			chr(197).chr(166) => 'T', chr(197).chr(167) => 't',
			chr(197).chr(168) => 'U', chr(197).chr(169) => 'u',
			chr(197).chr(170) => 'U', chr(197).chr(171) => 'u',
			chr(197).chr(172) => 'U', chr(197).chr(173) => 'u',
			chr(197).chr(174) => 'U', chr(197).chr(175) => 'u',
			chr(197).chr(176) => 'U', chr(197).chr(177) => 'u',
			chr(197).chr(178) => 'U', chr(197).chr(179) => 'u',
			chr(197).chr(180) => 'W', chr(197).chr(181) => 'w',
			chr(197).chr(182) => 'Y', chr(197).chr(183) => 'y',
			chr(197).chr(184) => 'Y', chr(197).chr(185) => 'Z',
			chr(197).chr(186) => 'z', chr(197).chr(187) => 'Z',
			chr(197).chr(188) => 'z', chr(197).chr(189) => 'Z',
			chr(197).chr(190) => 'z', chr(197).chr(191) => 's',
			// Euro Sign
			chr(226).chr(130).chr(172) => 'E'
		);
		
		return strtr($string, $translations);
	}
}
