<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuditDelta $auditDelta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $auditDelta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $auditDelta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Audit Deltas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Audits'), ['controller' => 'Audits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Audit'), ['controller' => 'Audits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="auditDeltas form large-9 medium-8 columns content">
    <?= $this->Form->create($auditDelta) ?>
    <fieldset>
        <legend><?= __('Edit Audit Delta') ?></legend>
        <?php
            echo $this->Form->control('audit_id', ['options' => $audits]);
            echo $this->Form->control('property_name');
            echo $this->Form->control('old_value');
            echo $this->Form->control('new_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
