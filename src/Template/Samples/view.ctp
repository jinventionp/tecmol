<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sample $sample
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sample'), ['action' => 'edit', $sample->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sample'), ['action' => 'delete', $sample->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sample->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lines'), ['controller' => 'Lines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Line'), ['controller' => 'Lines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Observations'), ['controller' => 'Observations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Observation'), ['controller' => 'Observations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="samples view large-9 medium-8 columns content">
    <h3><?= h($sample->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $sample->has('department') ? $this->Html->link($sample->department->name, ['controller' => 'Departments', 'action' => 'view', $sample->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $sample->has('user') ? $this->Html->link($sample->user->name, ['controller' => 'Users', 'action' => 'view', $sample->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $sample->has('product') ? $this->Html->link($sample->product->name, ['controller' => 'Products', 'action' => 'view', $sample->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Line') ?></th>
            <td><?= $sample->has('line') ? $this->Html->link($sample->line->name, ['controller' => 'Lines', 'action' => 'view', $sample->line->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $sample->has('state') ? $this->Html->link($sample->state->name, ['controller' => 'States', 'action' => 'view', $sample->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= $sample->has('invoice') ? $this->Html->link($sample->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $sample->invoice->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request') ?></th>
            <td><?= $sample->has('request') ? $this->Html->link($sample->request->name, ['controller' => 'Requests', 'action' => 'view', $sample->request->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typeconcept') ?></th>
            <td><?= $sample->has('typeconcept') ? $this->Html->link($sample->typeconcept->name, ['controller' => 'Typeconcepts', 'action' => 'view', $sample->typeconcept->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Formato') ?></th>
            <td><?= h($sample->formato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Sample') ?></th>
            <td><?= h($sample->num_sample) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bacth') ?></th>
            <td><?= h($sample->bacth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presentation') ?></th>
            <td><?= h($sample->presentation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= h($sample->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Result Format Out Of Specification') ?></th>
            <td><?= h($sample->result_format_out_of_specification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Return Report Marketing') ?></th>
            <td><?= h($sample->return_report_marketing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Return Cause Report Marketing') ?></th>
            <td><?= h($sample->return_cause_report_marketing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Number') ?></th>
            <td><?= h($sample->invoice_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sample->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Previous') ?></th>
            <td><?= $this->Number->format($sample->state_previous) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsible For Review Technical Director') ?></th>
            <td><?= $this->Number->format($sample->responsible_for_review_technical_director) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsible Report Dhl') ?></th>
            <td><?= $this->Number->format($sample->responsible_report_dhl) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($sample->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arrival Date') ?></th>
            <td><?= h($sample->arrival_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notification Date Technical Area') ?></th>
            <td><?= h($sample->notification_date_technical_area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collecting Samples Date Technical Area') ?></th>
            <td><?= h($sample->collecting_samples_date_technical_area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estimated Output Date') ?></th>
            <td><?= h($sample->estimated_output_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Preparation Of Report') ?></th>
            <td><?= h($sample->date_of_preparation_of_report) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Delivery Technical Director') ?></th>
            <td><?= h($sample->sample_delivery_technical_director) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date Route') ?></th>
            <td><?= h($sample->delivery_date_route) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Delivery Report') ?></th>
            <td><?= h($sample->customer_delivery_report) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date Of Invoice') ?></th>
            <td><?= h($sample->creation_date_of_invoice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date Of Invoice') ?></th>
            <td><?= h($sample->delivery_date_of_invoice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Destruction') ?></th>
            <td><?= h($sample->date_destruction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sample->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sample->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destruction') ?></th>
            <td><?= $sample->destruction ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annul') ?></th>
            <td><?= $sample->annul ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $sample->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tests') ?></h4>
        <?php if (!empty($sample->tests)): ?>
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
            <?php foreach ($sample->tests as $tests): ?>
            <tr>
                <td><?= h($tests->id) ?></td>
                <td><?= h($tests->department_id) ?></td>
                <td><?= h($tests->parent_id) ?></td>
                <td><?= h($tests->lft) ?></td>
                <td><?= h($tests->rght) ?></td>
                <td><?= h($tests->name) ?></td>
                <td><?= h($tests->description) ?></td>
                <td><?= h($tests->price) ?></td>
                <td><?= h($tests->is_title) ?></td>
                <td><?= h($tests->delete) ?></td>
                <td><?= h($tests->created) ?></td>
                <td><?= h($tests->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tests', 'action' => 'view', $tests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tests', 'action' => 'edit', $tests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tests', 'action' => 'delete', $tests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Observations') ?></h4>
        <?php if (!empty($sample->observations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Sample Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sample->observations as $observations): ?>
            <tr>
                <td><?= h($observations->id) ?></td>
                <td><?= h($observations->user_id) ?></td>
                <td><?= h($observations->sample_id) ?></td>
                <td><?= h($observations->name) ?></td>
                <td><?= h($observations->delete) ?></td>
                <td><?= h($observations->created) ?></td>
                <td><?= h($observations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Observations', 'action' => 'view', $observations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Observations', 'action' => 'edit', $observations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Observations', 'action' => 'delete', $observations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $observations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reviews') ?></h4>
        <?php if (!empty($sample->reviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sample Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Review Date') ?></th>
                <th scope="col"><?= __('Return Technical Director') ?></th>
                <th scope="col"><?= __('Delivery Date Marketing') ?></th>
                <th scope="col"><?= __('Primary Data Error') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sample->reviews as $reviews): ?>
            <tr>
                <td><?= h($reviews->id) ?></td>
                <td><?= h($reviews->sample_id) ?></td>
                <td><?= h($reviews->user_id) ?></td>
                <td><?= h($reviews->name) ?></td>
                <td><?= h($reviews->review_date) ?></td>
                <td><?= h($reviews->return_technical_director) ?></td>
                <td><?= h($reviews->delivery_date_marketing) ?></td>
                <td><?= h($reviews->primary_data_error) ?></td>
                <td><?= h($reviews->delete) ?></td>
                <td><?= h($reviews->created) ?></td>
                <td><?= h($reviews->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reviews', 'action' => 'delete', $reviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
