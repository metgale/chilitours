<?php $this->set('title_for_layout', $accomodation['Accomodation']['title_hr'] . ' | Chili tours turistička agencija'); ?>

<?php
$this->Html->meta(
        'description', $accomodation['Accomodation']['description_hr']);
?>

<div class='travelview'>

    <div class="row">

        <div class="span3 left-content">

<?php echo $this->Element('logo'); ?>

        </div>

        <div class="span9">

        </div>

        <!-- Modal -->

        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>  
            <h1><?php echo $accomodation['Accomodation']['title_hr']; ?></h1>
            <form class="well" method="post" action="/contacts/reservationAcc">     
                <input class="span3" name="SmjeĹˇtaj" value="<?php echo $accomodation['Accomodation']['title_hr'] ?> (<?php echo $accomodation['Location']['title']; ?>)" type="hidden">

                <label>Od</label> <input class="span3" name="Od" type="date">

                <label>Do</label> <input class="span3" name="Do" type="date">                

                <label>Ime</label> <input class="span3" name="ime" type="text">

                <label>Prezime</label><input class="span3" name="prezime" type="text">

                <label>Email Adresa</label> <input class="span3" name="email" type="text"> 

                <label>Broj odraslih osoba</label> <input class="span3" name="Broj Osoba"  type="text"> 

                <label>Broj djece (do 12 godina)</label> <input class="span3" name="Broj Djece"  type="text">

                <label>Dodatne informacije</label> 

                <textarea class="input-large span5" id="message" name="message"

                          rows="3">

                </textarea>

                <button class="btn btn-primary" type="submit" >Rezerviraj</button>

            </form>



        </div>



        <div class="gallery span9 pull-right">

<?php foreach ($accomodation['Image'] as $image): ?>

                <?php if ($image['headphoto'] == 1): ?>

                    <img class="imageforpage" src="/img/travelphotos/<?php echo $image['id'] ?>/<?php echo $image['attachment'] ?>">

    <?php endif ?>

            <?php endforeach; ?>



            <h3><p><?php echo $accomodation['Accomodation']['title_hr']; ?><img src="/img/icons/<?php echo $accomodation['Accomodation']['category']; ?>.png"> 

                    <a href="#myModal" role="button" class="btn btn-success pull-right" data-toggle="modal">Rezerviraj smještaj</a></p> </h3>


            <hr>

<?php foreach ($accomodation['Image'] as $image): ?>

                <a href="/img/travelphotos/<?php echo $image['id'] ?>/<?php echo $image['attachment']; ?>" data-lightbox="accomodation"><?php echo $this->Html->image('/img/travelphotos/' . $image['id'] . '/thumb_' . $image['attachment'], array('class' => 'headimage')); ?></a>

<?php endforeach; ?>

        </div>

    </div>

    <div class="row">



        <div class="details span9 pull-right">

            <h3><small>Cijena od: </small><?php echo $accomodation['Accomodation']['price']; ?></h3> 

            <hr>

            <div class="span3">

                <p><strong><?php echo $accomodation['Accomodation']['seadistance']; ?></strong>  do mora</p>

                <p><strong><?php echo $accomodation['Accomodation']['centerdistance']; ?></strong>  do centra</p>

                <p><strong><?php echo $accomodation['Accomodation']['shopdistance']; ?></strong>  do trgovine</p>

            </div>

            <div class="span3">

                <p><?php if (!$accomodation['Accomodation']['parking']): echo $this->Html->Image('icons/green.png'); ?>

<?php else: echo $this->Html->Image('icons/red.png'); ?>

                    <?php endif; ?> Parking

                </p>

                <p><?php if (!$accomodation['Accomodation']['bbq']): echo $this->Html->Image('icons/green.png'); ?>

<?php else: echo $this->Html->Image('icons/red.png'); ?>

                    <?php endif; ?> Roštilj

                </p>

                <p><?php if (!$accomodation['Accomodation']['tv']): echo $this->Html->Image('icons/green.png'); ?>

<?php else: echo $this->Html->Image('icons/red.png'); ?>

                    <?php endif; ?> TV

                </p>

                <p><?php if (!$accomodation['Accomodation']['conditioned']): echo $this->Html->Image('icons/green.png'); ?>

<?php else: echo $this->Html->Image('icons/red.png'); ?>

                    <?php endif; ?> Klima

                </p>

            </div>

            <div class="span2">

                <p><?php if (!$accomodation['Accomodation']['dishwash']): echo $this->Html->Image('icons/green.png'); ?>

<?php else: echo $this->Html->Image('icons/red.png'); ?>

                    <?php endif; ?> Perilica suđa

                </p>

                <p><?php if (!$accomodation['Accomodation']['clotheswash']): echo $this->Html->Image('icons/green.png'); ?>

<?php else: echo $this->Html->Image('icons/red.png'); ?>

                    <?php endif; ?> Perilica rublja

                </p>

                <p><?php if (!$accomodation['Accomodation']['internet']): echo $this->Html->Image('icons/green.png'); ?>

<?php else: echo $this->Html->Image('icons/red.png'); ?>

                    <?php endif; ?> Internet

                </p>





            </div>





        </div>

    </div>

    <div class="row">

        <div class="span9 page-content pull-right">

            <h3>Dodatne informacije</h3>

            <hr>

<?php echo $accomodation['Accomodation']['description_hr']; ?>

            <a href="#myModal" role="button" class="btn btn-success pull-right" data-toggle="modal">Rezerviraj smještaj</a> 

            <div class="fb-share-button" data-href="<?php echo Router::url($this->here, true); ?>" data-type="button"></div>

        </div>

        <div class="span3 left-content">

            <div class="well" style="padding: 8px 0;">

                <ul class="nav nav-list">

                    <li class="nav-header">Povezani smještaj</li>

<?php if (count($related) <= 1): ?>

                        <p>Trenutno nema drugih smještaja na ovoj lokaciji</p>

<?php else: ?>

                        <?php foreach ($related as $relacc): ?>

                            <?php if ($relacc['Accomodation']['id'] != $accomodation['Accomodation']['id']): ?>

                                <li><?php echo $this->Html->link($relacc['Accomodation']['title_hr'], array('controller' => 'accomodations', 'action' => 'view', $relacc['Accomodation']['id'])); ?></li>

        <?php endif; ?>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </ul>

            </div>



        </div>

    </div>

</div>