<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CausedevolutionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CausedevolutionsTable Test Case
 */
class CausedevolutionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CausedevolutionsTable
     */
    public $Causedevolutions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Causedevolutions') ? [] : ['className' => CausedevolutionsTable::class];
        $this->Causedevolutions = TableRegistry::getTableLocator()->get('Causedevolutions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Causedevolutions);

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
}
