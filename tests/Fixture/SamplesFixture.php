<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SamplesFixture
 */
class SamplesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'department_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'line_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'state_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'state_previous' => ['type' => 'tinyinteger', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'invoice_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'request_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Solicitudes Carta de Solicitud, Orden de Compra, etc', 'precision' => null, 'autoIncrement' => null],
        'typeconcept_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Concepto de la muestra Cumple, no Cumple', 'precision' => null, 'autoIncrement' => null],
        'formato' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'num_sample' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Numero de Muestra', 'precision' => null, 'fixed' => null],
        'bacth' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Lote', 'precision' => null, 'fixed' => null],
        'presentation' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Presentación', 'precision' => null, 'fixed' => null],
        'quantity' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Cantidad', 'precision' => null, 'fixed' => null],
        'arrival_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de llegada', 'precision' => null],
        'notification_date_technical_area' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de Notificación al area técnica', 'precision' => null],
        'collecting_samples_date_technical_area' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de recolección de muestra area técnica', 'precision' => null],
        'estimated_output_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha estimada de salida', 'precision' => null],
        'date_of_preparation_of_report' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de elaboración de informe', 'precision' => null],
        'sample_delivery_technical_director' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de Entrega a director  ténico', 'precision' => null],
        'result_format_out_of_specification' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Formato resultado fuera de especificación', 'precision' => null, 'fixed' => null],
        'responsible_for_review_technical_director' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Responsable de revisión diretor tecnico', 'precision' => null, 'autoIncrement' => null],
        'return_report_marketing' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Devolución Marketing', 'precision' => null, 'fixed' => null],
        'return_cause_report_marketing' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'delivery_date_route' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de entrega a ruta', 'precision' => null],
        'responsible_report_dhl' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'customer_delivery_report' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Entrega de informe la cliente', 'precision' => null],
        'invoice_number' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Numero de factura', 'precision' => null, 'fixed' => null],
        'creation_date_of_invoice' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de creación de la factura', 'precision' => null],
        'delivery_date_of_invoice' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de entrega de la factura', 'precision' => null],
        'status' => ['type' => 'tinyinteger', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Estado Activo o Inactivo', 'precision' => null],
        'destruction' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'date_destruction' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'annul' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'delete' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_samples_products1_idx' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'fk_samples_lines1_idx' => ['type' => 'index', 'columns' => ['line_id'], 'length' => []],
            'fk_samples_states1_idx' => ['type' => 'index', 'columns' => ['state_id'], 'length' => []],
            'fk_samples_users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_samples_departments1_idx' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
            'fk_samples_requests1_idx' => ['type' => 'index', 'columns' => ['request_id'], 'length' => []],
            'fk_samples_invoices1_idx' => ['type' => 'index', 'columns' => ['invoice_id'], 'length' => []],
            'fk_samples_users_dhl1' => ['type' => 'index', 'columns' => ['responsible_report_dhl'], 'length' => []],
            'fk_samples_typeconcepts1' => ['type' => 'index', 'columns' => ['typeconcept_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'num_sample_UNIQUE' => ['type' => 'unique', 'columns' => ['num_sample'], 'length' => []],
            'samples_ibfk_1' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['departments', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_2' => ['type' => 'foreign', 'columns' => ['invoice_id'], 'references' => ['invoices', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_3' => ['type' => 'foreign', 'columns' => ['line_id'], 'references' => ['lines', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_4' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_5' => ['type' => 'foreign', 'columns' => ['request_id'], 'references' => ['requests', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_6' => ['type' => 'foreign', 'columns' => ['state_id'], 'references' => ['states', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_7' => ['type' => 'foreign', 'columns' => ['typeconcept_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_8' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_ibfk_9' => ['type' => 'foreign', 'columns' => ['responsible_report_dhl'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'department_id' => 1,
                'user_id' => 1,
                'product_id' => 1,
                'line_id' => 1,
                'state_id' => 1,
                'state_previous' => 1,
                'invoice_id' => 1,
                'request_id' => 1,
                'typeconcept_id' => 1,
                'formato' => 'Lorem ipsum dolor sit amet',
                'num_sample' => 'Lorem ipsum dolor sit amet',
                'bacth' => 'Lorem ipsum dolor sit amet',
                'presentation' => 'Lorem ipsum dolor sit amet',
                'quantity' => 'Lorem ipsum dolor sit amet',
                'arrival_date' => '2019-09-03 17:04:54',
                'notification_date_technical_area' => '2019-09-03 17:04:54',
                'collecting_samples_date_technical_area' => '2019-09-03 17:04:54',
                'estimated_output_date' => '2019-09-03 17:04:54',
                'date_of_preparation_of_report' => '2019-09-03 17:04:54',
                'sample_delivery_technical_director' => '2019-09-03 17:04:54',
                'result_format_out_of_specification' => 'Lorem ipsum dolor sit amet',
                'responsible_for_review_technical_director' => 1,
                'return_report_marketing' => 'Lo',
                'return_cause_report_marketing' => 'Lorem ipsum dolor sit amet',
                'delivery_date_route' => '2019-09-03 17:04:54',
                'responsible_report_dhl' => 1,
                'customer_delivery_report' => '2019-09-03 17:04:54',
                'invoice_number' => 'Lorem ipsum dolor sit amet',
                'creation_date_of_invoice' => '2019-09-03 17:04:54',
                'delivery_date_of_invoice' => '2019-09-03 17:04:54',
                'status' => 1,
                'destruction' => 1,
                'date_destruction' => '2019-09-03 17:04:54',
                'annul' => 1,
                'delete' => 1,
                'created' => '2019-09-03 17:04:54',
                'modified' => '2019-09-03 17:04:54'
            ],
        ];
        parent::init();
    }
}
