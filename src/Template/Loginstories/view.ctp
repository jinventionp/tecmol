<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loginstory $loginstory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Loginstory'), ['action' => 'edit', $loginstory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Loginstory'), ['action' => 'delete', $loginstory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loginstory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Loginstories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Loginstory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="loginstories view large-9 medium-8 columns content">
    <h3><?= h($loginstory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $loginstory->has('user') ? $this->Html->link($loginstory->user->name, ['controller' => 'Users', 'action' => 'view', $loginstory->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($loginstory->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Ip') ?></th>
            <td><?= h($loginstory->user_ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($loginstory->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($loginstory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logout Time') ?></th>
            <td><?= h($loginstory->logout_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Time') ?></th>
            <td><?= h($loginstory->login_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($loginstory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($loginstory->modified) ?></td>
        </tr>
    </table>
</div>
