<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Department Entity
 *
 * @property int $id
 * @property string $name
 * @property string $code_autoincrement
 * @property string $bank
 * @property string $account_type
 * @property string $account_number
 * @property string|null $description
 * @property bool $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sample[] $samples
 * @property \App\Model\Entity\Test[] $tests
 * @property \App\Model\Entity\Typeconcept[] $typeconcepts
 * @property \App\Model\Entity\User[] $users
 */
class Department extends Entity
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
        'code_autoincrement' => true,
        'bank' => true,
        'account_type' => true,
        'account_number' => true,
        'description' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'samples' => true,
        'tests' => true,
        'typeconcepts' => true,
        'users' => true
    ];
}
