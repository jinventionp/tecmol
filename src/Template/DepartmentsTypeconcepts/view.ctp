<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsTypeconcept $departmentsTypeconcept
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departments Typeconcept'), ['action' => 'edit', $departmentsTypeconcept->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departments Typeconcept'), ['action' => 'delete', $departmentsTypeconcept->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsTypeconcept->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments Typeconcepts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departments Typeconcept'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departmentsTypeconcepts view large-9 medium-8 columns content">
    <h3><?= h($departmentsTypeconcept->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $departmentsTypeconcept->has('department') ? $this->Html->link($departmentsTypeconcept->department->name, ['controller' => 'Departments', 'action' => 'view', $departmentsTypeconcept->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typeconcept') ?></th>
            <td><?= $departmentsTypeconcept->has('typeconcept') ? $this->Html->link($departmentsTypeconcept->typeconcept->name, ['controller' => 'Typeconcepts', 'action' => 'view', $departmentsTypeconcept->typeconcept->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departmentsTypeconcept->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($departmentsTypeconcept->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($departmentsTypeconcept->modified) ?></td>
        </tr>
    </table>
</div>
