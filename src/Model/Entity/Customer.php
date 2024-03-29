<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property int|null $city_id
 * @property string $name
 * @property string $nit
 * @property int|null $verification_number
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $email
 * @property string|null $social_reason
 * @property bool $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Product[] $products
 * @property \App\Model\Entity\Test[] $tests
 */
class Customer extends Entity
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
        'city_id' => true,
        'name' => true,
        'nit' => true,
        'verification_number' => true,
        'phone' => true,
        'address' => true,
        'email' => true,
        'social_reason' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'city' => true,
        'products' => true,
        'tests' => true
    ];
}
