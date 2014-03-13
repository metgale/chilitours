<?php $this->assign('title', 'Chili Tours - Aktualna Ponuda'); ?>

<?php $this->append('meta'); ?>
<meta name="description" content="Pregledajte ponudu Chili Tours turističke agencije u Zagrebu. Velika ponuda povoljnih putovanja. Ljetovanja, zimovanja, vikend ili avanturistički izleti">
<?php $this->end(); ?>


<div class='wrapper pageview'>

    <div class='row'>

        <div class="span3 left-content">

            <?php echo $this->Element('logo'); ?>

        </div>

        <div class="box_skitter box_skitter_large pull-right span9">

            <ul>

                <?php foreach ($featuredtravels as $travel): ?>

                    <?php if (!empty($travel['Image'][0]['attachment'])): ?>

                        <li>

                            <a href="/travels/view/<?php echo $travel['Travel']['id']; ?>"><?php echo $this->Html->image('/img/travelphotos/' . $travel['Image'][0]['id'] . '/' . $travel['Image'][0]['attachment']); ?></a>

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
            <a class="btn btn-primary btn-large btn-block" style="margin-top:20px; margin-bottom:10px;" href="/contacts/travelcreate">Kreiraj Putovanje</a>
            <div class="well" style="padding: 8px 0; margin-top:10px;">
                <ul class="nav nav-list">

                    <?php if (!$check): ?>
                        <li class="nav-header"><?php echo $this->Html->link('Sve kategorije', array('controller' => 'travels', 'action' => 'home'), array('class' => 'filterCategory kuki')); ?></li>
                    <?php else: ?>
                        <li class="nav-header"><?php echo $this->Html->link('Sve kategorije', array('controller' => 'travels', 'action' => 'home'), array('class' => 'filterCategory')); ?></li>    
                    <?php endif; ?>
                    <?php foreach ($categories as $category): ?>
                        <?php if ($check['Category']['id'] == $category['Category']['id']): ?>
                            <li><?php echo $this->Html->link($category['Category']['name_hr'], array('controller' => 'travels', 'action' => 'home', $category['Category']['id']), array('class' => 'filterCategory kuki')); ?></li>
                        <?php else: ?>
                            <li><?php echo $this->Html->link($category['Category']['name_hr'], array('controller' => 'travels', 'action' => 'home', $category['Category']['id']), array('class' => 'filterCategory')); ?></li>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
        <div class="span9 pull-right">
            <h1>Aktualne ponude</h1>
            <hr>
            <ul class="thumbnails">
                <?php foreach ($travels as $travel):; ?>
                    <li class="span3">
                        <a href="/travels/view/<?php echo $travel['Travel']['id']; ?>">
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
        <div class="span3 left-content">
            <?php echo $this->Element('share'); ?>
            <?php echo $this->Element('likebox'); ?>
            <a href="http://crosportvez.hr/" target="_blank"><img src="/img/csv.png"></a>
        </div>

    </div>
</div>
<script type="text/javascript" language="javascript">

    $(document).ready(function() {

        $(".box_skitter_large").skitter();

    });

</script>