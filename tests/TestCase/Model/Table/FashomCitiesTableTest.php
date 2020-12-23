<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FashomCitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FashomCitiesTable Test Case
 */
class FashomCitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FashomCitiesTable
     */
    public $FashomCities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FashomCities',
        'app.CityStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FashomCities') ? [] : ['className' => FashomCitiesTable::class];
        $this->FashomCities = TableRegistry::getTableLocator()->get('FashomCities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FashomCities);

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
