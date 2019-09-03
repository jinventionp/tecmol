<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Review Entity
 *
 * @property int $id
 * @property int $sample_id
 * @property int|null $user_id
 * @property string $name
 * @property \Cake\I18n\FrozenTime|null $review_date
 * @property string|null $return_technical_director
 * @property \Cake\I18n\FrozenTime|null $delivery_date_marketing
 * @property bool|null $primary_data_error
 * @property bool|null $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sample $sample
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Causedevolution[] $causedevolutions
 */
class Review extends Entity
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
        'sample_id' => true,
        'user_id' => true,
        'name' => true,
        'review_date' => true,
        'return_technical_director' => true,
        'delivery_date_marketing' => true,
        'primary_data_error' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'sample' => true,
        'user' => true,
        'causedevolutions' => true
    ];
}
