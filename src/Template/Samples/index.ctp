<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sample[]|\Cake\Collection\CollectionInterface $samples
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sample'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lines'), ['controller' => 'Lines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Line'), ['controller' => 'Lines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeconcepts'), ['controller' => 'Typeconcepts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeconcept'), ['controller' => 'Typeconcepts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Observations'), ['controller' => 'Observations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Observation'), ['controller' => 'Observations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="samples index large-9 medium-8 columns content">
    <h3><?= __('Samples') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('line_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_previous') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('request_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeconcept_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('formato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_sample') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bacth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presentation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arrival_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notification_date_technical_area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('collecting_samples_date_technical_area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estimated_output_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_of_preparation_of_report') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_delivery_technical_director') ?></th>
                <th scope="col"><?= $this->Paginator->sort('result_format_out_of_specification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsible_for_review_technical_director') ?></th>
                <th scope="col"><?= $this->Paginator->sort('return_report_marketing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('return_cause_report_marketing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_date_route') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsible_report_dhl') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_delivery_report') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation_date_of_invoice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_date_of_invoice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destruction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_destruction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annul') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($samples as $sample): ?>
            <tr>
                <td><?= $this->Number->format($sample->id) ?></td>
                <td><?= $sample->has('department') ? $this->Html->link($sample->department->name, ['controller' => 'Departments', 'action' => 'view', $sample->department->id]) : '' ?></td>
                <td><?= $sample->has('user') ? $this->Html->link($sample->user->name, ['controller' => 'Users', 'action' => 'view', $sample->user->id]) : '' ?></td>
                <td><?= $sample->has('product') ? $this->Html->link($sample->product->name, ['controller' => 'Products', 'action' => 'view', $sample->product->id]) : '' ?></td>
                <td><?= $sample->has('line') ? $this->Html->link($sample->line->name, ['controller' => 'Lines', 'action' => 'view', $sample->line->id]) : '' ?></td>
                <td><?= $sample->has('state') ? $this->Html->link($sample->state->name, ['controller' => 'States', 'action' => 'view', $sample->state->id]) : '' ?></td>
                <td><?= $this->Number->format($sample->state_previous) ?></td>
                <td><?= $sample->has('invoice') ? $this->Html->link($sample->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $sample->invoice->id]) : '' ?></td>
                <td><?= $sample->has('request') ? $this->Html->link($sample->request->name, ['controller' => 'Requests', 'action' => 'view', $sample->request->id]) : '' ?></td>
                <td><?= $sample->has('typeconcept') ? $this->Html->link($sample->typeconcept->name, ['controller' => 'Typeconcepts', 'action' => 'view', $sample->typeconcept->id]) : '' ?></td>
                <td><?= h($sample->formato) ?></td>
                <td><?= h($sample->num_sample) ?></td>
                <td><?= h($sample->bacth) ?></td>
                <td><?= h($sample->presentation) ?></td>
                <td><?= h($sample->quantity) ?></td>
                <td><?= h($sample->arrival_date) ?></td>
                <td><?= h($sample->notification_date_technical_area) ?></td>
                <td><?= h($sample->collecting_samples_date_technical_area) ?></td>
                <td><?= h($sample->estimated_output_date) ?></td>
                <td><?= h($sample->date_of_preparation_of_report) ?></td>
                <td><?= h($sample->sample_delivery_technical_director) ?></td>
                <td><?= h($sample->result_format_out_of_specification) ?></td>
                <td><?= $this->Number->format($sample->responsible_for_review_technical_director) ?></td>
                <td><?= h($sample->return_report_marketing) ?></td>
                <td><?= h($sample->return_cause_report_marketing) ?></td>
                <td><?= h($sample->delivery_date_route) ?></td>
                <td><?= $this->Number->format($sample->responsible_report_dhl) ?></td>
                <td><?= h($sample->customer_delivery_report) ?></td>
                <td><?= h($sample->invoice_number) ?></td>
                <td><?= h($sample->creation_date_of_invoice) ?></td>
                <td><?= h($sample->delivery_date_of_invoice) ?></td>
                <td><?= $this->Number->format($sample->status) ?></td>
                <td><?= h($sample->destruction) ?></td>
                <td><?= h($sample->date_destruction) ?></td>
                <td><?= h($sample->annul) ?></td>
                <td><?= h($sample->delete) ?></td>
                <td><?= h($sample->created) ?></td>
                <td><?= h($sample->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sample->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sample->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sample->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sample->id)]) ?>
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
