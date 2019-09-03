<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Test Entity
 *
 * @property int $id
 * @property int $department_id
 * @property int $parent_id
 * @property int $lft
 * @property int $rght
 * @property string $name
 * @property string|null $description
 * @property float|null $price
 * @property bool $is_title
 * @property bool $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\ParentTest $parent_test
 * @property \App\Model\Entity\ChildTest[] $child_tests
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Sample[] $samples
 */
class Test extends Entity
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
        'department_id' => true,
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'name' => true,
        'description' => true,
        'price' => true,
        'is_title' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'department' => true,
        'parent_test' => true,
        'child_tests' => true,
        'customers' => true,
        'samples' => true
    ];
}
