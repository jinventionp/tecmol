<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loginstory $loginstory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $loginstory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $loginstory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Loginstories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="loginstories form large-9 medium-8 columns content">
    <?= $this->Form->create($loginstory) ?>
    <fieldset>
        <legend><?= __('Edit Loginstory') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('username');
            echo $this->Form->control('user_ip');
            echo $this->Form->control('logout_time');
            echo $this->Form->control('login_time');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
