<?php $this->set('title_for_layout', 'Zanimljivosti s putovanja i savjeti | Chili tours turistička agencija');
$this->Html->meta(
        'description', $blog['Blog']['title']
);
?>

<div class="pageview">
    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
       

        <div class="span9 pull-right content">
            <h1><?php echo $blog['Blog']['title'];?></h1>
            <hr>
            <p><?php echo $blog['Blog']['content']; ?></p>
        </div>
    </div>
    

</div>