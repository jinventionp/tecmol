<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SamplesTest $samplesTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Samples Test'), ['action' => 'edit', $samplesTest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Samples Test'), ['action' => 'delete', $samplesTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $samplesTest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Samples Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Samples Test'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="samplesTests view large-9 medium-8 columns content">
    <h3><?= h($samplesTest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sample') ?></th>
            <td><?= $samplesTest->has('sample') ? $this->Html->link($samplesTest->sample->id, ['controller' => 'Samples', 'action' => 'view', $samplesTest->sample->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test') ?></th>
            <td><?= $samplesTest->has('test') ? $this->Html->link($samplesTest->test->name, ['controller' => 'Tests', 'action' => 'view', $samplesTest->test->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $samplesTest->has('user') ? $this->Html->link($samplesTest->user->name, ['controller' => 'Users', 'action' => 'view', $samplesTest->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Result') ?></th>
            <td><?= h($samplesTest->sample_result) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typeconcept') ?></th>
            <td><?= $samplesTest->has('typeconcept') ? $this->Html->link($samplesTest->typeconcept->name, ['controller' => 'Typeconcepts', 'action' => 'view', $samplesTest->typeconcept->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Countersample Result') ?></th>
            <td><?= h($samplesTest->countersample_result) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Muestreo Value') ?></th>
            <td><?= h($samplesTest->muestreo_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($samplesTest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typeconcept Id') ?></th>
            <td><?= $this->Number->format($samplesTest->typeconcept_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Date Start') ?></th>
            <td><?= h($samplesTest->sample_date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Date End') ?></th>
            <td><?= h($samplesTest->sample_date_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Countersample Date Start') ?></th>
            <td><?= h($samplesTest->countersample_date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Countersample Date End') ?></th>
            <td><?= h($samplesTest->countersample_date_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($samplesTest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($samplesTest->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Counter') ?></th>
            <td><?= $samplesTest->sample_counter ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
