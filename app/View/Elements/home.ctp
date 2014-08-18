<div class='wrapper pageview'>
    <div class='row'>
        <div class="span3 left-content">
            <div class="corner">
                <?php echo $this->Element('logo'); ?>
                <form action="/travels/search" class="form-search" method="GET" accept-charset="utf-8">			
                    <div class="input-append">
                        <input name="keyword" placeholder="Pretraži putovanja" class="search-query" type="text" id="LotSearch">
                        <button type="submit" class="btn btn-success"><i class="icon-search"></i></button>
                    </div>
                </form>	
                <a class="btn btn-success btn-large btn-block" style="margin-top:5px; margin-bottom:5px; padding:14px;" href="/travels/en">Visit Croatia</a>
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
            <a class="btn btn-primary btn-large btn-block" style="margin-top:20px; margin-bottom:10px;" href="/contacts/travelcreate">Kreiraj Putovanje</a>
            <a class="btn btn-info btn-large btn-block" style="margin-top:5px; margin-bottom:5px;" href="/pages/posao">Tražiš posao?</a>
            <div class="well" style="padding: 8px 0; margin-top:10px;">
                <ul class="nav nav-list">
                    <?php if (empty($check)): ?>
                        <li class="nav-header"><?php echo $this->Html->link('Sve kategorije', array('controller' => 'travels', 'action' => 'home'), array('class' => 'filterCategory upcomingtitle')); ?></li>
                    <?php else: ?>
                        <li class="nav-header"><?php echo $this->Html->link('Sve kategorije', array('controller' => 'travels', 'action' => 'home'), array('class' => 'filterCategory')); ?></li>    
                    <?php endif; ?>
                    <?php foreach ($categories as $category): ?>
                        <?php if (isset($check) && $check['Category']['id'] == $category['Category']['id']): ?>
                            <li><?php echo $this->Html->link($category['Category']['name_hr'], array('controller' => 'travels', 'action' => 'home', $category['Category']['id']), array('class' => 'filterCategory kuki')); ?></li>
                        <?php else: ?>
                            <li><?php echo $this->Html->link($category['Category']['name_hr'], array('controller' => 'travels', 'action' => 'home', $category['Category']['id']), array('class' => 'filterCategory')); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="span9 pull-right travels">
            <h1>Aktualne ponude</h1>
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
        <div class="span3 left-content">
            <div id="mc_embed_signup">
                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <h4>ChiliTours Newsletter</h4>
                <small>
                    Prijavite se za primanje obavijesti o putovanjima i novim ljutim ponudama
                </small>
                <hr id="news">
                <form action="http://chilitours.us3.list-manage.com/subscribe/post?u=c2dbaca2d6083b991502de0b2&amp;id=008d1efff5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Vaša Email adresa</label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_c2dbaca2d6083b991502de0b2_008d1efff5" value=""></div>
                    <div class="clear"><input type="submit" value="Prijavi se" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </form>
            </div>
        </div>
        <div class="span3 left-content">
            <?php echo $this->Element('share'); ?>
            <?php echo $this->Element('likebox'); ?>

            <a href="http://crosportvez.hr/" target="_blank"><img src="/img/csv.png"></a>
            <a href="http://www.zagrebapartments.eu/" target="_blank"><img src="/img/zg-apartments.png"></a>
            <div class="well" style="padding: 8px 0; margin-top:10px;">
                <ul class="nav nav-list">
                    <li class="nav-header upcomingtitle">Popis putovanja</li>
                    <?php foreach ($upcoming as $upcoming): ?> 
                        <?php if (!empty($upcoming['Travel']['id']) && time() < strtotime($upcoming['Term']['startdate'])): ?>
                            <li class="upcominglist"><a href="/travels/view/<?php echo $upcoming['Travel']['slug']; ?>"><?php echo $this->Time->format($upcoming['Term']['startdate'], '%d. %m.' . " - " . $upcoming['Travel']['name_hr']); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?> 
                </ul>
            </div>
        </div>

    </div>
</div>