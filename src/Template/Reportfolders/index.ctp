<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportfolder[]|\Cake\Collection\CollectionInterface $reportfolders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reportfolder'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportfolders index large-9 medium-8 columns content">
    <h3><?= __('Reportfolders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportfolders as $reportfolder): ?>
            <tr>
                <td><?= $this->Number->format($reportfolder->id) ?></td>
                <td><?= h($reportfolder->name) ?></td>
                <td><?= h($reportfolder->created) ?></td>
                <td><?= h($reportfolder->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reportfolder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reportfolder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reportfolder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportfolder->id)]) ?>
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
