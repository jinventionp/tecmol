<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sample $sample
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sample->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sample->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Samples'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lines'), ['controller' => 'Lines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Line'), ['controller' => 'Lines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Observations'), ['controller' => 'Observations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Observation'), ['controller' => 'Observations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="samples form large-9 medium-8 columns content">
    <?= $this->Form->create($sample) ?>
    <fieldset>
        <legend><?= __('Edit Sample') ?></legend>
        <?php
            echo $this->Form->control('department_id', ['options' => $departments]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('line_id', ['options' => $lines]);
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('state_previous');
            echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
            echo $this->Form->control('request_id', ['options' => $requests, 'empty' => true]);
            echo $this->Form->control('typeconcept_id', ['options' => $typeconcepts, 'empty' => true]);
            echo $this->Form->control('formato');
            echo $this->Form->control('num_sample');
            echo $this->Form->control('bacth');
            echo $this->Form->control('presentation');
            echo $this->Form->control('quantity');
            echo $this->Form->control('arrival_date', ['empty' => true]);
            echo $this->Form->control('notification_date_technical_area', ['empty' => true]);
            echo $this->Form->control('collecting_samples_date_technical_area', ['empty' => true]);
            echo $this->Form->control('estimated_output_date', ['empty' => true]);
            echo $this->Form->control('date_of_preparation_of_report', ['empty' => true]);
            echo $this->Form->control('sample_delivery_technical_director', ['empty' => true]);
            echo $this->Form->control('result_format_out_of_specification');
            echo $this->Form->control('responsible_for_review_technical_director');
            echo $this->Form->control('return_report_marketing');
            echo $this->Form->control('return_cause_report_marketing');
            echo $this->Form->control('delivery_date_route', ['empty' => true]);
            echo $this->Form->control('responsible_report_dhl');
            echo $this->Form->control('customer_delivery_report', ['empty' => true]);
            echo $this->Form->control('invoice_number');
            echo $this->Form->control('creation_date_of_invoice', ['empty' => true]);
            echo $this->Form->control('delivery_date_of_invoice', ['empty' => true]);
            echo $this->Form->control('status');
            echo $this->Form->control('destruction');
            echo $this->Form->control('date_destruction', ['empty' => true]);
            echo $this->Form->control('annul');
            echo $this->Form->control('delete');
            echo $this->Form->control('tests._ids', ['options' => $tests]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
