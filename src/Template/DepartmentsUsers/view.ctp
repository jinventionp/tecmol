<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsUser $departmentsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departments User'), ['action' => 'edit', $departmentsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departments User'), ['action' => 'delete', $departmentsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departments User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departmentsUsers view large-9 medium-8 columns content">
    <h3><?= h($departmentsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $departmentsUser->has('department') ? $this->Html->link($departmentsUser->department->name, ['controller' => 'Departments', 'action' => 'view', $departmentsUser->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $departmentsUser->has('user') ? $this->Html->link($departmentsUser->user->name, ['controller' => 'Users', 'action' => 'view', $departmentsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departmentsUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($departmentsUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($departmentsUser->modified) ?></td>
        </tr>
    </table>
</div>
