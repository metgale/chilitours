<?php $this->assign('title', 'Chili Tours - turistička agencija'); ?>

<?php $this->append('meta'); ?>
<meta name="description" content="Pregledajte ponudu Chili Tours turističke agencije u Zagrebu. Raznovrsna ponuda povoljnih putovanja. Ljetovanja, zimovanja, vikend ili avanturistički izleti.">
<meta property="og:description" content="<?php echo $travel['Travel']['short_hr']; ?>">
<meta property="og:url" content="http://chilitours.hr/travels/view/<?php echo $travel['Travel']['id']; ?>"/>
<meta property="og:title" content="<?php echo $travel['Travel']['name_hr']; ?>">
<?php foreach ($travel['Image'] as $image): ?>
    <?php if ($image['headphoto'] == 1): ?>
        <meta property="og:image" content="http://chilitours.hr/img/travelphotos/<?php echo $image['id'] ?>/<?php echo $image['attachment'] ?>">
    <?php endif ?>
<?php endforeach; ?>
<?php $this->end(); ?>
<div class='travelview'>
    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9">
        </div>


        <div class="gallery span9 pull-right">
            <?php foreach ($travel['Image'] as $image): ?>
                <?php if ($image['headphoto'] == 1): ?>
                    <img class="imageforpage" src="/img/travelphotos/<?php echo $image['id'] ?>/<?php echo $image['attachment'] ?>">
                <?php endif ?>
            <?php endforeach; ?>
            <?php if ($travel['Travel']['english'] == 1): ?>
                <h3><p><?php echo $travel['Travel']['name_hr']; ?><a href="#myModal" role="button" class="btn btn-success pull-right" data-toggle="modal">Book This Travel</a></p> </h3>

            <?php else: ?>
                <h3><p><?php echo $travel['Travel']['name_hr']; ?><a href="#myModal" role="button" class="btn btn-success pull-right" data-toggle="modal">Rezerviraj putovanje</a></p> </h3>

            <?php endif; ?>
            <div class="fb-share-button" data-href="<?php echo Router::url($this->here, true); ?>" data-type="button"></div>

            <hr>
            <?php if ($travel['Travel']['english'] == 1): ?>
                <h3> Terms</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Price</th>
                            <th>From</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($travel['Term'] as $term): ?>
                            <tr>

                                <td><?php echo $this->Time->format($term['startdate'], '%d-%m-%Y'); ?></td>
                                <td><?php echo $this->Time->format($term['enddate'], '%d-%m-%Y'); ?></td>
                                <td><?= $term['price']; ?></td>
                                <td><?= $term['town']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h3> Termini</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Datum polaska</th>
                            <th>Datum povratka</th>
                            <th>Cijena</th>
                            <th>Mjesto polaska</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($travel['Term'] as $term): ?>
                            <tr>
                                <td><?php echo $this->Time->format($term['startdate'], '%d-%m-%Y'); ?></td>
                                <td><?php echo $this->Time->format($term['enddate'], '%d-%m-%Y'); ?></td>
                                <td><?= $term['price']; ?></td>
                                <td><?= $term['town']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>

        </div>
    </div>
    <div class="row">
        <div class="span3 left-content">
            <?php if ($travel['Travel']['english'] == 1): ?>
                <div class="well" style="padding: 8px 0;">
                    <ul class="nav nav-list">
                        <?php if (count($related) == null): ?>
                            <p>No related travels</p>
                        <?php else: ?>
                            <li class="nav-header">Related Travels</li>
                            <?php foreach ($related as $reltrav): ?>
                                <?php if ($reltrav['Travel']['id'] != $travel['Travel']['id']): ?>
                                    <?php if ($reltrav['Travel']['english'] == 1): ?> 
                                        <li><?php echo $this->Html->link($reltrav['Travel']['name_hr'], array('controller' => 'travels', 'action' => 'view', $reltrav['Travel']['id'])); ?></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        <?php endif; ?>
                    </ul>
                </div>
            <?php else: ?>
                <div class="well" style="padding: 8px 0;">
                    <ul class="nav nav-list">
                        <?php if (count($related) == null): ?>
                            <p>Trenutno nema drugih putovanja u ovoj kategoriji</p>
                        <?php else: ?>
                            <li class="nav-header">Povezana Putovanja</li>
                            <?php foreach ($related as $reltrav): ?>
                                <?php if ($reltrav['Travel']['id'] != $travel['Travel']['id']): ?>
                                    <li><?php echo $this->Html->link($reltrav['Travel']['name_hr'], array('controller' => 'travels', 'action' => 'view', $reltrav['Travel']['id'])); ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        <?php endif; ?>
                    </ul>
                </div>
                <div class="well" style="padding: 8px 0;">
                    <ul class="nav nav-list">
                        <li class="nav-header">Posljednji blog postovi</li>
                        <?php foreach ($blogs as $blog): ?>
                            <li><a href="<?php echo $blog['Blog']['content']; ?>"><?php echo $blog['Blog']['title'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>            
            <?php endif; ?> 


        </div>

        <div class="span9 page-content pull-right">
            <?php if ($travel['Travel']['english'] == 1): ?>
                <h3>Travel Description</h3>
            <?php else: ?>
                <h3>O putovanju</h3>
            <?php endif; ?>
            <hr>
            <?php echo $travel['Travel']['program_hr']; ?>
            <?php if (!empty($travel['Travel']['video'])): ?>
                <div class="text-center">
                    <iframe width="560" height="315" src="<?php echo $travel['Travel']['video']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endif; ?>

        </div>
        <div class="row">
            <div class="details span9 pull-right">
                <?php if ($travel['Travel']['english'] == 1): ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Accomodation Category</th>
                                <th>Travel by</th>
                                <th>Service</th>
                            </tr>
                        </thead>
                        <tbody class="edit">
                            <tr>
                                <td><img src="/img/icons/<?php echo $travel['Travel']['accomodation']; ?>.png"></td>
                                <td><?php echo $travel['Travel']['transport_hr']; ?></td>
                                <td><?php echo $travel['Travel']['service_hr']; ?></td>
                            </tr>
                        </tbody>
                    </table>                <?php else: ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Kategorija smještaja</th>
                                <th>Prijevoz</th>
                                <th>Usluga</th>
                            </tr>
                        </thead>
                        <tbody class="edit">
                            <tr>
                                <td><img src="/img/icons/<?php echo $travel['Travel']['accomodation']; ?>.png"></td>
                                <td><?php echo $travel['Travel']['transport_hr']; ?></td>
                                <td><?php echo $travel['Travel']['service_hr']; ?></td>
                            </tr>
                        </tbody>
                    </table>                <?php endif; ?>

            </div>
        </div>
        <div class="gallery page-content span9 pull-right">
            <?php if ($travel['Travel']['english'] == 1): ?>
                <h3>Gallery</h3>
            <?php else: ?>
                <h3>Galerija</h3>
            <?php endif; ?>       
            <?php foreach ($travel['Image'] as $image): ?>
                <a href="/img/travelphotos/<?php echo $image['id'] ?>/<?php echo $image['attachment']; ?>" data-lightbox="roadtrip"><?php echo $this->Html->image('/img/travelphotos/' . $image['id'] . '/thumb_' . $image['attachment']); ?></a>
            <?php endforeach; ?>

        </div>

    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <?php if ($travel['Travel']['english'] == 1): ?>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>  
        <h1><?php echo $travel['Travel']['name_hr']; ?></h1>
        <div class="modal-gallery">
        </div>
        <form class="well" method="post" action="/contacts/reservation">
            <label>Term</label>
            <select name="Termin">
                <?php foreach ($travel['Term'] as $term): ?>
                    <option name="Termin"><?php echo $this->Time->format($term['startdate'], '%d-%m-%Y'); ?></option>
                <?php endforeach; ?>
            </select>

            <input class="span3" name="Putovanje" type="hidden" value="<?php echo $travel['Travel']['name_hr']; ?>"</input>
            <label>First Name</label> <input class="span3" name="ime" type="text">
            <label>Last name</label><input class="span3" name="prezime" type="text">
            <label>Email Adress</label> <input class="span3" name="email" type="text"> 
            <label>Phone Number</label> <input class="span3" name="Kontakt Telefon" type="text"> 
            <label>Adults</label> <input class="span3" name="Broj Osoba"  type="text"> 
            <label>Minors (less than 12 years age)</label> <input class="span3" name="Broj Djece"  type="text"> 
            <label>Additional information</label> 
            <textarea class="input-large span5" id="message" name="Poruka"
                      rows="3">
            </textarea>
            <button class="btn btn-primary" type="submit" >Book</button>
        </form>   
    <?php else: ?>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>  
        <h1><?php echo $travel['Travel']['name_hr']; ?></h1>
        <div class="modal-gallery">

        </div>
        <form class="well" method="post" action="/contacts/reservation">
            <label>Termin</label>
            <select name="Termin">
                <?php foreach ($travel['Term'] as $term): ?>
                    <option name="Termin"><?php echo $this->Time->format($term['startdate'], '%d-%m-%Y'); ?></option>
                <?php endforeach; ?>
            </select>

            <input class="span3" name="Putovanje" type="hidden" value="<?php echo $travel['Travel']['name_hr']; ?>"</input>
            <label>Ime</label> <input class="span3" name="ime" type="text">
            <label>Prezime</label><input class="span3" name="prezime" type="text">
            <label>Email Adresa</label> <input class="span3" name="email" type="text">
            <label>Kontakt Telefon</label> <input class="span3"  required="required" name="Kontakt Telefon" type="text"> 
            <label>Broj odraslih osoba</label> <input class="span3" name="Broj Osoba"  type="text"> 
            <label>Broj djece (do 12 godina)</label> <input class="span3" name="Broj Djece"  type="text"> 
            <label>Dodatne informacije</label> 
            <textarea class="input-large span5" id="message" name="Poruka"
                      rows="3">
            </textarea>
            <button class="btn btn-primary" type="submit" >Rezerviraj</button>
        </form>    <?php endif; ?>       


</div>