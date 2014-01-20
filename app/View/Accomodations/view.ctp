<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Accomodation');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Title Hr'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['title_hr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Title Eng'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['title_eng']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description Hr'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['description_hr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description Eng'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['description_eng']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Location'); ?></dt>
			<dd>
				<?php echo $this->Html->link($accomodation['Location']['title'], array('controller' => 'locations', 'action' => 'view', $accomodation['Location']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Price'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['price']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Parking'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['parking']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Bbq'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['bbq']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Tv'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['tv']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Conditioned'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['conditioned']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Dishwash'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['dishwash']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Clotheswash'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['clotheswash']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Internet'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['internet']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Seadistance'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['seadistance']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Centerdistance'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['centerdistance']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Shopdistance'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['shopdistance']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Pet'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['pet']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($accomodation['Accomodation']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Accomodation')), array('action' => 'edit', $accomodation['Accomodation']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Accomodation')), array('action' => 'delete', $accomodation['Accomodation']['id']), null, __('Are you sure you want to delete # %s?', $accomodation['Accomodation']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Accomodations')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Accomodation')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('controller' => 'locations', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Location')), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

