<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $iva
 * @property string|null $beginning_active
 * @property bool $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Sample[] $samples
 */
class Product extends Entity
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
        'customer_id' => true,
        'name' => true,
        'description' => true,
        'iva' => true,
        'beginning_active' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'samples' => true
    ];
}
