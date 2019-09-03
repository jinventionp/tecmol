<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FieldsProfile[]|\Cake\Collection\CollectionInterface $fieldsProfiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fields Profile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fields'), ['controller' => 'Fields', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Field'), ['controller' => 'Fields', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fieldsProfiles index large-9 medium-8 columns content">
    <h3><?= __('Fields Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('field_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('write') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fieldsProfiles as $fieldsProfile): ?>
            <tr>
                <td><?= $this->Number->format($fieldsProfile->id) ?></td>
                <td><?= $fieldsProfile->has('profile') ? $this->Html->link($fieldsProfile->profile->name, ['controller' => 'Profiles', 'action' => 'view', $fieldsProfile->profile->id]) : '' ?></td>
                <td><?= $fieldsProfile->has('field') ? $this->Html->link($fieldsProfile->field->name, ['controller' => 'Fields', 'action' => 'view', $fieldsProfile->field->id]) : '' ?></td>
                <td><?= h($fieldsProfile->write) ?></td>
                <td><?= h($fieldsProfile->created) ?></td>
                <td><?= h($fieldsProfile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fieldsProfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fieldsProfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fieldsProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fieldsProfile->id)]) ?>
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
