<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoginstoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoginstoriesTable Test Case
 */
class LoginstoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LoginstoriesTable
     */
    public $Loginstories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Loginstories',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Loginstories') ? [] : ['className' => LoginstoriesTable::class];
        $this->Loginstories = TableRegistry::getTableLocator()->get('Loginstories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Loginstories);

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
