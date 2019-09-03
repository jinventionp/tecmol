<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsTypeconcept $departmentsTypeconcept
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $departmentsTypeconcept->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsTypeconcept->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Departments Typeconcepts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departmentsTypeconcepts form large-9 medium-8 columns content">
    <?= $this->Form->create($departmentsTypeconcept) ?>
    <fieldset>
        <legend><?= __('Edit Departments Typeconcept') ?></legend>
        <?php
            echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->control('typeconcept_id', ['options' => $typeconcepts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
