<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SamplesTestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SamplesTestsTable Test Case
 */
class SamplesTestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SamplesTestsTable
     */
    public $SamplesTests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SamplesTests',
        'app.Samples',
        'app.Tests',
        'app.Users',
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
        $config = TableRegistry::getTableLocator()->exists('SamplesTests') ? [] : ['className' => SamplesTestsTable::class];
        $this->SamplesTests = TableRegistry::getTableLocator()->get('SamplesTests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SamplesTests);

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
