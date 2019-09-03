<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SamplesTest[]|\Cake\Collection\CollectionInterface $samplesTests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Samples Test'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="samplesTests index large-9 medium-8 columns content">
    <h3><?= __('Samples Tests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeconcept_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_result') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_date_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_date_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_counter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeconceptcountersample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countersample_result') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countersample_date_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countersample_date_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('muestreo_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($samplesTests as $samplesTest): ?>
            <tr>
                <td><?= $this->Number->format($samplesTest->id) ?></td>
                <td><?= $samplesTest->has('sample') ? $this->Html->link($samplesTest->sample->id, ['controller' => 'Samples', 'action' => 'view', $samplesTest->sample->id]) : '' ?></td>
                <td><?= $samplesTest->has('test') ? $this->Html->link($samplesTest->test->name, ['controller' => 'Tests', 'action' => 'view', $samplesTest->test->id]) : '' ?></td>
                <td><?= $samplesTest->has('user') ? $this->Html->link($samplesTest->user->name, ['controller' => 'Users', 'action' => 'view', $samplesTest->user->id]) : '' ?></td>
                <td><?= $this->Number->format($samplesTest->typeconcept_id) ?></td>
                <td><?= h($samplesTest->sample_result) ?></td>
                <td><?= h($samplesTest->sample_date_start) ?></td>
                <td><?= h($samplesTest->sample_date_end) ?></td>
                <td><?= h($samplesTest->sample_counter) ?></td>
                <td><?= $samplesTest->has('typeconcept') ? $this->Html->link($samplesTest->typeconcept->name, ['controller' => 'Typeconcepts', 'action' => 'view', $samplesTest->typeconcept->id]) : '' ?></td>
                <td><?= h($samplesTest->countersample_result) ?></td>
                <td><?= h($samplesTest->countersample_date_start) ?></td>
                <td><?= h($samplesTest->countersample_date_end) ?></td>
                <td><?= h($samplesTest->muestreo_value) ?></td>
                <td><?= h($samplesTest->created) ?></td>
                <td><?= h($samplesTest->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $samplesTest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $samplesTest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $samplesTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $samplesTest->id)]) ?>
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
