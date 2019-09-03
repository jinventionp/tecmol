<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typeconcepts Model
 *
 * @property \App\Model\Table\SamplesTable&\Cake\ORM\Association\HasMany $Samples
 * @property \App\Model\Table\SamplesTestsTable&\Cake\ORM\Association\HasMany $SamplesTests
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsToMany $Departments
 *
 * @method \App\Model\Entity\Typeconcept get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typeconcept newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Typeconcept[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeconcept|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeconcept saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeconcept patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typeconcept[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeconcept findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TypeconceptsTable extends Table
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

        $this->setTable('typeconcepts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Samples', [
            'foreignKey' => 'typeconcept_id'
        ]);
        $this->hasMany('SamplesTests', [
            'foreignKey' => 'typeconcept_id'
        ]);
        $this->belongsToMany('Departments', [
            'foreignKey' => 'typeconcept_id',
            'targetForeignKey' => 'department_id',
            'joinTable' => 'departments_typeconcepts'
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
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
