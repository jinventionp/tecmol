<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Review'), ['action' => 'edit', $review->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Review'), ['action' => 'delete', $review->id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Causedevolutions'), ['controller' => 'Causedevolutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Causedevolution'), ['controller' => 'Causedevolutions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reviews view large-9 medium-8 columns content">
    <h3><?= h($review->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sample') ?></th>
            <td><?= $review->has('sample') ? $this->Html->link($review->sample->id, ['controller' => 'Samples', 'action' => 'view', $review->sample->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $review->has('user') ? $this->Html->link($review->user->name, ['controller' => 'Users', 'action' => 'view', $review->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($review->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Return Technical Director') ?></th>
            <td><?= h($review->return_technical_director) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($review->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review Date') ?></th>
            <td><?= h($review->review_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date Marketing') ?></th>
            <td><?= h($review->delivery_date_marketing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($review->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($review->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primary Data Error') ?></th>
            <td><?= $review->primary_data_error ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $review->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Causedevolutions') ?></h4>
        <?php if (!empty($review->causedevolutions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($review->causedevolutions as $causedevolutions): ?>
            <tr>
                <td><?= h($causedevolutions->id) ?></td>
                <td><?= h($causedevolutions->name) ?></td>
                <td><?= h($causedevolutions->description) ?></td>
                <td><?= h($causedevolutions->delete) ?></td>
                <td><?= h($causedevolutions->created) ?></td>
                <td><?= h($causedevolutions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Causedevolutions', 'action' => 'view', $causedevolutions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Causedevolutions', 'action' => 'edit', $causedevolutions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Causedevolutions', 'action' => 'delete', $causedevolutions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causedevolutions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
