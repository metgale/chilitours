<?php
set_time_limit(600);
header( 'Content-type: text/html; charset=utf-8' );

if (empty($_GET['army1']) || empty($_GET['army2'])) {
	die(' Please provide army sizes');
}

if ($_GET['army1'] < 50 || $_GET['army2'] < 50) {
	die('Army should contain at least 50 soldiers');
}

function out($msg) {
	echo $msg . '<br>';
	flush();
	ob_flush();
}

$red = new Army($_GET['army1'], 'Red Napoleon');
$blue = new Army($_GET['army2'], 'Blue Viking');

$battle = new Battle($red, $blue);
$battle->start();

/**
 * Battle
 */
class Battle {

	/**
	 * Red army
	 *
	 * @var Army
	 */
	protected $red;

	/**
	 * Blue army
	 *
	 * @var Army
	 */
	protected $blue;

	/**
	 * Turn counter
	 *
	 * @var integer
	 */
	protected $turn = 0;

	public function __construct(Army $blue, Army $red) {
		$this->blue = $blue;
		$this->red = $red;
	}

	public function start() {
		out('Battle has began!');
		sleep(1);

		do {
			$this->turn++;
			out('');
			out("Turn {$this->turn}");
			$army = $this->pickArmy();
			$this->makeTurn($army);
		} while ($this->red->size > 0 && $this->blue->size > 0);

		out('#######################################');
		out('Battle ended.');
		if ($this->red->size <= 0) {
			out("{$this->red->name} army won");
		}
		if ($this->blue->size <= 0) {
			out("{$this->blue->name} army won");
		}
	}

	protected function makeTurn(Army $army) {
		$damage = $army->shoot();

		if ($damage === 0) {
			out("{$army->name} army misses");
		} else {
			out("{$army->name} soldiers shoots and kills $damage soldier(s)");
			$army->size = $army->size - $damage;
		}

		$critical = rand(0, 7);
		if ($critical === 7) {
			out("{$army->name} soldier shoots and accidentally headshots THE GENERAL!");
			$army->hasGeneral = false;
		}

		out("{$army->name} army has " . $army->size . "soldiers left");
		usleep(300000);
	}

	protected function pickArmy() {
		if (rand(0, 1)) {
			$army = $this->red;
		} else {
			$army = $this->blue;
		}
		out("{$army->name} army is on the move.");
		return $army;
	}

}

/**
 * Army
 */
class Army {

	const MORAL_FROM_GENERAL = 5;

	public $size = 0;
	public $name = null;
	public $hasGeneral = true;
	protected $moral = 0;

	public function __construct($size, $name) {
		$this->size = $size;
		$this->name = $name;
		$this->moral = $this->size % 10;
	}

	public function killGeneral() {
		return $this->hasGeneral = false;
	}

	public function getMoral() {
		if ($this->hasGeneral) {
			return $this->moral + self::MORAL_FROM_GENERAL;
		}

		return $this->moral;
	}

	public function shoot() {
		$morale = $this->getMoral();
		$damage = rand(0, $morale);

		switch ($damage) {
			case ($damage == 0):
				return 0;
			case ($damage <= 5):
				return 1;
			case ($damage > 5 && $damage <= 10):
				return 2;
			default :
				return 3;
		}
	}

}
