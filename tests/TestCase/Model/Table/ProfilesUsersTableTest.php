<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilesUsersTable Test Case
 */
class ProfilesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilesUsersTable
     */
    public $ProfilesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProfilesUsers',
        'app.Profiles',
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
        $config = TableRegistry::getTableLocator()->exists('ProfilesUsers') ? [] : ['className' => ProfilesUsersTable::class];
        $this->ProfilesUsers = TableRegistry::getTableLocator()->get('ProfilesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProfilesUsers);

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
