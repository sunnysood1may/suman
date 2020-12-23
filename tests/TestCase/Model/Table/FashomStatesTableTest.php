<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FashomStatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FashomStatesTable Test Case
 */
class FashomStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FashomStatesTable
     */
    public $FashomStates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FashomStates',
        'app.Countries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FashomStates') ? [] : ['className' => FashomStatesTable::class];
        $this->FashomStates = TableRegistry::getTableLocator()->get('FashomStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FashomStates);

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
