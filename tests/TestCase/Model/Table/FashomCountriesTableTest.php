<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FashomCountriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FashomCountriesTable Test Case
 */
class FashomCountriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FashomCountriesTable
     */
    public $FashomCountries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FashomCountries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FashomCountries') ? [] : ['className' => FashomCountriesTable::class];
        $this->FashomCountries = TableRegistry::getTableLocator()->get('FashomCountries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FashomCountries);

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
