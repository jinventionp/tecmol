<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersTest $customersTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customersTest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customersTest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customers Tests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customersTests form large-9 medium-8 columns content">
    <?= $this->Form->create($customersTest) ?>
    <fieldset>
        <legend><?= __('Edit Customers Test') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('test_id', ['options' => $tests]);
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
