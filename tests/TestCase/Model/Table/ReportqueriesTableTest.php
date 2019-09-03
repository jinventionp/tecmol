<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportqueriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportqueriesTable Test Case
 */
class ReportqueriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportqueriesTable
     */
    public $Reportqueries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Reportqueries',
        'app.Reports',
        'app.Operators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Reportqueries') ? [] : ['className' => ReportqueriesTable::class];
        $this->Reportqueries = TableRegistry::getTableLocator()->get('Reportqueries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Reportqueries);

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
