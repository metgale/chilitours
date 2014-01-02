<div class='travelview'>
    <div class="row">
        <?php echo $this->Element('cta'); ?>
        <h1> <?php echo $travel['Travel']['name_hr']; ?></h1>

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
        <div class="span3 category-list">
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
                            <td><?= $term['startdate']; ?></td>
                            <td><?= $term['enddate']; ?></td>
                            <td><?= $term['price']; ?></td>
                            <td><?= $term['town']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h2>O putovanju</h2>
            <hr>
            <?php echo $travel['Travel']['program_hr']; ?>
        </div>
    </div>
</div>