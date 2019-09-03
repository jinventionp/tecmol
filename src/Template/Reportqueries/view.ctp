<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportquery $reportquery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reportquery'), ['action' => 'edit', $reportquery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reportquery'), ['action' => 'delete', $reportquery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportquery->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reportqueries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reportquery'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Operators'), ['controller' => 'Operators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Operator'), ['controller' => 'Operators', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reportqueries view large-9 medium-8 columns content">
    <h3><?= h($reportquery->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Report') ?></th>
            <td><?= $reportquery->has('report') ? $this->Html->link($reportquery->report->name, ['controller' => 'Reports', 'action' => 'view', $reportquery->report->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operator') ?></th>
            <td><?= $reportquery->has('operator') ? $this->Html->link($reportquery->operator->name, ['controller' => 'Operators', 'action' => 'view', $reportquery->operator->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columnname') ?></th>
            <td><?= h($reportquery->columnname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($reportquery->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comparator') ?></th>
            <td><?= h($reportquery->comparator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reportquery->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($reportquery->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($reportquery->modified) ?></td>
        </tr>
    </table>
</div>
