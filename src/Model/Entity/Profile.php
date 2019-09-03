<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property bool|null $root
 * @property bool|null $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $review_1
 * @property bool|null $review_2
 * @property bool|null $edit
 *
 * @property \App\Model\Entity\Field[] $fields
 * @property \App\Model\Entity\Module[] $modules
 * @property \App\Model\Entity\User[] $users
 */
class Profile extends Entity
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
        'description' => true,
        'root' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'review_1' => true,
        'review_2' => true,
        'edit' => true,
        'fields' => true,
        'modules' => true,
        'users' => true
    ];
}
