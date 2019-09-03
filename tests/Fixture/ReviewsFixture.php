<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReviewsFixture
 */
class ReviewsFixture extends TestFixture
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
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'review_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de revisión', 'precision' => null],
        'return_technical_director' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => 'Devolución Director técnico', 'precision' => null, 'fixed' => null],
        'delivery_date_marketing' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Fecha de entrega a marketing', 'precision' => null],
        'primary_data_error' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'delete' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Tabla que relaciona los causales de devoilución de informes cuando entre en analista y director técnico', 'precision' => null],
        '_indexes' => [
            'fk_reviews_samples1_idx' => ['type' => 'index', 'columns' => ['sample_id'], 'length' => []],
            'fk_reviews_users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'reviews_ibfk_1' => ['type' => 'foreign', 'columns' => ['sample_id'], 'references' => ['samples', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'reviews_ibfk_2' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'review_date' => '2019-09-03 17:04:46',
                'return_technical_director' => 'Lo',
                'delivery_date_marketing' => '2019-09-03 17:04:46',
                'primary_data_error' => 1,
                'delete' => 1,
                'created' => '2019-09-03 17:04:46',
                'modified' => '2019-09-03 17:04:46'
            ],
        ];
        parent::init();
    }
}
