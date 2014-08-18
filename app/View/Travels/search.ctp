<?php $this->assign('title', 'Chili Tours - Rezultati pretraživanja'); ?>

<?php $this->append('meta'); ?>
<meta name="description" content="Pregledajte ponudu Chili Tours turističke agencije u Zagrebu. Velika ponuda povoljnih putovanja. Ljetovanja, zimovanja, vikend ili avanturistički izleti!">
<?php $this->end(); ?>

<div class='wrapper pageview'>
    <div class='row'>
        <div class="span3 left-content">
            <div class="corner">
                <?php echo $this->Element('logo'); ?>
            </div>
        </div>

        <div class="span9 pull-right travels">
            <h1>Rezultati pretraživanja</h1>
            <ul class="thumbnails">
                <?php foreach ($travels as $travel):; ?>
                    <li class="span3">
                        <a href="/travels/view/<?php echo $travel['Travel']['slug']; ?>">
                            <div class="thumbnail">
                                <span><?php
                                    foreach ($travel['Term'] as $term) {
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
