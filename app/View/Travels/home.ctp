<div class='wrapper'>
	<div class='row'>
		<?php echo $this->Element('cta'); ?>
		<div class="box_skitter box_skitter_large pull-right span9">
			<ul>
				<?php foreach ($featuredtravels as $travel): ?>
					<li>
						<a href="#cut"><?php echo $this->Html->image('/img/travelphotos/' . $travel['Image'][0]['attachment']); ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="row home">
		<div class="span3 category-list">
			<div class="well" style="padding: 8px 0;">
				<ul class="nav nav-list">
					<li class="nav-header">Kategorije</li>
					<li><?php echo $this->Html->link('Sve kategorije', array('controller' => 'travels', 'action' => 'home'), array('class' => 'filterCategory')); ?></li>
					<?php foreach ($categories as $category): ?>
						<li><?php echo $this->Html->link($category['Category']['name_hr'], array('controller' => 'travels', 'action' => 'home', $category['Category']['id']), array('class' => 'filterCategory')); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="span9 pull-right">
			<h1>Aktualne ponude</h1>
			<hr>
			<ul class="thumbnails">
				<?php foreach ($travels as $travel):; ?>

					<li class="span3">
						<a href="/travels/view/<?php echo $travel['Travel']['id']; ?>">
							<div class="thumbnail">
								<span>Od <?php
									foreach ($travel['Term'] as $term) {
										echo $term['price'];
									}
									?></span>

								<?php foreach ($travel['Image'] as $image): ?>
									<?php echo $this->Html->image('/img/travelphotos/' . $image['attachment'], array('class' => 'homephotos')); ?>
								<?php endforeach; ?>
								<div class='caption'>
									<h3><?php echo $this->Html->link($travel['Travel']['name_hr'], array('action' => 'view', $travel['Travel']['id'])); ?></h3>
									<p><?php echo $this->Text->excerpt($travel['Travel']['short_hr'], 'method', 95, '...'); ?></p>
								</div>
							</div>
					</li>

				<?php endforeach; ?>
			</ul>
			<div class="pagination">
				<ul>
					<?php
					echo $this->Paginator->prev(__('Prethodna'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
					echo $this->Paginator->next(__('Sljedeća'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
					?>
				</ul>
			</div>
		</div>
	</div>

</div>
<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$(".box_skitter_large").skitter();
	});
</script>