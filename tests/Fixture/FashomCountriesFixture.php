<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FashomCountriesFixture
 */
class FashomCountriesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'country_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'country_iso_code_2' => ['type' => 'string', 'length' => 2, 'fixed' => true, 'null' => false, 'default' => null, 'collate' => 'latin1_general_ci', 'comment' => '', 'precision' => null],
        'country_iso_code_3' => ['type' => 'string', 'length' => 3, 'fixed' => true, 'null' => false, 'default' => null, 'collate' => 'latin1_general_ci', 'comment' => '', 'precision' => null],
        'currency_code' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'currency_symbol' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'country_status' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '1', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'country_name' => 'Lorem ipsum dolor sit amet',
                'country_iso_code_2' => 'Lo',
                'country_iso_code_3' => 'L',
                'currency_code' => 'Lorem ip',
                'currency_symbol' => 'Lorem ip',
                'created' => '2020-11-20 19:07:19',
                'modified' => '2020-11-20 19:07:19',
                'country_status' => 'L',
            ],
        ];
        parent::init();
    }
}
