<?php $this->assign('title', 'Chili Tours - Offers'); ?>

<?php $this->append('meta'); ?>
<meta name="description" content="Chili Tours offers various travels!">
<?php $this->end(); ?>

<div class='wrapper pageview'>
    <div class='row'>
        <div class="span3 left-content">
            <div class="corner">
                <?php echo $this->Element('logo'); ?>
                <a class="btn btn-primary btn-large btn-block" style="margin-top:5px; margin-bottom:5px;" href="/contacts/travelcreate_en">Create your own trip to Croatia</a>

            </div>

        </div>

        <div class="box_skitter box_skitter_large pull-right span9">
            <ul>
                <?php foreach ($featuredtravels as $travel): ?>
                    <?php if (!empty($travel['Image'][0]['attachment'])): ?>
                        <li>
                            <a href="/travels/view/<?php echo $travel['Travel']['slug']; ?>"><?php echo $this->Html->image('/img/travelphotos/' . $travel['Image'][0]['id'] . '/' . $travel['Image'][0]['attachment']); ?></a>
                            <div class="label_text pull-right">
                                <p><?php echo $travel['Travel']['name_hr'] ?><br>
                                    <small><?php echo $travel['Travel']['short_hr']; ?></small>
                                </p>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="row home">
        <div class="span3 left-content">

        </div>
        <div class="span9 pull-right">
            <h1>Chili Offers</h1>
            <hr>
            <ul class="thumbnails">
                <?php foreach ($travels as $travel):; ?>
                    <li class="span3">
                        <a href="/travels/view/<?php echo $travel['Travel']['slug']; ?>">
                            <div class="thumbnail">
                                <span><?php
                                    foreach ($travel['Term'] as $term) 
                                        {
                                        echo $term['price'];
                                        }
                                    ?></span>
                                <?php foreach ($travel['Image'] as $image): ?>
                                    <?php echo $this->Html->image('/img/travelphotos/' . $image['id'] . '/' . $image['attachment'], array('class' => 'homephotos')); ?>
                                <?php endforeach; ?>
                                <div class='caption'>
                                    <h4><?php echo$travel['Travel']['name_hr'] ?></h4>
                                    <p><?php echo $this->Text->excerpt($travel['Travel']['short_hr'], 'method', 95, '...'); ?></p>
                                </div>
                            </div>
                        </a>    
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" language="javascript">

    $(document).ready(function() {
        $(".box_skitter_large").skitter();
    });

</script>
