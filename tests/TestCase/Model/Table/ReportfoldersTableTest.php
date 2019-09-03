<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportfoldersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportfoldersTable Test Case
 */
class ReportfoldersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportfoldersTable
     */
    public $Reportfolders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Reportfolders',
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
        $config = TableRegistry::getTableLocator()->exists('Reportfolders') ? [] : ['className' => ReportfoldersTable::class];
        $this->Reportfolders = TableRegistry::getTableLocator()->get('Reportfolders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Reportfolders);

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
