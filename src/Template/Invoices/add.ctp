<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invoices form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->control('num_invoice');
            echo $this->Form->control('total_invoice');
            echo $this->Form->control('date_emission', ['empty' => true]);
            echo $this->Form->control('date_expiration', ['empty' => true]);
            echo $this->Form->control('date_delivery', ['empty' => true]);
            echo $this->Form->control('annul');
            echo $this->Form->control('na');
            echo $this->Form->control('delete');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
