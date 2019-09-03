<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuditDelta[]|\Cake\Collection\CollectionInterface $auditDeltas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Audit Delta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Audits'), ['controller' => 'Audits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Audit'), ['controller' => 'Audits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="auditDeltas index large-9 medium-8 columns content">
    <h3><?= __('Audit Deltas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('audit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($auditDeltas as $auditDelta): ?>
            <tr>
                <td><?= h($auditDelta->id) ?></td>
                <td><?= $auditDelta->has('audit') ? $this->Html->link($auditDelta->audit->id, ['controller' => 'Audits', 'action' => 'view', $auditDelta->audit->id]) : '' ?></td>
                <td><?= h($auditDelta->property_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $auditDelta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $auditDelta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $auditDelta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auditDelta->id)]) ?>
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
