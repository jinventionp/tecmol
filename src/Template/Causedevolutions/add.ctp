<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Causedevolution $causedevolution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Causedevolutions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causedevolutions form large-9 medium-8 columns content">
    <?= $this->Form->create($causedevolution) ?>
    <fieldset>
        <legend><?= __('Add Causedevolution') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('delete');
            echo $this->Form->control('reviews._ids', ['options' => $reviews]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
