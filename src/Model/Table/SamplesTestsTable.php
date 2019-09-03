<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SamplesTests Model
 *
 * @property \App\Model\Table\SamplesTable&\Cake\ORM\Association\BelongsTo $Samples
 * @property \App\Model\Table\TestsTable&\Cake\ORM\Association\BelongsTo $Tests
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TypeconceptsTable&\Cake\ORM\Association\BelongsTo $Typeconcepts
 * @property \App\Model\Table\TypeconceptsTable&\Cake\ORM\Association\BelongsTo $Typeconcepts
 *
 * @method \App\Model\Entity\SamplesTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\SamplesTest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SamplesTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SamplesTest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SamplesTest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SamplesTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SamplesTest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SamplesTest findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SamplesTestsTable extends Table
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

        $this->setTable('samples_tests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Samples', [
            'foreignKey' => 'sample_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tests', [
            'foreignKey' => 'test_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Typeconcepts', [
            'foreignKey' => 'typeconcept_id'
        ]);
        $this->belongsTo('Typeconcepts', [
            'foreignKey' => 'typeconceptcountersample_id'
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('sample_result')
            ->maxLength('sample_result', 100)
            ->allowEmptyString('sample_result');

        $validator
            ->dateTime('sample_date_start')
            ->allowEmptyDateTime('sample_date_start');

        $validator
            ->dateTime('sample_date_end')
            ->allowEmptyDateTime('sample_date_end');

        $validator
            ->boolean('sample_counter')
            ->allowEmptyString('sample_counter');

        $validator
            ->scalar('countersample_result')
            ->maxLength('countersample_result', 100)
            ->allowEmptyString('countersample_result');

        $validator
            ->dateTime('countersample_date_start')
            ->allowEmptyDateTime('countersample_date_start');

        $validator
            ->dateTime('countersample_date_end')
            ->allowEmptyDateTime('countersample_date_end');

        $validator
            ->scalar('muestreo_value')
            ->maxLength('muestreo_value', 50)
            ->allowEmptyString('muestreo_value');

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
        $rules->add($rules->existsIn(['sample_id'], 'Samples'));
        $rules->add($rules->existsIn(['test_id'], 'Tests'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['typeconcept_id'], 'Typeconcepts'));
        $rules->add($rules->existsIn(['typeconceptcountersample_id'], 'Typeconcepts'));

        return $rules;
    }
}
