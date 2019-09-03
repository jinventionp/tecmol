<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Report $report
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reportfolders'), ['controller' => 'Reportfolders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reportfolder'), ['controller' => 'Reportfolders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reportqueries'), ['controller' => 'Reportqueries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reportquery'), ['controller' => 'Reportqueries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reportsortcolumns'), ['controller' => 'Reportsortcolumns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reportsortcolumn'), ['controller' => 'Reportsortcolumns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reports view large-9 medium-8 columns content">
    <h3><?= h($report->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reportfolder') ?></th>
            <td><?= $report->has('reportfolder') ? $this->Html->link($report->reportfolder->name, ['controller' => 'Reportfolders', 'action' => 'view', $report->reportfolder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($report->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primarymodule') ?></th>
            <td><?= h($report->primarymodule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secondarymodules') ?></th>
            <td><?= h($report->secondarymodules) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selectcolumns') ?></th>
            <td><?= h($report->selectcolumns) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($report->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($report->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($report->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $report->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($report->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reportqueries') ?></h4>
        <?php if (!empty($report->reportqueries)): ?>
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
            <?php foreach ($report->reportqueries as $reportqueries): ?>
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
    <div class="related">
        <h4><?= __('Related Reportsortcolumns') ?></h4>
        <?php if (!empty($report->reportsortcolumns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Report Id') ?></th>
                <th scope="col"><?= __('Columnname') ?></th>
                <th scope="col"><?= __('Sortorder') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($report->reportsortcolumns as $reportsortcolumns): ?>
            <tr>
                <td><?= h($reportsortcolumns->id) ?></td>
                <td><?= h($reportsortcolumns->report_id) ?></td>
                <td><?= h($reportsortcolumns->columnname) ?></td>
                <td><?= h($reportsortcolumns->sortorder) ?></td>
                <td><?= h($reportsortcolumns->created) ?></td>
                <td><?= h($reportsortcolumns->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reportsortcolumns', 'action' => 'view', $reportsortcolumns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reportsortcolumns', 'action' => 'edit', $reportsortcolumns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reportsortcolumns', 'action' => 'delete', $reportsortcolumns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportsortcolumns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
