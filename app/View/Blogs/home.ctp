<?php
$this->set('title_for_layout', 'Chili Blog');
$this->Html->meta(
        'description', 'Posljednji postovi na našem blogu. Zanimljive informacije i priče sa putovanja, te korisni savjeti. Chili Tours turistička agencija.'
);
?>

<div class = "pageview">
    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9 pull-right content">
            <?php echo $this->Html->Image('imagesforpages/2.jpg', array('class' => 'imageforpage')); ?>
        </div>
    </div>
    <div class="row"></div>
    <div class="span3 left-content">

    </div>
    <div class="span9 pull-right">
        <h1>Chili Blog</h1>
        <hr>
        <?php foreach ($blogs as $blog): ?>
            <h4><?php echo $this->Html->link($blog['Blog']['title'], array('controller' => 'blogs', 'action' => 'view', $blog['Blog']['id'])); ?></h4>
            <div class="metadata" style="color:#888">
                <p>Objavljeno: <?php echo $blog['Blog']['created']; ?></p>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>