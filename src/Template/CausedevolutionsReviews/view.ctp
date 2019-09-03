<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CausedevolutionsReview $causedevolutionsReview
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Causedevolutions Review'), ['action' => 'edit', $causedevolutionsReview->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Causedevolutions Review'), ['action' => 'delete', $causedevolutionsReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causedevolutionsReview->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Causedevolutions Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Causedevolutions Review'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Causedevolutions'), ['controller' => 'Causedevolutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Causedevolution'), ['controller' => 'Causedevolutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="causedevolutionsReviews view large-9 medium-8 columns content">
    <h3><?= h($causedevolutionsReview->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Causedevolution') ?></th>
            <td><?= $causedevolutionsReview->has('causedevolution') ? $this->Html->link($causedevolutionsReview->causedevolution->name, ['controller' => 'Causedevolutions', 'action' => 'view', $causedevolutionsReview->causedevolution->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= $causedevolutionsReview->has('review') ? $this->Html->link($causedevolutionsReview->review->name, ['controller' => 'Reviews', 'action' => 'view', $causedevolutionsReview->review->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($causedevolutionsReview->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($causedevolutionsReview->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($causedevolutionsReview->modified) ?></td>
        </tr>
    </table>
</div>
