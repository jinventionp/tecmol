<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomersTestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomersTestsTable Test Case
 */
class CustomersTestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomersTestsTable
     */
    public $CustomersTests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CustomersTests',
        'app.Customers',
        'app.Tests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CustomersTests') ? [] : ['className' => CustomersTestsTable::class];
        $this->CustomersTests = TableRegistry::getTableLocator()->get('CustomersTests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomersTests);

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
