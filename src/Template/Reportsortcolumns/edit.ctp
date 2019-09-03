<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportsortcolumn $reportsortcolumn
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reportsortcolumn->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportsortcolumn->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reportsortcolumns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportsortcolumns form large-9 medium-8 columns content">
    <?= $this->Form->create($reportsortcolumn) ?>
    <fieldset>
        <legend><?= __('Edit Reportsortcolumn') ?></legend>
        <?php
            echo $this->Form->control('report_id', ['options' => $reports]);
            echo $this->Form->control('columnname');
            echo $this->Form->control('sortorder');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
