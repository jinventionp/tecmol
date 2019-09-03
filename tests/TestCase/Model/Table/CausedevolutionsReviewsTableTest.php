<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CausedevolutionsReviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CausedevolutionsReviewsTable Test Case
 */
class CausedevolutionsReviewsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CausedevolutionsReviewsTable
     */
    public $CausedevolutionsReviews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CausedevolutionsReviews',
        'app.Causedevolutions',
        'app.Reviews'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CausedevolutionsReviews') ? [] : ['className' => CausedevolutionsReviewsTable::class];
        $this->CausedevolutionsReviews = TableRegistry::getTableLocator()->get('CausedevolutionsReviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CausedevolutionsReviews);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
