<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportquery $reportquery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reportquery->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportquery->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reportqueries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Operators'), ['controller' => 'Operators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Operator'), ['controller' => 'Operators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportqueries form large-9 medium-8 columns content">
    <?= $this->Form->create($reportquery) ?>
    <fieldset>
        <legend><?= __('Edit Reportquery') ?></legend>
        <?php
            echo $this->Form->control('report_id', ['options' => $reports]);
            echo $this->Form->control('operator_id', ['options' => $operators]);
            echo $this->Form->control('columnname');
            echo $this->Form->control('value');
            echo $this->Form->control('comparator');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
