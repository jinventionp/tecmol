<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Audit $audit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Audits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Audit Deltas'), ['controller' => 'AuditDeltas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Audit Delta'), ['controller' => 'AuditDeltas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="audits form large-9 medium-8 columns content">
    <?= $this->Form->create($audit) ?>
    <fieldset>
        <legend><?= __('Add Audit') ?></legend>
        <?php
            echo $this->Form->control('event');
            echo $this->Form->control('model');
            echo $this->Form->control('entity_id');
            echo $this->Form->control('request_id', ['options' => $requests]);
            echo $this->Form->control('json_object');
            echo $this->Form->control('description');
            echo $this->Form->control('source_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
