<div class="row-fluid">
    <div class="span9">
        <?php echo $this->BootstrapForm->create('Term', array('class' => 'form-horizontal')); ?>
        <fieldset>
            <legend><?php echo __('Edit %s', __('Term')); ?></legend>
            <?php
            echo $this->BootstrapForm->input('travel_id', array(
                'required' => 'required',
            ));
            echo $this->BootstrapForm->input('startdate', array(
            ));
            echo $this->BootstrapForm->input('enddate', array(
            ));
            echo $this->BootstrapForm->input('price', array(
            ));
            echo $this->BootstrapForm->input('town', array(
            ));
            echo $this->BootstrapForm->hidden('id');
            ?>
            <?php echo $this->BootstrapForm->submit(__('Uredi'), array('class' => 'btn btn-primary')); ?>
        </fieldset>
        <?php echo $this->BootstrapForm->end(); ?>
    </div>
    <div class="entry-delete">
        <legend>Brisanje blog posta <small>(PAŽNJA. Klikom na tipku termin će se nepovratno izbrisati iz sustava)</small></legend>
        <?php echo $this->Form->postLink(__('Izbriši termin'), array('action' => 'delete', $this->Form->value('Term.id')), null, __('Da li ste sigurni da želite izbrisati termin', $this->Form->value('Term.id'))); ?>
    </div>
</div>