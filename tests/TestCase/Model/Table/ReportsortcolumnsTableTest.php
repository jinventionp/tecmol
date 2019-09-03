<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportsortcolumnsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportsortcolumnsTable Test Case
 */
class ReportsortcolumnsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportsortcolumnsTable
     */
    public $Reportsortcolumns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Reportsortcolumns',
        'app.Reports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Reportsortcolumns') ? [] : ['className' => ReportsortcolumnsTable::class];
        $this->Reportsortcolumns = TableRegistry::getTableLocator()->get('Reportsortcolumns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Reportsortcolumns);

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
