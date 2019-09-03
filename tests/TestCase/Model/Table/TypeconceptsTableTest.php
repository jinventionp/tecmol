<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeconceptsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeconceptsTable Test Case
 */
class TypeconceptsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeconceptsTable
     */
    public $Typeconcepts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Typeconcepts',
        'app.Samples',
        'app.SamplesTests',
        'app.Departments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Typeconcepts') ? [] : ['className' => TypeconceptsTable::class];
        $this->Typeconcepts = TableRegistry::getTableLocator()->get('Typeconcepts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typeconcepts);

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
}
