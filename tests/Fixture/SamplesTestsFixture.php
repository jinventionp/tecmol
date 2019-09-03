<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SamplesTestsFixture
 */
class SamplesTestsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sample_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'test_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'typeconcept_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sample_result' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sample_date_start' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'sample_date_end' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'sample_counter' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'typeconceptcountersample_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'countersample_result' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'countersample_date_start' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'countersample_date_end' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'muestreo_value' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_samples_tests_samples1_idx' => ['type' => 'index', 'columns' => ['sample_id'], 'length' => []],
            'fk_samples_tests_tests1_idx' => ['type' => 'index', 'columns' => ['test_id'], 'length' => []],
            'fk_samples_tests_users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_samples_tests_typeconcepts1_idx' => ['type' => 'index', 'columns' => ['typeconcept_id'], 'length' => []],
            'fk_samples_test_typeconceptcountersample1_idx' => ['type' => 'index', 'columns' => ['typeconceptcountersample_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'samples_tests_ibfk_1' => ['type' => 'foreign', 'columns' => ['typeconceptcountersample_id'], 'references' => ['typeconcepts', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_tests_ibfk_2' => ['type' => 'foreign', 'columns' => ['sample_id'], 'references' => ['samples', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_tests_ibfk_3' => ['type' => 'foreign', 'columns' => ['test_id'], 'references' => ['tests', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_tests_ibfk_4' => ['type' => 'foreign', 'columns' => ['typeconcept_id'], 'references' => ['typeconcepts', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'samples_tests_ibfk_5' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'sample_id' => 1,
                'test_id' => 1,
                'user_id' => 1,
                'typeconcept_id' => 1,
                'sample_result' => 'Lorem ipsum dolor sit amet',
                'sample_date_start' => '2019-09-03 17:05:12',
                'sample_date_end' => '2019-09-03 17:05:12',
                'sample_counter' => 1,
                'typeconceptcountersample_id' => 1,
                'countersample_result' => 'Lorem ipsum dolor sit amet',
                'countersample_date_start' => '2019-09-03 17:05:12',
                'countersample_date_end' => '2019-09-03 17:05:12',
                'muestreo_value' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-09-03 17:05:12',
                'modified' => '2019-09-03 17:05:12'
            ],
        ];
        parent::init();
    }
}
