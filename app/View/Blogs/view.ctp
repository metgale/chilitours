<?php $this->set('title_for_layout', $blog['Blog']['title'] . ' | Chilitours.hr');?>

<div class="pageview">
    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
       

        <div class="span9 pull-right content">
            <h2><?php echo $blog['Blog']['title'];?></h2>
            <hr>
            <p><?php echo $blog['Blog']['content']; ?></p>
        </div>
    </div>
    

</div>