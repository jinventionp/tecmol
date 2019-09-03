<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CausedevolutionsReviewsFixture
 */
class CausedevolutionsReviewsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'causedevolution_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'review_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_causedevolutions_reviews_causedevolutions1_idx' => ['type' => 'index', 'columns' => ['causedevolution_id'], 'length' => []],
            'fk_causedevolutions_reviews_reviews1_idx' => ['type' => 'index', 'columns' => ['review_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'causedevolutions_reviews_ibfk_1' => ['type' => 'foreign', 'columns' => ['causedevolution_id'], 'references' => ['causedevolutions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'causedevolutions_reviews_ibfk_2' => ['type' => 'foreign', 'columns' => ['review_id'], 'references' => ['reviews', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'causedevolution_id' => 1,
                'review_id' => 1,
                'created' => '2019-09-03 17:00:53',
                'modified' => '2019-09-03 17:00:53'
            ],
        ];
        parent::init();
    }
}
