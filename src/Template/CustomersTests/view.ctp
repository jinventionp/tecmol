<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersTest $customersTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customers Test'), ['action' => 'edit', $customersTest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customers Test'), ['action' => 'delete', $customersTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersTest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customers Test'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customersTests view large-9 medium-8 columns content">
    <h3><?= h($customersTest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customersTest->has('customer') ? $this->Html->link($customersTest->customer->name, ['controller' => 'Customers', 'action' => 'view', $customersTest->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test') ?></th>
            <td><?= $customersTest->has('test') ? $this->Html->link($customersTest->test->name, ['controller' => 'Tests', 'action' => 'view', $customersTest->test->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customersTest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($customersTest->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customersTest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customersTest->modified) ?></td>
        </tr>
    </table>
</div>
