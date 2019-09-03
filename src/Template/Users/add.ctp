<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Loginstories'), ['controller' => 'Loginstories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Loginstory'), ['controller' => 'Loginstories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Observations'), ['controller' => 'Observations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Observation'), ['controller' => 'Observations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Samples Tests'), ['controller' => 'SamplesTests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Samples Test'), ['controller' => 'SamplesTests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trackersdetails'), ['controller' => 'Trackersdetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trackersdetail'), ['controller' => 'Trackersdetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('avatar');
            echo $this->Form->control('language');
            echo $this->Form->control('timezone');
            echo $this->Form->control('token');
            echo $this->Form->control('active');
            echo $this->Form->control('delete');
            echo $this->Form->control('last_login', ['empty' => true]);
            echo $this->Form->control('departments._ids', ['options' => $departments]);
            echo $this->Form->control('profiles._ids', ['options' => $profiles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
