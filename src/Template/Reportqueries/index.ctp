<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportquery[]|\Cake\Collection\CollectionInterface $reportqueries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reportquery'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Operators'), ['controller' => 'Operators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Operator'), ['controller' => 'Operators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportqueries index large-9 medium-8 columns content">
    <h3><?= __('Reportqueries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('report_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operator_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columnname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comparator') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportqueries as $reportquery): ?>
            <tr>
                <td><?= $this->Number->format($reportquery->id) ?></td>
                <td><?= $reportquery->has('report') ? $this->Html->link($reportquery->report->name, ['controller' => 'Reports', 'action' => 'view', $reportquery->report->id]) : '' ?></td>
                <td><?= $reportquery->has('operator') ? $this->Html->link($reportquery->operator->name, ['controller' => 'Operators', 'action' => 'view', $reportquery->operator->id]) : '' ?></td>
                <td><?= h($reportquery->columnname) ?></td>
                <td><?= h($reportquery->value) ?></td>
                <td><?= h($reportquery->comparator) ?></td>
                <td><?= h($reportquery->created) ?></td>
                <td><?= h($reportquery->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reportquery->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reportquery->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reportquery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportquery->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
