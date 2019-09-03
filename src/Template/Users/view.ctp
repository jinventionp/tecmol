<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Loginstories'), ['controller' => 'Loginstories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Loginstory'), ['controller' => 'Loginstories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Observations'), ['controller' => 'Observations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Observation'), ['controller' => 'Observations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['controller' => 'Samples', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['controller' => 'Samples', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Samples Tests'), ['controller' => 'SamplesTests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Samples Test'), ['controller' => 'SamplesTests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trackersdetails'), ['controller' => 'Trackersdetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trackersdetail'), ['controller' => 'Trackersdetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($user->language) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timezone') ?></th>
            <td><?= h($user->timezone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($user->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Login') ?></th>
            <td><?= h($user->last_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete') ?></th>
            <td><?= $user->delete ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Avatar') ?></h4>
        <?= $this->Text->autoParagraph(h($user->avatar)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Departments') ?></h4>
        <?php if (!empty($user->departments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Code Autoincrement') ?></th>
                <th scope="col"><?= __('Bank') ?></th>
                <th scope="col"><?= __('Account Type') ?></th>
                <th scope="col"><?= __('Account Number') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Delete') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->departments as $departments): ?>
            <tr>
                <td><?= h($departments->id) ?></td>
                <td><?= h($departments->name) ?></td>
                <td><?= h($departments->code_autoincrement) ?></td>
                <td><?= h($departments->bank) ?></td>
                <td><?= h($departments->account_type) ?></td>
                <td><?= h($departments->account_number) ?></td>
                <td><?= h($departments->description) ?></td>
                <td><?= h($departments->delete) ?></td>
                <td><?= h($departments->created) ?></td>
                <td><?= h($departments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Profiles') ?></h4>
        <?php if (!empty($user->profiles)): ?>
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
            <?php foreach ($user->profiles as $profiles): ?>
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
        <h4><?= __('Related Loginstories') ?></h4>
        <?php if (!empty($user->loginstories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('User Ip') ?></th>
                <th scope="col"><?= __('Logout Time') ?></th>
                <th scope="col"><?= __('Login Time') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->loginstories as $loginstories): ?>
            <tr>
                <td><?= h($loginstories->id) ?></td>
                <td><?= h($loginstories->user_id) ?></td>
                <td><?= h($loginstories->username) ?></td>
                <td><?= h($loginstories->user_ip) ?></td>
                <td><?= h($loginstories->logout_time) ?></td>
                <td><?= h($loginstories->login_time) ?></td>
                <td><?= h($loginstories->status) ?></td>
                <td><?= h($loginstories->created) ?></td>
                <td><?= h($loginstories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Loginstories', 'action' => 'view', $loginstories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Loginstories', 'action' => 'edit', $loginstories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Loginstories', 'action' => 'delete', $loginstories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loginstories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Observations') ?></h4>
        <?php if (!empty($user->observations)): ?>
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
            <?php foreach ($user->observations as $observations): ?>
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
        <?php if (!empty($user->reviews)): ?>
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
            <?php foreach ($user->reviews as $reviews): ?>
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
    <div class="related">
        <h4><?= __('Related Samples') ?></h4>
        <?php if (!empty($user->samples)): ?>
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
            <?php foreach ($user->samples as $samples): ?>
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
        <h4><?= __('Related Samples Tests') ?></h4>
        <?php if (!empty($user->samples_tests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sample Id') ?></th>
                <th scope="col"><?= __('Test Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Typeconcept Id') ?></th>
                <th scope="col"><?= __('Sample Result') ?></th>
                <th scope="col"><?= __('Sample Date Start') ?></th>
                <th scope="col"><?= __('Sample Date End') ?></th>
                <th scope="col"><?= __('Sample Counter') ?></th>
                <th scope="col"><?= __('Typeconceptcountersample Id') ?></th>
                <th scope="col"><?= __('Countersample Result') ?></th>
                <th scope="col"><?= __('Countersample Date Start') ?></th>
                <th scope="col"><?= __('Countersample Date End') ?></th>
                <th scope="col"><?= __('Muestreo Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->samples_tests as $samplesTests): ?>
            <tr>
                <td><?= h($samplesTests->id) ?></td>
                <td><?= h($samplesTests->sample_id) ?></td>
                <td><?= h($samplesTests->test_id) ?></td>
                <td><?= h($samplesTests->user_id) ?></td>
                <td><?= h($samplesTests->typeconcept_id) ?></td>
                <td><?= h($samplesTests->sample_result) ?></td>
                <td><?= h($samplesTests->sample_date_start) ?></td>
                <td><?= h($samplesTests->sample_date_end) ?></td>
                <td><?= h($samplesTests->sample_counter) ?></td>
                <td><?= h($samplesTests->typeconceptcountersample_id) ?></td>
                <td><?= h($samplesTests->countersample_result) ?></td>
                <td><?= h($samplesTests->countersample_date_start) ?></td>
                <td><?= h($samplesTests->countersample_date_end) ?></td>
                <td><?= h($samplesTests->muestreo_value) ?></td>
                <td><?= h($samplesTests->created) ?></td>
                <td><?= h($samplesTests->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SamplesTests', 'action' => 'view', $samplesTests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SamplesTests', 'action' => 'edit', $samplesTests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SamplesTests', 'action' => 'delete', $samplesTests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $samplesTests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Trackersdetails') ?></h4>
        <?php if (!empty($user->trackersdetails)): ?>
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
            <?php foreach ($user->trackersdetails as $trackersdetails): ?>
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
