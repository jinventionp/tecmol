<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Field Entity
 *
 * @property int $id
 * @property int|null $module_id
 * @property string $name
 * @property string|null $label
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Module $module
 * @property \App\Model\Entity\Profile[] $profiles
 */
class Field extends Entity
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
        'module_id' => true,
        'name' => true,
        'label' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'module' => true,
        'profiles' => true
    ];
}
