<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportsortcolumn $reportsortcolumn
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reportsortcolumn'), ['action' => 'edit', $reportsortcolumn->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reportsortcolumn'), ['action' => 'delete', $reportsortcolumn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportsortcolumn->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reportsortcolumns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reportsortcolumn'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reportsortcolumns view large-9 medium-8 columns content">
    <h3><?= h($reportsortcolumn->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Report') ?></th>
            <td><?= $reportsortcolumn->has('report') ? $this->Html->link($reportsortcolumn->report->name, ['controller' => 'Reports', 'action' => 'view', $reportsortcolumn->report->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columnname') ?></th>
            <td><?= h($reportsortcolumn->columnname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sortorder') ?></th>
            <td><?= h($reportsortcolumn->sortorder) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reportsortcolumn->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($reportsortcolumn->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($reportsortcolumn->modified) ?></td>
        </tr>
    </table>
</div>
