<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Audit $audit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Audit'), ['action' => 'edit', $audit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Audit'), ['action' => 'delete', $audit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $audit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Audits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Audit Deltas'), ['controller' => 'AuditDeltas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit Delta'), ['controller' => 'AuditDeltas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="audits view large-9 medium-8 columns content">
    <h3><?= h($audit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($audit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= h($audit->event) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($audit->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entity Id') ?></th>
            <td><?= h($audit->entity_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request') ?></th>
            <td><?= $audit->has('request') ? $this->Html->link($audit->request->name, ['controller' => 'Requests', 'action' => 'view', $audit->request->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Id') ?></th>
            <td><?= h($audit->source_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($audit->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Json Object') ?></h4>
        <?= $this->Text->autoParagraph(h($audit->json_object)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($audit->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Audit Deltas') ?></h4>
        <?php if (!empty($audit->audit_deltas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Audit Id') ?></th>
                <th scope="col"><?= __('Property Name') ?></th>
                <th scope="col"><?= __('Old Value') ?></th>
                <th scope="col"><?= __('New Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($audit->audit_deltas as $auditDeltas): ?>
            <tr>
                <td><?= h($auditDeltas->id) ?></td>
                <td><?= h($auditDeltas->audit_id) ?></td>
                <td><?= h($auditDeltas->property_name) ?></td>
                <td><?= h($auditDeltas->old_value) ?></td>
                <td><?= h($auditDeltas->new_value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AuditDeltas', 'action' => 'view', $auditDeltas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AuditDeltas', 'action' => 'edit', $auditDeltas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AuditDeltas', 'action' => 'delete', $auditDeltas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auditDeltas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
