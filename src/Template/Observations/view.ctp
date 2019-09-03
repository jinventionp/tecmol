<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observation $observation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Observation'), ['action' => 'edit', $observation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Observation'), ['action' => 'delete', $observation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $observation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Observations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Observation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="observations view large-9 medium-8 columns content">
    <h3><?= h($observation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $observation->has('user') ? $this->Html->link($observation->user->name, ['controller' => 'Users', 'action' => 'view', $observation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample') ?></th>
            <td><?= $observation->has('sample') ? $this->Html->link($observation->sample->id, ['controller' => 'Samples', 'action' => 'view', $observation->sample->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($observation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($observation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($observation->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $observation->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($observation->name)); ?>
    </div>
</div>
