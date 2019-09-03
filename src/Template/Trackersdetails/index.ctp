<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trackersdetail[]|\Cake\Collection\CollectionInterface $trackersdetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trackersdetail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trackersdetails index large-9 medium-8 columns content">
    <h3><?= __('Trackersdetails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('module_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recordid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fieldname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trackersdetails as $trackersdetail): ?>
            <tr>
                <td><?= $this->Number->format($trackersdetail->id) ?></td>
                <td><?= $trackersdetail->has('module') ? $this->Html->link($trackersdetail->module->name, ['controller' => 'Modules', 'action' => 'view', $trackersdetail->module->id]) : '' ?></td>
                <td><?= $trackersdetail->has('user') ? $this->Html->link($trackersdetail->user->name, ['controller' => 'Users', 'action' => 'view', $trackersdetail->user->id]) : '' ?></td>
                <td><?= $this->Number->format($trackersdetail->recordid) ?></td>
                <td><?= h($trackersdetail->fieldname) ?></td>
                <td><?= h($trackersdetail->created) ?></td>
                <td><?= h($trackersdetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trackersdetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trackersdetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trackersdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trackersdetail->id)]) ?>
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
