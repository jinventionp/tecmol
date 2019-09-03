<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reportsortcolumn Entity
 *
 * @property int $id
 * @property int $report_id
 * @property string|null $columnname
 * @property string|null $sortorder
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Report $report
 */
class Reportsortcolumn extends Entity
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
        'columnname' => true,
        'sortorder' => true,
        'created' => true,
        'modified' => true,
        'report' => true
    ];
}
