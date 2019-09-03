<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomersTest Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $test_id
 * @property float $price
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Test $test
 */
class CustomersTest extends Entity
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
        'test_id' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'test' => true
    ];
}
