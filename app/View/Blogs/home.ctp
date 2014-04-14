<?php $this->assign('title', 'Chili Blog - Chili Tours'); ?>
<?php $this->append('meta'); ?>
<meta name="description" content="Zanimljivosti s putovanja i korisne savjete za Vas pišu zaposlenici Chili Tours turističke agencije">
<?php $this->end(); ?>

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
            <h4><a href="<?php echo $blog['Blog']['content'];?>"><?php echo $blog['Blog']['title'] ?></a></h4>
            <div class="metadata" style="color:#888">
                <p>Objavljeno: <?php echo $blog['Blog']['created']; ?></p>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>