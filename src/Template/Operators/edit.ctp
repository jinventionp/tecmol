<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operator $operator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $operator->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $operator->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Operators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reportqueries'), ['controller' => 'Reportqueries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reportquery'), ['controller' => 'Reportqueries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="operators form large-9 medium-8 columns content">
    <?= $this->Form->create($operator) ?>
    <fieldset>
        <legend><?= __('Edit Operator') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('operator');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
