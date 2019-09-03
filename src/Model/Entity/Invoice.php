<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property string|null $num_invoice
 * @property float|null $total_invoice
 * @property \Cake\I18n\FrozenTime|null $date_emission
 * @property \Cake\I18n\FrozenTime|null $date_expiration
 * @property \Cake\I18n\FrozenTime|null $date_delivery
 * @property bool|null $annul
 * @property bool|null $na
 * @property bool|null $delete
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sample[] $samples
 */
class Invoice extends Entity
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
        'num_invoice' => true,
        'total_invoice' => true,
        'date_emission' => true,
        'date_expiration' => true,
        'date_delivery' => true,
        'annul' => true,
        'na' => true,
        'delete' => true,
        'created' => true,
        'modified' => true,
        'samples' => true
    ];
}
