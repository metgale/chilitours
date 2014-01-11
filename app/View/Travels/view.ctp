<div class='travelview'>

    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
        <h2><p><?php echo $travel['Travel']['name_hr']; ?>  <a href="#myModal" role="button" class="btn btn-success pull-right" data-toggle="modal">Rezerviraj putovanje</a></p> </h2>



        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>  
            <h2><?php echo $travel['Travel']['name_hr']; ?></h2>
  
                <div class="modal-gallery">
                    <?php foreach ($travel['Image'] as $image): ?>
                        <a href="/img/travelphotos/<?php echo $image['id'] ?>/<?php echo $image['attachment']; ?>" data-lightbox="roadtrip"><?php echo $this->Html->image('/img/travelphotos/' . $image['id'] . '/thumb_' . $image['attachment']); ?></a>
                    <?php endforeach; ?>
                </div>
                <form class="well" method="post" action="/contacts/reservation">
                    <label>Termin</label><select>
                        <?php foreach ($travel['Term'] as $term): ?>
                            <option><?php echo $this->Time->format($term['startdate'], '%d-%m-%Y'); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Ime</label> <input class="span3" name="ime" type="text">
                    <label>Prezime</label><input class="span3" name="prezime" type="text">
                    <label>Email Adresa</label> <input class="span3" name="email" type="text"> 
                    <label>Broj odraslih osoba</label> <input class="span3" name="Broj Osoba"  type="text"> 
                    <label>Broj djece (do 12 godina)</label> <input class="span3" name="Broj Osoba"  type="text">
                    <label>Dodatne informacije</label> 
                    <textarea class="input-large span5" id="message" name="message"
                              rows="3">
                    </textarea>

                    <button class="btn btn-primary" type="submit" >Rezerviraj</button>
                </form>

        </div>

        <div class="gallery span9 pull-right">
            <?php foreach ($travel['Image'] as $image): ?>
                <a href="/img/travelphotos/<?php echo $image['id'] ?>/<?php echo $image['attachment']; ?>" data-lightbox="roadtrip"><?php echo $this->Html->image('/img/travelphotos/' . $image['id'] . '/thumb_' . $image['attachment']); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="details span9 pull-right">
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
            </table>
        </div>
    </div>
    <div class="row">
        <div class="span3 left-content">
            <div class="well" style="padding: 8px 0;">
                <ul class="nav nav-list">
                    <li class="nav-header">Povezana Putovanja</li>
                    <?php foreach ($related as $reltrav): ?>
                        <li><?php echo $this->Html->link($reltrav['Travel']['name_hr'], array('controller' => 'travels', 'action' => 'view', $reltrav['Travel']['id'])); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="well" style="padding: 8px 0;">
                <ul class="nav nav-list">
                    <li class="nav-header">Posljednji blog postovi</li>
                    <?php foreach ($blogs as $id => $name): ?>
                        <li><?php echo $this->Html->link($name, array('controller' => 'blogs', 'action' => 'view', $id)); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="page-content span9 pull-right">
            <h2> Termini</h2>
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
        </div>
        <div class="span9 page-content pull-right">
            <h2>O putovanju</h2>
            <hr>
            <?php echo $travel['Travel']['program_hr']; ?>
            <a href="#myModal" role="button" class="btn btn-success pull-right" data-toggle="modal">Rezerviraj putovanje</a> 
        </div>

    </div>
</div>