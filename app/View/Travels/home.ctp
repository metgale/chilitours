<div class='wrapper'>
    <div class='row'>
        <div class="span3 left-content">
              <?php echo $this->Element('logo'); ?>
        </div>
        <div class="box_skitter box_skitter_large pull-right span9">
            <ul>
                <?php foreach ($featuredtravels as $travel): ?>
                   <?php if(!empty($travel['Image'][0]['attachment'])): ?>
                    <li>
                        <a href="/travels/view/<?php echo $travel['Travel']['id']; ?>"><?php echo $this->Html->image('/img/travelphotos/' . $travel['Image'][0]['id'] . '/' . $travel['Image'][0]['attachment']); ?></a>
                        <div class="label_text pull-right"><p><?php echo $this->Html->link($travel['Travel']['name_hr'], array('action' => 'view', $travel['Travel']['id'])); ?></p></div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="row home">
        <div class="span3 left-content">
            <div class="well" style="padding: 8px 0;">
                <ul class="nav nav-list">
                    <li class="nav-header">Kategorije</li>
                    <li><?php echo $this->Html->link('Sve kategorije', array('controller' => 'travels', 'action' => 'home'), array('class' => 'filterCategory')); ?></li>
                    <?php foreach ($categories as $category): ?>
                        <li><?php echo $this->Html->link($category['Category']['name_hr'], array('controller' => 'travels', 'action' => 'home', $category['Category']['id']), array('class' => 'filterCategory')); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="span9 pull-right">
            <h2>Aktualne ponude</h2>
            <hr>
            <ul class="thumbnails">
                <?php foreach ($travels as $travel):; ?>

                    <li class="span3">
                        <a href="/travels/view/<?php echo $travel['Travel']['id']; ?>">
                            <div class="thumbnail">
                                <span>Od <?php
                                    foreach ($travel['Term'] as $term) {
                                        echo $term['price'];
                                    }
                                    ?></span>

                                <?php foreach ($travel['Image'] as $image): ?>
                                    <?php echo $this->Html->image('/img/travelphotos/' . $image['id'] . '/' . $image['attachment'], array('class' => 'homephotos')); ?>
                                <?php endforeach; ?>
                                <div class='caption'>
                                    <h3><?php echo $this->Html->link($travel['Travel']['name_hr'], array('action' => 'view', $travel['Travel']['id'])); ?></h3>
                                    <p><?php echo $this->Text->excerpt($travel['Travel']['short_hr'], 'method', 95, '...'); ?></p>
                                </div>
                            </div>
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