<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trackersdetail $trackersdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Trackersdetail'), ['action' => 'edit', $trackersdetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trackersdetail'), ['action' => 'delete', $trackersdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trackersdetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Trackersdetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trackersdetail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trackersdetails view large-9 medium-8 columns content">
    <h3><?= h($trackersdetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Module') ?></th>
            <td><?= $trackersdetail->has('module') ? $this->Html->link($trackersdetail->module->name, ['controller' => 'Modules', 'action' => 'view', $trackersdetail->module->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $trackersdetail->has('user') ? $this->Html->link($trackersdetail->user->name, ['controller' => 'Users', 'action' => 'view', $trackersdetail->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fieldname') ?></th>
            <td><?= h($trackersdetail->fieldname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trackersdetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recordid') ?></th>
            <td><?= $this->Number->format($trackersdetail->recordid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($trackersdetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($trackersdetail->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Prevalue') ?></h4>
        <?= $this->Text->autoParagraph(h($trackersdetail->prevalue)); ?>
    </div>
    <div class="row">
        <h4><?= __('Postvalue') ?></h4>
        <?= $this->Text->autoParagraph(h($trackersdetail->postvalue)); ?>
    </div>
</div>
