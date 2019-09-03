<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuditDeltasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuditDeltasTable Test Case
 */
class AuditDeltasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AuditDeltasTable
     */
    public $AuditDeltas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AuditDeltas',
        'app.Audits'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AuditDeltas') ? [] : ['className' => AuditDeltasTable::class];
        $this->AuditDeltas = TableRegistry::getTableLocator()->get('AuditDeltas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuditDeltas);

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
