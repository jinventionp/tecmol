<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoicesFixture
 */
class InvoicesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'num_invoice' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Numero de Factura', 'precision' => null, 'fixed' => null],
        'total_invoice' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'date_emission' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de Emisión', 'precision' => null],
        'date_expiration' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de Vencimiento', 'precision' => null],
        'date_delivery' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de Entrega', 'precision' => null],
        'annul' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Anular Factura', 'precision' => null],
        'na' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'No Aplica', 'precision' => null],
        'delete' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'num_invoice' => 'Lorem ips',
                'total_invoice' => 1,
                'date_emission' => '2019-09-03 17:02:21',
                'date_expiration' => '2019-09-03 17:02:21',
                'date_delivery' => '2019-09-03 17:02:21',
                'annul' => 1,
                'na' => 1,
                'delete' => 1,
                'created' => '2019-09-03 17:02:21',
                'modified' => '2019-09-03 17:02:21'
            ],
        ];
        parent::init();
    }
}
