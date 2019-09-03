<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Causedevolution $causedevolution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Causedevolution'), ['action' => 'edit', $causedevolution->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Causedevolution'), ['action' => 'delete', $causedevolution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causedevolution->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Causedevolutions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Causedevolution'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="causedevolutions view large-9 medium-8 columns content">
    <h3><?= h($causedevolution->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($causedevolution->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($causedevolution->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($causedevolution->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($causedevolution->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $causedevolution->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($causedevolution->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reviews') ?></h4>
        <?php if (!empty($causedevolution->reviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sample Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Review Date') ?></th>
                <th scope="col"><?= __('Return Technical Director') ?></th>
                <th scope="col"><?= __('Delivery Date Marketing') ?></th>
                <th scope="col"><?= __('Primary Data Error') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($causedevolution->reviews as $reviews): ?>
            <tr>
                <td><?= h($reviews->id) ?></td>
                <td><?= h($reviews->sample_id) ?></td>
                <td><?= h($reviews->user_id) ?></td>
                <td><?= h($reviews->name) ?></td>
                <td><?= h($reviews->review_date) ?></td>
                <td><?= h($reviews->return_technical_director) ?></td>
                <td><?= h($reviews->delivery_date_marketing) ?></td>
                <td><?= h($reviews->primary_data_error) ?></td>
                <td><?= h($reviews->delete) ?></td>
                <td><?= h($reviews->created) ?></td>
                <td><?= h($reviews->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reviews', 'action' => 'delete', $reviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
