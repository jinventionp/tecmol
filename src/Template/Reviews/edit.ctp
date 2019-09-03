<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $review->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Causedevolutions'), ['controller' => 'Causedevolutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Causedevolution'), ['controller' => 'Causedevolutions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reviews form large-9 medium-8 columns content">
    <?= $this->Form->create($review) ?>
    <fieldset>
        <legend><?= __('Edit Review') ?></legend>
        <?php
            echo $this->Form->control('sample_id', ['options' => $samples]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('review_date', ['empty' => true]);
            echo $this->Form->control('return_technical_director');
            echo $this->Form->control('delivery_date_marketing', ['empty' => true]);
            echo $this->Form->control('primary_data_error');
            echo $this->Form->control('delete');
            echo $this->Form->control('causedevolutions._ids', ['options' => $causedevolutions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
