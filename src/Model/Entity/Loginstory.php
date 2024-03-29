<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Loginstory Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $username
 * @property string|null $user_ip
 * @property \Cake\I18n\FrozenTime|null $logout_time
 * @property \Cake\I18n\FrozenTime|null $login_time
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Loginstory extends Entity
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
        'user_id' => true,
        'username' => true,
        'user_ip' => true,
        'logout_time' => true,
        'login_time' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
