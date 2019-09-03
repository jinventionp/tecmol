<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersTest[]|\Cake\Collection\CollectionInterface $customersTests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customers Test'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customersTests index large-9 medium-8 columns content">
    <h3><?= __('Customers Tests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customersTests as $customersTest): ?>
            <tr>
                <td><?= $this->Number->format($customersTest->id) ?></td>
                <td><?= $customersTest->has('customer') ? $this->Html->link($customersTest->customer->name, ['controller' => 'Customers', 'action' => 'view', $customersTest->customer->id]) : '' ?></td>
                <td><?= $customersTest->has('test') ? $this->Html->link($customersTest->test->name, ['controller' => 'Tests', 'action' => 'view', $customersTest->test->id]) : '' ?></td>
                <td><?= $this->Number->format($customersTest->price) ?></td>
                <td><?= h($customersTest->created) ?></td>
                <td><?= h($customersTest->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customersTest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customersTest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customersTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersTest->id)]) ?>
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
