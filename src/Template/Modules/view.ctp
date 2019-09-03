<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Module'), ['action' => 'edit', $module->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Module'), ['action' => 'delete', $module->id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fields'), ['controller' => 'Fields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Field'), ['controller' => 'Fields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trackersdetails'), ['controller' => 'Trackersdetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trackersdetail'), ['controller' => 'Trackersdetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modules view large-9 medium-8 columns content">
    <h3><?= h($module->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($module->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Controller Name') ?></th>
            <td><?= h($module->controller_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($module->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($module->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($module->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $module->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($module->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Profiles') ?></h4>
        <?php if (!empty($module->profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Root') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Review 1') ?></th>
                <th scope="col"><?= __('Review 2') ?></th>
                <th scope="col"><?= __('Edit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($module->profiles as $profiles): ?>
            <tr>
                <td><?= h($profiles->id) ?></td>
                <td><?= h($profiles->name) ?></td>
                <td><?= h($profiles->description) ?></td>
                <td><?= h($profiles->root) ?></td>
                <td><?= h($profiles->delete) ?></td>
                <td><?= h($profiles->created) ?></td>
                <td><?= h($profiles->modified) ?></td>
                <td><?= h($profiles->review_1) ?></td>
                <td><?= h($profiles->review_2) ?></td>
                <td><?= h($profiles->edit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profiles', 'action' => 'view', $profiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profiles', 'action' => 'edit', $profiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profiles', 'action' => 'delete', $profiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fields') ?></h4>
        <?php if (!empty($module->fields)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Module Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Label') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($module->fields as $fields): ?>
            <tr>
                <td><?= h($fields->id) ?></td>
                <td><?= h($fields->module_id) ?></td>
                <td><?= h($fields->name) ?></td>
                <td><?= h($fields->label) ?></td>
                <td><?= h($fields->description) ?></td>
                <td><?= h($fields->created) ?></td>
                <td><?= h($fields->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fields', 'action' => 'view', $fields->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fields', 'action' => 'edit', $fields->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fields', 'action' => 'delete', $fields->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fields->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Trackersdetails') ?></h4>
        <?php if (!empty($module->trackersdetails)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Module Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Recordid') ?></th>
                <th scope="col"><?= __('Fieldname') ?></th>
                <th scope="col"><?= __('Prevalue') ?></th>
                <th scope="col"><?= __('Postvalue') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($module->trackersdetails as $trackersdetails): ?>
            <tr>
                <td><?= h($trackersdetails->id) ?></td>
                <td><?= h($trackersdetails->module_id) ?></td>
                <td><?= h($trackersdetails->user_id) ?></td>
                <td><?= h($trackersdetails->recordid) ?></td>
                <td><?= h($trackersdetails->fieldname) ?></td>
                <td><?= h($trackersdetails->prevalue) ?></td>
                <td><?= h($trackersdetails->postvalue) ?></td>
                <td><?= h($trackersdetails->created) ?></td>
                <td><?= h($trackersdetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Trackersdetails', 'action' => 'view', $trackersdetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Trackersdetails', 'action' => 'edit', $trackersdetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trackersdetails', 'action' => 'delete', $trackersdetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trackersdetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
