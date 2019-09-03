<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loginstory[]|\Cake\Collection\CollectionInterface $loginstories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Loginstory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="loginstories index large-9 medium-8 columns content">
    <h3><?= __('Loginstories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logout_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loginstories as $loginstory): ?>
            <tr>
                <td><?= $this->Number->format($loginstory->id) ?></td>
                <td><?= $loginstory->has('user') ? $this->Html->link($loginstory->user->name, ['controller' => 'Users', 'action' => 'view', $loginstory->user->id]) : '' ?></td>
                <td><?= h($loginstory->username) ?></td>
                <td><?= h($loginstory->user_ip) ?></td>
                <td><?= h($loginstory->logout_time) ?></td>
                <td><?= h($loginstory->login_time) ?></td>
                <td><?= h($loginstory->status) ?></td>
                <td><?= h($loginstory->created) ?></td>
                <td><?= h($loginstory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $loginstory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $loginstory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $loginstory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loginstory->id)]) ?>
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
