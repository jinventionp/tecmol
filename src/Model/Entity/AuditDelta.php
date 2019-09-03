<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AuditDelta Entity
 *
 * @property string $id
 * @property string $audit_id
 * @property string $property_name
 * @property string|null $old_value
 * @property string|null $new_value
 *
 * @property \App\Model\Entity\Audit $audit
 */
class AuditDelta extends Entity
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
        'audit_id' => true,
        'property_name' => true,
        'old_value' => true,
        'new_value' => true,
        'audit' => true
    ];
}
