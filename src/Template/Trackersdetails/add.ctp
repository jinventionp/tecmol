<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trackersdetail $trackersdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Trackersdetails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'Modules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trackersdetails form large-9 medium-8 columns content">
    <?= $this->Form->create($trackersdetail) ?>
    <fieldset>
        <legend><?= __('Add Trackersdetail') ?></legend>
        <?php
            echo $this->Form->control('module_id', ['options' => $modules]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('recordid');
            echo $this->Form->control('fieldname');
            echo $this->Form->control('prevalue');
            echo $this->Form->control('postvalue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
