<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CausedevolutionsReview Entity
 *
 * @property int $id
 * @property int $causedevolution_id
 * @property int $review_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Causedevolution $causedevolution
 * @property \App\Model\Entity\Review $review
 */
class CausedevolutionsReview extends Entity
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
        'causedevolution_id' => true,
        'review_id' => true,
        'created' => true,
        'modified' => true,
        'causedevolution' => true,
        'review' => true
    ];
}
