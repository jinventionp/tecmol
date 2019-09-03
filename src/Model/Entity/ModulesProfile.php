<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ModulesProfile Entity
 *
 * @property int $id
 * @property int $module_id
 * @property int $profile_id
 * @property bool|null $active
 * @property bool|null $view
 * @property bool|null $add
 * @property bool|null $edit
 * @property bool|null $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Module $module
 * @property \App\Model\Entity\Profile $profile
 */
class ModulesProfile extends Entity
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
        'profile_id' => true,
        'active' => true,
        'view' => true,
        'add' => true,
        'edit' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'module' => true,
        'profile' => true
    ];
}
