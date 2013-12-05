<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Term');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($term['Term']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Travel'); ?></dt>
			<dd>
				<?php echo $this->Html->link($term['Travel']['id'], array('controller' => 'travels', 'action' => 'view', $term['Travel']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Startdate'); ?></dt>
			<dd>
				<?php echo h($term['Term']['startdate']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Enddate'); ?></dt>
			<dd>
				<?php echo h($term['Term']['enddate']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Price'); ?></dt>
			<dd>
				<?php echo h($term['Term']['price']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Town'); ?></dt>
			<dd>
				<?php echo h($term['Term']['town']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($term['Term']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($term['Term']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Term')), array('action' => 'edit', $term['Term']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Term')), array('action' => 'delete', $term['Term']['id']), null, __('Are you sure you want to delete # %s?', $term['Term']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Terms')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Term')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Travels')), array('controller' => 'travels', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Travel')), array('controller' => 'travels', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

