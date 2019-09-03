<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DepartmentsTypeconcept[]|\Cake\Collection\CollectionInterface $departmentsTypeconcepts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Departments Typeconcept'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departmentsTypeconcepts index large-9 medium-8 columns content">
    <h3><?= __('Departments Typeconcepts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeconcept_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departmentsTypeconcepts as $departmentsTypeconcept): ?>
            <tr>
                <td><?= $this->Number->format($departmentsTypeconcept->id) ?></td>
                <td><?= $departmentsTypeconcept->has('department') ? $this->Html->link($departmentsTypeconcept->department->name, ['controller' => 'Departments', 'action' => 'view', $departmentsTypeconcept->department->id]) : '' ?></td>
                <td><?= $departmentsTypeconcept->has('typeconcept') ? $this->Html->link($departmentsTypeconcept->typeconcept->name, ['controller' => 'Typeconcepts', 'action' => 'view', $departmentsTypeconcept->typeconcept->id]) : '' ?></td>
                <td><?= h($departmentsTypeconcept->created) ?></td>
                <td><?= h($departmentsTypeconcept->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $departmentsTypeconcept->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departmentsTypeconcept->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departmentsTypeconcept->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmentsTypeconcept->id)]) ?>
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
