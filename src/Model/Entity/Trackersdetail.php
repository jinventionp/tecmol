<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trackersdetail Entity
 *
 * @property int $id
 * @property int $module_id
 * @property int $user_id
 * @property int|null $recordid
 * @property string|null $fieldname
 * @property string|null $prevalue
 * @property string|null $postvalue
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Module $module
 * @property \App\Model\Entity\User $user
 */
class Trackersdetail extends Entity
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
        'user_id' => true,
        'recordid' => true,
        'fieldname' => true,
        'prevalue' => true,
        'postvalue' => true,
        'created' => true,
        'modified' => true,
        'module' => true,
        'user' => true
    ];
}
