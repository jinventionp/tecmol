<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeconcept $typeconcept
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Samples Tests'), ['controller' => 'SamplesTests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Samples Test'), ['controller' => 'SamplesTests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeconcepts form large-9 medium-8 columns content">
    <?= $this->Form->create($typeconcept) ?>
    <fieldset>
        <legend><?= __('Add Typeconcept') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('departments._ids', ['options' => $departments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
