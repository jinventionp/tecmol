<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departments Model
 *
 * @property \App\Model\Table\SamplesTable&\Cake\ORM\Association\HasMany $Samples
 * @property \App\Model\Table\TestsTable&\Cake\ORM\Association\HasMany $Tests
 * @property \App\Model\Table\TypeconceptsTable&\Cake\ORM\Association\BelongsToMany $Typeconcepts
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Department get($primaryKey, $options = [])
 * @method \App\Model\Entity\Department newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Department[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Department|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Department saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Department patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Department[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Department findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DepartmentsTable extends Table
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

        $this->setTable('departments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Samples', [
            'foreignKey' => 'department_id'
        ]);
        $this->hasMany('Tests', [
            'foreignKey' => 'department_id'
        ]);
        $this->belongsToMany('Typeconcepts', [
            'foreignKey' => 'department_id',
            'targetForeignKey' => 'typeconcept_id',
            'joinTable' => 'departments_typeconcepts'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'department_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'departments_users'
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
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('code_autoincrement')
            ->maxLength('code_autoincrement', 3)
            ->requirePresence('code_autoincrement', 'create')
            ->notEmptyString('code_autoincrement')
            ->add('code_autoincrement', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('bank')
            ->maxLength('bank', 200)
            ->requirePresence('bank', 'create')
            ->notEmptyString('bank');

        $validator
            ->scalar('account_type')
            ->maxLength('account_type', 200)
            ->requirePresence('account_type', 'create')
            ->notEmptyString('account_type');

        $validator
            ->scalar('account_number')
            ->maxLength('account_number', 20)
            ->requirePresence('account_number', 'create')
            ->notEmptyString('account_number');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->boolean('delete')
            ->notEmptyString('delete');

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
        $rules->add($rules->isUnique(['code_autoincrement']));

        return $rules;
    }
}
