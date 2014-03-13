<?php $this->assign('title', 'Chili Blog - Chili Tours'); ?>

<?php $this->append('meta'); ?>
	<meta name="description" content="<?php echo $blog['Blog']['title']; ?>">
<?php $this->end(); ?>
        

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