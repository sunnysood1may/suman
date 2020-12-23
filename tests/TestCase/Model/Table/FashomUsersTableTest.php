<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FashomUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FashomUsersTable Test Case
 */
class FashomUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FashomUsersTable
     */
    public $FashomUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FashomUsers',
        'app.Countries',
        'app.States',
        'app.Cities',
        'app.Facebooks',
        'app.Twitters',
        'app.Instagrams',
        'app.Googles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FashomUsers') ? [] : ['className' => FashomUsersTable::class];
        $this->FashomUsers = TableRegistry::getTableLocator()->get('FashomUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FashomUsers);

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
