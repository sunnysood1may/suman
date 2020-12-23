<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FashomCity Entity
 *
 * @property float|null $id
 * @property string|null $city_ascii_name
 * @property string|null $city_name
 * @property float|null $city_state_id
 *
 * @property \App\Model\Entity\FashomCity $city_state
 */
class FashomCity extends Entity
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
        'id' => true,
        'city_ascii_name' => true,
        'city_name' => true,
        'city_state' => true,
        'city_state_id' => true,
    ];
}
