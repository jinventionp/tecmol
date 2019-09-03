<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuditDelta $auditDelta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Audit Delta'), ['action' => 'edit', $auditDelta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Audit Delta'), ['action' => 'delete', $auditDelta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auditDelta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Audit Deltas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit Delta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Audits'), ['controller' => 'Audits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit'), ['controller' => 'Audits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="auditDeltas view large-9 medium-8 columns content">
    <h3><?= h($auditDelta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($auditDelta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Audit') ?></th>
            <td><?= $auditDelta->has('audit') ? $this->Html->link($auditDelta->audit->id, ['controller' => 'Audits', 'action' => 'view', $auditDelta->audit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Name') ?></th>
            <td><?= h($auditDelta->property_name) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Old Value') ?></h4>
        <?= $this->Text->autoParagraph(h($auditDelta->old_value)); ?>
    </div>
    <div class="row">
        <h4><?= __('New Value') ?></h4>
        <?= $this->Text->autoParagraph(h($auditDelta->new_value)); ?>
    </div>
</div>
