<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Report $report
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reportfolders'), ['controller' => 'Reportfolders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reportfolder'), ['controller' => 'Reportfolders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reportqueries'), ['controller' => 'Reportqueries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reportquery'), ['controller' => 'Reportqueries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reportsortcolumns'), ['controller' => 'Reportsortcolumns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reportsortcolumn'), ['controller' => 'Reportsortcolumns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reports form large-9 medium-8 columns content">
    <?= $this->Form->create($report) ?>
    <fieldset>
        <legend><?= __('Add Report') ?></legend>
        <?php
            echo $this->Form->control('reportfolder_id', ['options' => $reportfolders]);
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('primarymodule');
            echo $this->Form->control('secondarymodules');
            echo $this->Form->control('selectcolumns');
            echo $this->Form->control('delete');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>