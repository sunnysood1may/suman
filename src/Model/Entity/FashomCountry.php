<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FashomCountry Entity
 *
 * @property int $id
 * @property string $country_name
 * @property string $country_iso_code_2
 * @property string $country_iso_code_3
 * @property string|null $currency_code
 * @property string|null $currency_symbol
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $country_status
 *
 * * @property \App\Model\Entity\FashomState[] $fashom_states
 */
class FashomCountry extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'country_name' => true,
        'country_iso_code_2' => true,
        'country_iso_code_3' => true,
        'currency_code' => true,
        'currency_symbol' => true,
        'created' => true,
        'modified' => true,
        'country_status' => true,
        'fashom_states' => true,
    ];
}
