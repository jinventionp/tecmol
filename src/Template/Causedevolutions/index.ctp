<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Causedevolution[]|\Cake\Collection\CollectionInterface $causedevolutions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Causedevolution'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causedevolutions index large-9 medium-8 columns content">
    <h3><?= __('Causedevolutions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($causedevolutions as $causedevolution): ?>
            <tr>
                <td><?= $this->Number->format($causedevolution->id) ?></td>
                <td><?= h($causedevolution->name) ?></td>
                <td><?= h($causedevolution->delete) ?></td>
                <td><?= h($causedevolution->created) ?></td>
                <td><?= h($causedevolution->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $causedevolution->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $causedevolution->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $causedevolution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causedevolution->id)]) ?>
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
