<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrackersdetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrackersdetailsTable Test Case
 */
class TrackersdetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrackersdetailsTable
     */
    public $Trackersdetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Trackersdetails',
        'app.Modules',
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
        $config = TableRegistry::getTableLocator()->exists('Trackersdetails') ? [] : ['className' => TrackersdetailsTable::class];
        $this->Trackersdetails = TableRegistry::getTableLocator()->get('Trackersdetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trackersdetails);

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
