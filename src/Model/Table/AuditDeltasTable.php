<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuditDeltas Model
 *
 * @property \App\Model\Table\AuditsTable&\Cake\ORM\Association\BelongsTo $Audits
 *
 * @method \App\Model\Entity\AuditDelta get($primaryKey, $options = [])
 * @method \App\Model\Entity\AuditDelta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AuditDelta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AuditDelta|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuditDelta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AuditDelta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AuditDelta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AuditDelta findOrCreate($search, callable $callback = null, $options = [])
 */
class AuditDeltasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('audit_deltas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Audits', [
            'foreignKey' => 'audit_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('id')
            ->maxLength('id', 36)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('property_name')
            ->maxLength('property_name', 255)
            ->requirePresence('property_name', 'create')
            ->notEmptyString('property_name');

        $validator
            ->scalar('old_value')
            ->allowEmptyString('old_value');

        $validator
            ->scalar('new_value')
            ->allowEmptyString('new_value');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['audit_id'], 'Audits'));

        return $rules;
    }
}
