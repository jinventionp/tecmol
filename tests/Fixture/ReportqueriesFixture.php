<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReportqueriesFixture
 */
class ReportqueriesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'report_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'operator_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'columnname' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Columnas Seleccionadas', 'precision' => null, 'fixed' => null],
        'value' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Valor a comparar', 'precision' => null, 'fixed' => null],
        'comparator' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'Comparador', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_reportquerys_report1_idx' => ['type' => 'index', 'columns' => ['report_id'], 'length' => []],
            'fk_reportquerys_operator1_idx' => ['type' => 'index', 'columns' => ['operator_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'reportqueries_ibfk_1' => ['type' => 'foreign', 'columns' => ['report_id'], 'references' => ['reports', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'reportqueries_ibfk_2' => ['type' => 'foreign', 'columns' => ['operator_id'], 'references' => ['operators', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'report_id' => 1,
                'operator_id' => 1,
                'columnname' => 'Lorem ipsum dolor sit amet',
                'value' => 'Lorem ipsum dolor sit amet',
                'comparator' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-09-03 17:04:13',
                'modified' => '2019-09-03 17:04:13'
            ],
        ];
        parent::init();
    }
}
