<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Report Entity
 *
 * @property int $id
 * @property int $reportfolder_id
 * @property string $name
 * @property string|null $description
 * @property string|null $primarymodule
 * @property string|null $secondarymodules
 * @property string|null $selectcolumns
 * @property bool|null $delete
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Reportfolder $reportfolder
 * @property \App\Model\Entity\Reportquery[] $reportqueries
 * @property \App\Model\Entity\Reportsortcolumn[] $reportsortcolumns
 */
class Report extends Entity
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
        'reportfolder_id' => true,
        'name' => true,
        'description' => true,
        'primarymodule' => true,
        'secondarymodules' => true,
        'selectcolumns' => true,
        'delete' => true,
        'modified' => true,
        'created' => true,
        'reportfolder' => true,
        'reportqueries' => true,
        'reportsortcolumns' => true
    ];
}
