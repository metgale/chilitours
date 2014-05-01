<?php $this->assign('title', 'Chili Tours - Aktualna Ponuda'); ?>

<?php $this->append('meta'); ?>
<meta name="description" content="Pregledajte ponudu Chili Tours turističke agencije u Zagrebu. Velika ponuda povoljnih putovanja. Ljetovanja, zimovanja, vikend ili avanturistički izleti">
<?php $this->end(); ?>


<div class='wrapper pageview'>

    <div class='row'>
        <div class="span3 left-content">
            <div class="corner">
                <?php echo $this->Element('logo'); ?>
                <a class="btn btn-success btn-large btn-block" style="margin-top:5px; margin-bottom:5px; padding:14px;" href="/travels/en">Visit Croatia</a>
                <a href="http://chilitours.hr/travels/view/95"><img style="border-radius:5px;" src="/img/nyker.jpg"></a>
            </div>

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

            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
                <form action="http://chilitours.us3.list-manage.com/subscribe/post?u=c2dbaca2d6083b991502de0b2&amp;id=008d1efff5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <h4>ChiliTours Newsletter</h4>
                    <small>
                        Prijavite se za primanje obavijesti o putovanjima i novim ljutim ponudama
                    </small>
                    <hr id="news">
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
            <script type="text/javascript">
                var fnames = new Array();
                var ftypes = new Array();
                fnames[0] = 'EMAIL';
                ftypes[0] = 'email';
                fnames[1] = 'FNAME';
                ftypes[1] = 'text';
                fnames[2] = 'LNAME';
                ftypes[2] = 'text';
                try {
                    var jqueryLoaded = jQuery;
                    jqueryLoaded = true;
                } catch (err) {
                    var jqueryLoaded = false;
                }
                var head = document.getElementsByTagName('head')[0];
                if (!jqueryLoaded) {
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
                    head.appendChild(script);
                    if (script.readyState && script.onload !== null) {
                        script.onreadystatechange = function() {
                            if (this.readyState == 'complete')
                                mce_preload_check();
                        }
                    }
                }

                var err_style = '';
                try {
                    err_style = mc_custom_error_style;
                } catch (e) {
                    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
                }
                var head = document.getElementsByTagName('head')[0];
                var style = document.createElement('style');
                style.type = 'text/css';
                if (style.styleSheet) {
                    style.styleSheet.cssText = err_style;
                } else {
                    style.appendChild(document.createTextNode(err_style));
                }
                head.appendChild(style);
                setTimeout('mce_preload_check();', 250);

                var mce_preload_checks = 0;
                function mce_preload_check() {
                    if (mce_preload_checks > 40)
                        return;
                    mce_preload_checks++;
                    try {
                        var jqueryLoaded = jQuery;
                    } catch (err) {
                        setTimeout('mce_preload_check();', 250);
                        return;
                    }
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
                    head.appendChild(script);
                    try {
                        var validatorLoaded = jQuery("#fake-form").validate({});
                    } catch (err) {
                        setTimeout('mce_preload_check();', 250);
                        return;
                    }
                    mce_init_form();
                }
                function mce_init_form() {
                    jQuery(document).ready(function($) {
                        var options = {errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function() {
                            }, onfocusout: function() {
                            }, onblur: function() {
                            }};
                        var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
                        $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
                        options = {url: 'http://chilitours.us3.list-manage.com/subscribe/post-json?u=c2dbaca2d6083b991502de0b2&id=008d1efff5&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                            beforeSubmit: function() {
                                $('#mce_tmp_error_msg').remove();
                                $('.datefield', '#mc_embed_signup').each(
                                        function() {
                                            var txt = 'filled';
                                            var fields = new Array();
                                            var i = 0;
                                            $(':text', this).each(
                                                    function() {
                                                        fields[i] = this;
                                                        i++;
                                                    });
                                            $(':hidden', this).each(
                                                    function() {
                                                        var bday = false;
                                                        if (fields.length == 2) {
                                                            bday = true;
                                                            fields[2] = {'value': 1970};//trick birthdays into having years
                                                        }
                                                        if (fields[0].value == 'MM' && fields[1].value == 'DD' && (fields[2].value == 'YYYY' || (bday && fields[2].value == 1970))) {
                                                            this.value = '';
                                                        } else if (fields[0].value == '' && fields[1].value == '' && (fields[2].value == '' || (bday && fields[2].value == 1970))) {
                                                            this.value = '';
                                                        } else {
                                                            if (/\[day\]/.test(fields[0].name)) {
                                                                this.value = fields[1].value + '/' + fields[0].value + '/' + fields[2].value;
                                                            } else {
                                                                this.value = fields[0].value + '/' + fields[1].value + '/' + fields[2].value;
                                                            }
                                                        }
                                                    });
                                        });
                                $('.phonefield-us', '#mc_embed_signup').each(
                                        function() {
                                            var fields = new Array();
                                            var i = 0;
                                            $(':text', this).each(function() {
                                                fields[i] = this;
                                                i++;
                                            });
                                            $(':hidden', this).each(
                                                    function() {
                                                        if (fields[0].value.length != 3 || fields[1].value.length != 3 || fields[2].value.length != 4) {
                                                            this.value = '';
                                                        } else {
                                                            this.value = 'filled';
                                                        }
                                                    });
                                        });
                                return mce_validator.form();
                            },
                            success: mce_success_cb
                        };
                        $('#mc-embedded-subscribe-form').ajaxForm(options);


                    });
                }
                function mce_success_cb(resp) {
                    $('#mce-success-response').hide();
                    $('#mce-error-response').hide();
                    if (resp.result == "success") {
                        $('#mce-' + resp.result + '-response').show();
                        $('#mce-' + resp.result + '-response').html('Molimo potvrdite svoju prijavu u mail-u koji smo Vam poslali. Vaš Chili Tours.');
                        $('#mc-embedded-subscribe-form').each(function() {
                            this.reset();
                        });
                    } else {
                        var index = -1;
                        var msg;
                        try {
                            var parts = resp.msg.split(' - ', 2);
                            if (parts[1] == undefined) {
                                msg = resp.msg;
                            } else {
                                i = parseInt(parts[0]);
                                if (i.toString() == parts[0]) {
                                    index = parts[0];
                                    msg = parts[1];
                                } else {
                                    index = -1;
                                    msg = resp.msg;
                                }
                            }
                        } catch (e) {
                            index = -1;
                            msg = resp.msg;
                        }
                        try {
                            if (index == -1) {
                                $('#mce-' + resp.result + '-response').show();
                                $('#mce-' + resp.result + '-response').html(msg);
                            } else {
                                err_id = 'mce_tmp_error_msg';
                                html = '<div id="' + err_id + '" style="' + err_style + '"> ' + msg + '</div>';

                                var input_id = '#mc_embed_signup';
                                var f = $(input_id);
                                if (ftypes[index] == 'address') {
                                    input_id = '#mce-' + fnames[index] + '-addr1';
                                    f = $(input_id).parent().parent().get(0);
                                } else if (ftypes[index] == 'date') {
                                    input_id = '#mce-' + fnames[index] + '-month';
                                    f = $(input_id).parent().parent().get(0);
                                } else {
                                    input_id = '#mce-' + fnames[index];
                                    f = $().parent(input_id).get(0);
                                }
                                if (f) {
                                    $(f).append(html);
                                    $(input_id).focus();
                                } else {
                                    $('#mce-' + resp.result + '-response').show();
                                    $('#mce-' + resp.result + '-response').html(msg);
                                }
                            }
                        } catch (e) {
                            $('#mce-' + resp.result + '-response').show();
                            $('#mce-' + resp.result + '-response').html(msg);
                        }
                    }
                }

            </script>
            <?php echo $this->Element('share'); ?>

            <!--End mc_embed_signup-->
            <?php echo $this->Element('likebox'); ?>

            <a href="http://crosportvez.hr/" target="_blank"><img src="/img/csv.png"></a>
            <a href="http://www.zagrebapartments.eu/" target="_blank"><img src="/img/zg-apartments.png"></a>
            <div class="well" style="padding: 8px 0; margin-top:10px;">
                <ul class="nav nav-list">
                    <li class="nav-header upcomingtitle">Popis putovanja</li>
                    <?php foreach ($upcoming as $upcoming): ?> 
                        <?php if (!empty($upcoming['Travel']['id']) && time() < strtotime($upcoming['Term']['startdate'])): ?>
                            <li class="upcominglist"><a href="/travels/view/<?php echo $upcoming['Travel']['id']; ?>"><?php echo $this->Time->format($upcoming['Term']['startdate'], '%d. %m.' . " - " . $upcoming['Travel']['name_hr']); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?> 
                </ul>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript" language="javascript">

    $(document).ready(function() {
        $(".box_skitter_large").skitter();
    });

</script>
