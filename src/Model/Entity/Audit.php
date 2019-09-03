<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Audit Entity
 *
 * @property string $id
 * @property string $event
 * @property string $model
 * @property string $entity_id
 * @property string $request_id
 * @property string $json_object
 * @property string|null $description
 * @property string|null $source_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Entity $entity
 * @property \App\Model\Entity\Request $request
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\AuditDelta[] $audit_deltas
 */
class Audit extends Entity
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
        'event' => true,
        'model' => true,
        'entity_id' => true,
        'request_id' => true,
        'json_object' => true,
        'description' => true,
        'source_id' => true,
        'created' => true,
        'entity' => true,
        'request' => true,
        'source' => true,
        'audit_deltas' => true
    ];
}
