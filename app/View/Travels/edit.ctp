<div class="row-fluid">

    <div class="span9">
        <?php echo $this->BootstrapForm->create('Travel', array('class' => 'form-horizontal', 'type' => 'file')); ?>
        <fieldset>
            <legend><?php echo __('Izmjena putovanja'); ?><?php echo $this->Html->link('Termini putovanja', array('controller' => 'terms', 'action' => 'add', $id), array('class' => 'pull-right')); ?></legend>
            <?php
            echo $this->BootstrapForm->input('category_id', array(
                'label' => 'Kategorija',
                'required' => 'required'
                    )
            );
            echo $this->BootstrapForm->input('othercategory', array(
                'label' => 'Sekundarna Kategorija',
                'options' => $categories,
                'empty' => true
            ));
            echo $this->BootstrapForm->input('priority', array(
                'label' => 'Prioritet'
            ));

            echo $this->BootstrapForm->input('name_hr', array(
                'required' => 'required',
                'label' => 'Naziv (hr)'
                    )
            );
            echo $this->BootstrapForm->input('name_eng', array(
                'required' => 'required',
                'label' => 'Naziv (eng)'
                    )
            );
            echo $this->BootstrapForm->input('short_hr', array(
                'required' => 'required',
                'label' => 'Kratki opis (hr)',
                'class' => 'input-xxlarge'
            ));
            echo $this->BootstrapForm->input('short_eng', array(
                'required' => 'required',
                'label' => 'Kratki opis (eng)',
                'class' => 'input-xxlarge'
            ));
            echo $this->BootstrapForm->input('service_hr', array(
                'required' => 'required',
                'label' => 'Vrsta usluge (hr)'
                    )
            );
            echo $this->BootstrapForm->input('service_eng', array(
                'required' => 'required',
                'label' => 'Vrsta usluge (eng)'
                    )
            );
            echo $this->BootstrapForm->input('transport_hr', array(
                'required' => 'required',
                'label' => 'Prijevoz (hr)'
                    )
            );
            echo $this->BootstrapForm->input('transport_eng', array(
                'required' => 'required',
                'label' => 'Prijevoz (eng)'
                    )
            );
            echo $this->BootstrapForm->input('accomodation', array(
                'options' => array('', '1', '2', '3', '4', '5'),
                'required' => 'required',
                'label' => 'Kategorija smještaja'
                    )
            );
            echo $this->BootstrapForm->input('program_hr', array(
                'label' => 'Program putovanja (hr)'
                    )
            );
            echo $this->BootstrapForm->input('program_eng', array(
                'label' => 'Program putovanja (eng)'
                    )
            );
            echo $this->BootstrapForm->input('featured', array(
                'label' => 'Istaknuto putovanje'
                    )
            );
            echo $this->BootstrapForm->input('published', array(
                'label' => 'Objavi'
                    )
            );
            ?>
            <hr>
            <?php
            echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'Slika 1 (Ne zaboravi checkbox - Naslovna)'));
            echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.0.headphoto', array('label' => 'Naslovna', 'type' => 'checkbox'));
            ?>
            <hr>
            <?php
            echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => 'Slika 2'));
            echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => 'Slika 3'));
            echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => 'Slika 4'));
            echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.4.attachment', array('type' => 'file', 'label' => 'Slika 5'));
            echo $this->Form->input('Image.4.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.5.attachment', array('type' => 'file', 'label' => 'Slika 6'));
            echo $this->Form->input('Image.5.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.6.attachment', array('type' => 'file', 'label' => 'Slika 7'));
            echo $this->Form->input('Image.6.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.7.attachment', array('type' => 'file', 'label' => 'Slika 8'));
            echo $this->Form->input('Image.7.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.8.attachment', array('type' => 'file', 'label' => 'Slika 9'));
            echo $this->Form->input('Image.8.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.9.attachment', array('type' => 'file', 'label' => 'Slika 10'));
            echo $this->Form->input('Image.9.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.10.attachment', array('type' => 'file', 'label' => 'Slika 11'));
            echo $this->Form->input('Image.10.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->Form->input('Image.11.attachment', array('type' => 'file', 'label' => 'Slika 12'));
            echo $this->Form->input('Image.11.model', array('type' => 'hidden', 'value' => 'Travel'));
            echo $this->BootstrapForm->hidden('id');
            ?>
            <?php echo $this->BootstrapForm->submit(__('Uredi'), array('class' => 'btn btn-primary')); ?>
        </fieldset>
        <?php echo $this->BootstrapForm->end(); ?>
    </div>
    <div class="images-edit">
        <legend>Slike za ovo putovanje</legend>
        <?php if (!empty($images)): ?> 
            <?php foreach ($images as $image): ?>
                <div class="span2">
                    <?php echo $this->Html->image('/img/travelphotos/' . $image['Image']['id'] . '/thumb_' . $image['Image']['attachment']); ?>
                    <?php echo $this->Html->link('Izbriši sliku', array('controller' => 'travels', 'action' => 'imageDelete', $image['Image']['id']), array('class' => 'imageDelete')); ?>
                    <?php if ($image['Image']['headphoto']): ?>
                        <small>(Naslovna slika)</small>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Trenutno nema unešenih slika za ovo putovanje</p>
        <?php endif; ?>
    </div>
    <div class="entry-delete">
        <legend>Brisanje putovanja <small>(PAŽNJA. Klikom na link izbriši putovanje će se skupa sa pripadajućim slikama nepovratno izbrisati iz sustava)</small></legend>
        <?php echo $this->Form->postLink(__('Izbriši putovanje'), array('action' => 'delete', $this->Form->value('Travel.id')), null, __('Da li ste sigurni da želite izbrisati putovanje', $this->Form->value('Travel.id'))); ?>
    </div>
</div>
