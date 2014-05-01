<div class="row-fluid">
    <div class="span9">
        <span class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Sortiraj
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><?php echo $this->Paginator->sort('title_hr', 'Prema nazivu'); ?></li>
                <li><?php echo $this->Paginator->sort('modified', 'Posljednje uređivani'); ?></li>
                <li><?php echo $this->Paginator->sort('created', 'Posljednje kreirani'); ?></li>
                <li><?php echo $this->Paginator->sort('published', 'Objavljeni'); ?></li>
            </ul>
        </span>

        <table class="table table-hover">
            <tr>
                <th>Naziv</th>
                <th class="actions"><?php echo __(''); ?></th>
            </tr>
            <?php foreach ($accomodations as $accomodation): ?>
                <tr>	
                    <td><?php echo $this->Html->link($accomodation['Accomodation']['title_hr'], array('action' => 'view', $accomodation['Accomodation']['slug'])); ?>&nbsp;
                        <?php if ($accomodation['Accomodation']['published'] != 1): ?> 
                            (Neobjavljeno)
                        <?php endif; ?>
                    </td>

                    <td class="actions">
                        <?php echo $this->Html->link(__('Uređivanje'), array('action' => 'edit', $accomodation['Accomodation']['id']), array('class' => 'btn btn-warning btn-small')); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>