<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportsortcolumn[]|\Cake\Collection\CollectionInterface $reportsortcolumns
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reportsortcolumn'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportsortcolumns index large-9 medium-8 columns content">
    <h3><?= __('Reportsortcolumns') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('report_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columnname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sortorder') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportsortcolumns as $reportsortcolumn): ?>
            <tr>
                <td><?= $this->Number->format($reportsortcolumn->id) ?></td>
                <td><?= $reportsortcolumn->has('report') ? $this->Html->link($reportsortcolumn->report->name, ['controller' => 'Reports', 'action' => 'view', $reportsortcolumn->report->id]) : '' ?></td>
                <td><?= h($reportsortcolumn->columnname) ?></td>
                <td><?= h($reportsortcolumn->sortorder) ?></td>
                <td><?= h($reportsortcolumn->created) ?></td>
                <td><?= h($reportsortcolumn->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reportsortcolumn->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reportsortcolumn->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reportsortcolumn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportsortcolumn->id)]) ?>
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
