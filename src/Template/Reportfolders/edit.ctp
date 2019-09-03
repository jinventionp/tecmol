<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportfolder $reportfolder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reportfolder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportfolder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reportfolders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportfolders form large-9 medium-8 columns content">
    <?= $this->Form->create($reportfolder) ?>
    <fieldset>
        <legend><?= __('Edit Reportfolder') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
