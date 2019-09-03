<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Module Entity
 *
 * @property int $id
 * @property string $name
 * @property string $controller_name
 * @property string|null $description
 * @property bool $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Field[] $fields
 * @property \App\Model\Entity\Trackersdetail[] $trackersdetails
 * @property \App\Model\Entity\Profile[] $profiles
 */
class Module extends Entity
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
        'name' => true,
        'controller_name' => true,
        'description' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'fields' => true,
        'trackersdetails' => true,
        'profiles' => true
    ];
}
