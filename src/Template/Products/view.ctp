<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $product->has('customer') ? $this->Html->link($product->customer->name, ['controller' => 'Customers', 'action' => 'view', $product->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beginning Active') ?></th>
            <td><?= h($product->beginning_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $this->Number->format($product->iva) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $product->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Samples') ?></h4>
        <?php if (!empty($product->samples)): ?>
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
            <?php foreach ($product->samples as $samples): ?>
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
</div>
