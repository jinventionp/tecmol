<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CausedevolutionsReview[]|\Cake\Collection\CollectionInterface $causedevolutionsReviews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Causedevolutions Review'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Causedevolutions'), ['controller' => 'Causedevolutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Causedevolution'), ['controller' => 'Causedevolutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causedevolutionsReviews index large-9 medium-8 columns content">
    <h3><?= __('Causedevolutions Reviews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('causedevolution_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('review_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($causedevolutionsReviews as $causedevolutionsReview): ?>
            <tr>
                <td><?= $this->Number->format($causedevolutionsReview->id) ?></td>
                <td><?= $causedevolutionsReview->has('causedevolution') ? $this->Html->link($causedevolutionsReview->causedevolution->name, ['controller' => 'Causedevolutions', 'action' => 'view', $causedevolutionsReview->causedevolution->id]) : '' ?></td>
                <td><?= $causedevolutionsReview->has('review') ? $this->Html->link($causedevolutionsReview->review->name, ['controller' => 'Reviews', 'action' => 'view', $causedevolutionsReview->review->id]) : '' ?></td>
                <td><?= h($causedevolutionsReview->created) ?></td>
                <td><?= h($causedevolutionsReview->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $causedevolutionsReview->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $causedevolutionsReview->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $causedevolutionsReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causedevolutionsReview->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
