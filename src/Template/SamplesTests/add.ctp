<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SamplesTest $samplesTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Samples Tests'), ['action' => 'index']) ?></li>
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
<div class="samplesTests form large-9 medium-8 columns content">
    <?= $this->Form->create($samplesTest) ?>
    <fieldset>
        <legend><?= __('Add Samples Test') ?></legend>
        <?php
            echo $this->Form->control('sample_id', ['options' => $samples]);
            echo $this->Form->control('test_id', ['options' => $tests]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('typeconcept_id');
            echo $this->Form->control('sample_result');
            echo $this->Form->control('sample_date_start', ['empty' => true]);
            echo $this->Form->control('sample_date_end', ['empty' => true]);
            echo $this->Form->control('sample_counter');
            echo $this->Form->control('typeconceptcountersample_id', ['options' => $typeconcepts, 'empty' => true]);
            echo $this->Form->control('countersample_result');
            echo $this->Form->control('countersample_date_start', ['empty' => true]);
            echo $this->Form->control('countersample_date_end', ['empty' => true]);
            echo $this->Form->control('muestreo_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
