<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sample Entity
 *
 * @property int $id
 * @property int $department_id
 * @property int $user_id
 * @property int $product_id
 * @property int $line_id
 * @property int $state_id
 * @property int|null $state_previous
 * @property int|null $invoice_id
 * @property int|null $request_id
 * @property int|null $typeconcept_id
 * @property string|null $formato
 * @property string $num_sample
 * @property string|null $bacth
 * @property string|null $presentation
 * @property string|null $quantity
 * @property \Cake\I18n\FrozenTime|null $arrival_date
 * @property \Cake\I18n\FrozenTime|null $notification_date_technical_area
 * @property \Cake\I18n\FrozenTime|null $collecting_samples_date_technical_area
 * @property \Cake\I18n\FrozenTime|null $estimated_output_date
 * @property \Cake\I18n\FrozenTime|null $date_of_preparation_of_report
 * @property \Cake\I18n\FrozenTime|null $sample_delivery_technical_director
 * @property string|null $result_format_out_of_specification
 * @property int|null $responsible_for_review_technical_director
 * @property string|null $return_report_marketing
 * @property string|null $return_cause_report_marketing
 * @property \Cake\I18n\FrozenTime|null $delivery_date_route
 * @property int|null $responsible_report_dhl
 * @property \Cake\I18n\FrozenTime|null $customer_delivery_report
 * @property string|null $invoice_number
 * @property \Cake\I18n\FrozenTime|null $creation_date_of_invoice
 * @property \Cake\I18n\FrozenTime|null $delivery_date_of_invoice
 * @property int|null $status
 * @property bool|null $destruction
 * @property \Cake\I18n\FrozenTime|null $date_destruction
 * @property bool|null $annul
 * @property bool $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Line $line
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\Request $request
 * @property \App\Model\Entity\Typeconcept $typeconcept
 * @property \App\Model\Entity\Observation[] $observations
 * @property \App\Model\Entity\Review[] $reviews
 * @property \App\Model\Entity\Test[] $tests
 */
class Sample extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'department_id' => true,
        'user_id' => true,
        'product_id' => true,
        'line_id' => true,
        'state_id' => true,
        'state_previous' => true,
        'invoice_id' => true,
        'request_id' => true,
        'typeconcept_id' => true,
        'formato' => true,
        'num_sample' => true,
        'bacth' => true,
        'presentation' => true,
        'quantity' => true,
        'arrival_date' => true,
        'notification_date_technical_area' => true,
        'collecting_samples_date_technical_area' => true,
        'estimated_output_date' => true,
        'date_of_preparation_of_report' => true,
        'sample_delivery_technical_director' => true,
        'result_format_out_of_specification' => true,
        'responsible_for_review_technical_director' => true,
        'return_report_marketing' => true,
        'return_cause_report_marketing' => true,
        'delivery_date_route' => true,
        'responsible_report_dhl' => true,
        'customer_delivery_report' => true,
        'invoice_number' => true,
        'creation_date_of_invoice' => true,
        'delivery_date_of_invoice' => true,
        'status' => true,
        'destruction' => true,
        'date_destruction' => true,
        'annul' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'department' => true,
        'user' => true,
        'product' => true,
        'line' => true,
        'state' => true,
        'invoice' => true,
        'request' => true,
        'typeconcept' => true,
        'observations' => true,
        'reviews' => true,
        'tests' => true
    ];
}
