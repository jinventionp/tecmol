<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reportfolder $reportfolder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reportfolder'), ['action' => 'edit', $reportfolder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reportfolder'), ['action' => 'delete', $reportfolder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportfolder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reportfolders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reportfolder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reportfolders view large-9 medium-8 columns content">
    <h3><?= h($reportfolder->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($reportfolder->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reportfolder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($reportfolder->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($reportfolder->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($reportfolder->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reports') ?></h4>
        <?php if (!empty($reportfolder->reports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Reportfolder Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Primarymodule') ?></th>
                <th scope="col"><?= __('Secondarymodules') ?></th>
                <th scope="col"><?= __('Selectcolumns') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($reportfolder->reports as $reports): ?>
            <tr>
                <td><?= h($reports->id) ?></td>
                <td><?= h($reports->reportfolder_id) ?></td>
                <td><?= h($reports->name) ?></td>
                <td><?= h($reports->description) ?></td>
                <td><?= h($reports->primarymodule) ?></td>
                <td><?= h($reports->secondarymodules) ?></td>
                <td><?= h($reports->selectcolumns) ?></td>
                <td><?= h($reports->delete) ?></td>
                <td><?= h($reports->modified) ?></td>
                <td><?= h($reports->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reports', 'action' => 'view', $reports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reports', 'action' => 'edit', $reports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reports', 'action' => 'delete', $reports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
