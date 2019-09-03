<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $username
 * @property string $name
 * @property string|null $last_name
 * @property string $password
 * @property string $email
 * @property string|null $avatar
 * @property string|null $language
 * @property string|null $timezone
 * @property string|null $token
 * @property bool $active
 * @property bool $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $last_login
 *
 * @property \App\Model\Entity\Loginstory[] $loginstories
 * @property \App\Model\Entity\Observation[] $observations
 * @property \App\Model\Entity\Review[] $reviews
 * @property \App\Model\Entity\Sample[] $samples
 * @property \App\Model\Entity\SamplesTest[] $samples_tests
 * @property \App\Model\Entity\Trackersdetail[] $trackersdetails
 * @property \App\Model\Entity\Department[] $departments
 * @property \App\Model\Entity\Profile[] $profiles
 */
class User extends Entity
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
        'username' => true,
        'name' => true,
        'last_name' => true,
        'password' => true,
        'email' => true,
        'avatar' => true,
        'language' => true,
        'timezone' => true,
        'token' => true,
        'active' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'last_login' => true,
        'loginstories' => true,
        'observations' => true,
        'reviews' => true,
        'samples' => true,
        'samples_tests' => true,
        'trackersdetails' => true,
        'departments' => true,
        'profiles' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token'
    ];
}
