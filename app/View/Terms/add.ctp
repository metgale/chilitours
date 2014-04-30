<div class="row-fluid">
    <?php if (!empty($terms)): ?>
        <div class="span9">
            <h2>Termini</h2>
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
                    <?php foreach ($terms as $term): ?>
                        <tr>
                            <td><?= $term['Term']['startdate']; ?></td>
                            <td><?= $term['Term']['enddate']; ?></td>
                            <td><?= $term['Term']['price']; ?></td>
                            <td><?= $term['Term']['town']; ?></td>
                            <td><?= $this->Html->link('Uređivanje', array('controller' => 'terms', 'action' => 'edit', $term['Term']['id'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>


    <div class="span9">
        <?php echo $this->BootstrapForm->create('Term', array('class' => 'form-horizontal')); ?>
        <fieldset>
            <legend><?php
                foreach ($travels as $travel) {
                    echo __('Novi termin za ' . $travel);
                }
                ?></legend>
            <?php
            echo $this->BootstrapForm->input('travel_id', array(
                'required' => 'required',
                'label' => 'Putovanje'
                    )
            );
            echo $this->BootstrapForm->input('startdate', array(
                'empty' => true,
                'label' => 'Datum polaska',
                'class' => 'input-small'
                    )
            );
            echo $this->BootstrapForm->input('enddate', array(
                'empty' => true,
                'label' => 'Datum povratka',
                'class' => 'input-small'
                    )
            );
            echo $this->BootstrapForm->input('price', array(
                'label' => 'Cijena'
                    )
            );
            echo $this->BootstrapForm->input('town', array(
                'label' => 'Mjesto polaska'
                    )
            );
            ?>
            <?php echo $this->BootstrapForm->submit(__('Dodaj'), array('class' => 'btn btn-primary')); ?>
        </fieldset>
        <?php echo $this->BootstrapForm->end(); ?>
    </div>
</div>