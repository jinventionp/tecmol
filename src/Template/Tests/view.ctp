<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tests view large-9 medium-8 columns content">
    <h3><?= h($test->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $test->has('department') ? $this->Html->link($test->department->name, ['controller' => 'Departments', 'action' => 'view', $test->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Test') ?></th>
            <td><?= $test->has('parent_test') ? $this->Html->link($test->parent_test->name, ['controller' => 'Tests', 'action' => 'view', $test->parent_test->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($test->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($test->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($test->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($test->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($test->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($test->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($test->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Title') ?></th>
            <td><?= $test->is_title ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $test->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($test->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($test->customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Nit') ?></th>
                <th scope="col"><?= __('Verification Number') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Social Reason') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($test->customers as $customers): ?>
            <tr>
                <td><?= h($customers->id) ?></td>
                <td><?= h($customers->city_id) ?></td>
                <td><?= h($customers->name) ?></td>
                <td><?= h($customers->nit) ?></td>
                <td><?= h($customers->verification_number) ?></td>
                <td><?= h($customers->phone) ?></td>
                <td><?= h($customers->address) ?></td>
                <td><?= h($customers->email) ?></td>
                <td><?= h($customers->social_reason) ?></td>
                <td><?= h($customers->delete) ?></td>
                <td><?= h($customers->created) ?></td>
                <td><?= h($customers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Samples') ?></h4>
        <?php if (!empty($test->samples)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Department Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Line Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('State Previous') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Request Id') ?></th>
                <th scope="col"><?= __('Typeconcept Id') ?></th>
                <th scope="col"><?= __('Formato') ?></th>
                <th scope="col"><?= __('Num Sample') ?></th>
                <th scope="col"><?= __('Bacth') ?></th>
                <th scope="col"><?= __('Presentation') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Arrival Date') ?></th>
                <th scope="col"><?= __('Notification Date Technical Area') ?></th>
                <th scope="col"><?= __('Collecting Samples Date Technical Area') ?></th>
                <th scope="col"><?= __('Estimated Output Date') ?></th>
                <th scope="col"><?= __('Date Of Preparation Of Report') ?></th>
                <th scope="col"><?= __('Sample Delivery Technical Director') ?></th>
                <th scope="col"><?= __('Result Format Out Of Specification') ?></th>
                <th scope="col"><?= __('Responsible For Review Technical Director') ?></th>
                <th scope="col"><?= __('Return Report Marketing') ?></th>
                <th scope="col"><?= __('Return Cause Report Marketing') ?></th>
                <th scope="col"><?= __('Delivery Date Route') ?></th>
                <th scope="col"><?= __('Responsible Report Dhl') ?></th>
                <th scope="col"><?= __('Customer Delivery Report') ?></th>
                <th scope="col"><?= __('Invoice Number') ?></th>
                <th scope="col"><?= __('Creation Date Of Invoice') ?></th>
                <th scope="col"><?= __('Delivery Date Of Invoice') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Destruction') ?></th>
                <th scope="col"><?= __('Date Destruction') ?></th>
                <th scope="col"><?= __('Annul') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($test->samples as $samples): ?>
            <tr>
                <td><?= h($samples->id) ?></td>
                <td><?= h($samples->department_id) ?></td>
                <td><?= h($samples->user_id) ?></td>
                <td><?= h($samples->product_id) ?></td>
                <td><?= h($samples->line_id) ?></td>
                <td><?= h($samples->state_id) ?></td>
                <td><?= h($samples->state_previous) ?></td>
                <td><?= h($samples->invoice_id) ?></td>
                <td><?= h($samples->request_id) ?></td>
                <td><?= h($samples->typeconcept_id) ?></td>
                <td><?= h($samples->formato) ?></td>
                <td><?= h($samples->num_sample) ?></td>
                <td><?= h($samples->bacth) ?></td>
                <td><?= h($samples->presentation) ?></td>
                <td><?= h($samples->quantity) ?></td>
                <td><?= h($samples->arrival_date) ?></td>
                <td><?= h($samples->notification_date_technical_area) ?></td>
                <td><?= h($samples->collecting_samples_date_technical_area) ?></td>
                <td><?= h($samples->estimated_output_date) ?></td>
                <td><?= h($samples->date_of_preparation_of_report) ?></td>
                <td><?= h($samples->sample_delivery_technical_director) ?></td>
                <td><?= h($samples->result_format_out_of_specification) ?></td>
                <td><?= h($samples->responsible_for_review_technical_director) ?></td>
                <td><?= h($samples->return_report_marketing) ?></td>
                <td><?= h($samples->return_cause_report_marketing) ?></td>
                <td><?= h($samples->delivery_date_route) ?></td>
                <td><?= h($samples->responsible_report_dhl) ?></td>
                <td><?= h($samples->customer_delivery_report) ?></td>
                <td><?= h($samples->invoice_number) ?></td>
                <td><?= h($samples->creation_date_of_invoice) ?></td>
                <td><?= h($samples->delivery_date_of_invoice) ?></td>
                <td><?= h($samples->status) ?></td>
                <td><?= h($samples->destruction) ?></td>
                <td><?= h($samples->date_destruction) ?></td>
                <td><?= h($samples->annul) ?></td>
                <td><?= h($samples->delete) ?></td>
                <td><?= h($samples->created) ?></td>
                <td><?= h($samples->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Samples', 'action' => 'view', $samples->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Samples', 'action' => 'edit', $samples->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Samples', 'action' => 'delete', $samples->id], ['confirm' => __('Are you sure you want to delete # {0}?', $samples->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tests') ?></h4>
        <?php if (!empty($test->child_tests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Department Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Lft') ?></th>
                <th scope="col"><?= __('Rght') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Is Title') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($test->child_tests as $childTests): ?>
            <tr>
                <td><?= h($childTests->id) ?></td>
                <td><?= h($childTests->department_id) ?></td>
                <td><?= h($childTests->parent_id) ?></td>
                <td><?= h($childTests->lft) ?></td>
                <td><?= h($childTests->rght) ?></td>
                <td><?= h($childTests->name) ?></td>
                <td><?= h($childTests->description) ?></td>
                <td><?= h($childTests->price) ?></td>
                <td><?= h($childTests->is_title) ?></td>
                <td><?= h($childTests->delete) ?></td>
                <td><?= h($childTests->created) ?></td>
                <td><?= h($childTests->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tests', 'action' => 'view', $childTests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tests', 'action' => 'edit', $childTests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tests', 'action' => 'delete', $childTests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childTests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
