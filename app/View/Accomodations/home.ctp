<?php $this->assign('title', 'Chili Smještaj - Chili Tours'); ?>

<?php $this->append('meta'); ?>
	<meta name="description" content="Apartmani, sobe, kuće za odmor i ostali privatni smještaj u Hrvatskoj. Chili tours turistička agencija.">
<?php $this->end(); ?>
        
<div class = "pageview">
    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9 pull-right content">
            <?php echo $this->Html->Image('imagesforpages/5.jpg', array('class' => 'imageforpage')); ?>
        </div>
    </div>
    <div class="row">
        <div class="span3 left-content">
        </div>
        <div class="span9 pull-right content">
            <h1>Smještaj</h1>	
            <hr>
            <?php foreach ($accomodations as $accomodation): ?>
                <?php if ($accomodation['Accomodation']): ?>
                    <div class="span2">
                        <h5><?php echo $accomodation['Location']['title']; ?></h5>
                        <?php foreach ($accomodation['Accomodation'] as $list): ?>
                            <p><?php echo $this->Html->link($list['title_hr'], array('controller' => 'accomodations', 'action' => 'view', $list['id'])); ?></p>
                        <?php endforeach; ?>
                        <hr>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>