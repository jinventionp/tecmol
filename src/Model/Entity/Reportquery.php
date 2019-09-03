<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reportquery Entity
 *
 * @property int $id
 * @property int $report_id
 * @property int $operator_id
 * @property string|null $columnname
 * @property string|null $value
 * @property string|null $comparator
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Report $report
 * @property \App\Model\Entity\Operator $operator
 */
class Reportquery extends Entity
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
        'report_id' => true,
        'operator_id' => true,
        'columnname' => true,
        'value' => true,
        'comparator' => true,
        'created' => true,
        'modified' => true,
        'report' => true,
        'operator' => true
    ];
}
