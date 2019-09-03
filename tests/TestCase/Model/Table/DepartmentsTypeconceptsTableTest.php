<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartmentsTypeconceptsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartmentsTypeconceptsTable Test Case
 */
class DepartmentsTypeconceptsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartmentsTypeconceptsTable
     */
    public $DepartmentsTypeconcepts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DepartmentsTypeconcepts',
        'app.Departments',
        'app.Typeconcepts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DepartmentsTypeconcepts') ? [] : ['className' => DepartmentsTypeconceptsTable::class];
        $this->DepartmentsTypeconcepts = TableRegistry::getTableLocator()->get('DepartmentsTypeconcepts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DepartmentsTypeconcepts);

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
