<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SamplesTest Entity
 *
 * @property int $id
 * @property int $sample_id
 * @property int $test_id
 * @property int|null $user_id
 * @property int|null $typeconcept_id
 * @property string|null $sample_result
 * @property \Cake\I18n\FrozenTime|null $sample_date_start
 * @property \Cake\I18n\FrozenTime|null $sample_date_end
 * @property bool|null $sample_counter
 * @property int|null $typeconceptcountersample_id
 * @property string|null $countersample_result
 * @property \Cake\I18n\FrozenTime|null $countersample_date_start
 * @property \Cake\I18n\FrozenTime|null $countersample_date_end
 * @property string|null $muestreo_value
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sample $sample
 * @property \App\Model\Entity\Test $test
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Typeconcept $typeconcept
 */
class SamplesTest extends Entity
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
        'test_id' => true,
        'user_id' => true,
        'typeconcept_id' => true,
        'sample_result' => true,
        'sample_date_start' => true,
        'sample_date_end' => true,
        'sample_counter' => true,
        'typeconceptcountersample_id' => true,
        'countersample_result' => true,
        'countersample_date_start' => true,
        'countersample_date_end' => true,
        'muestreo_value' => true,
        'created' => true,
        'modified' => true,
        'sample' => true,
        'test' => true,
        'user' => true,
        'typeconcept' => true
    ];
}
