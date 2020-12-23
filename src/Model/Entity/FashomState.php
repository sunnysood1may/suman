<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FashomState Entity
 *
 * @property int $id
 * @property string $state_name
 * @property int $country_id
 * @property string|null $status
 *
 * @property \App\Model\Entity\FashomCountry $country
 */
class FashomState extends Entity
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
        'state_name' => true,
        'country_id' => true,
        'status' => true,
        'country' => true,
    ];
}
