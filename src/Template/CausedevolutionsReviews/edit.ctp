<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CausedevolutionsReview $causedevolutionsReview
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $causedevolutionsReview->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $causedevolutionsReview->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Causedevolutions Reviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Causedevolutions'), ['controller' => 'Causedevolutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Causedevolution'), ['controller' => 'Causedevolutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causedevolutionsReviews form large-9 medium-8 columns content">
    <?= $this->Form->create($causedevolutionsReview) ?>
    <fieldset>
        <legend><?= __('Edit Causedevolutions Review') ?></legend>
        <?php
            echo $this->Form->control('causedevolution_id', ['options' => $causedevolutions]);
            echo $this->Form->control('review_id', ['options' => $reviews]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
