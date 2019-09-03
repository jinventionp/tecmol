<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operator $operator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Operator'), ['action' => 'edit', $operator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Operator'), ['action' => 'delete', $operator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Operators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Operator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reportqueries'), ['controller' => 'Reportqueries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reportquery'), ['controller' => 'Reportqueries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="operators view large-9 medium-8 columns content">
    <h3><?= h($operator->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($operator->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operator') ?></th>
            <td><?= h($operator->operator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($operator->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($operator->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($operator->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Reportqueries') ?></h4>
        <?php if (!empty($operator->reportqueries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Report Id') ?></th>
                <th scope="col"><?= __('Operator Id') ?></th>
                <th scope="col"><?= __('Columnname') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Comparator') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($operator->reportqueries as $reportqueries): ?>
            <tr>
                <td><?= h($reportqueries->id) ?></td>
                <td><?= h($reportqueries->report_id) ?></td>
                <td><?= h($reportqueries->operator_id) ?></td>
                <td><?= h($reportqueries->columnname) ?></td>
                <td><?= h($reportqueries->value) ?></td>
                <td><?= h($reportqueries->comparator) ?></td>
                <td><?= h($reportqueries->created) ?></td>
                <td><?= h($reportqueries->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reportqueries', 'action' => 'view', $reportqueries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reportqueries', 'action' => 'edit', $reportqueries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reportqueries', 'action' => 'delete', $reportqueries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportqueries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
