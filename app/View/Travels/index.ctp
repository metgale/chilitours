<div class="row-fluid">
    <div class="span9">
        <span class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Sortiraj
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><?php echo $this->Paginator->sort('name_hr', 'Prema nazivu'); ?></li>
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
            <?php foreach ($travels as $travel): ?>
                <tr>	
                    <td><?php echo $this->Html->link($travel['Travel']['name_hr'], array('action' => 'view', $travel['Travel']['slug'])); ?>&nbsp;
                        <?php if ($travel['Travel']['published'] != 1): ?> 
                            (Neobjavljeno)
                        <?php endif; ?>
                    </td>

                    <td class="actions">
                        <?php echo $this->Html->link(__('Termini'), array('controller' => 'terms', 'action' => 'add', $travel['Travel']['id']), array('class' => 'btn btn-primary')); ?>
                        <?php echo $this->Html->link(__('Uređivanje'), array('action' => 'edit', $travel['Travel']['id']), array('class' => 'btn btn-warning btn-small')); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<div class="pagination pagination">
			<ul>
				<?php
				echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
				echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
				echo $this->Paginator->next(__('next'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
				?>
			</ul>
		</div>