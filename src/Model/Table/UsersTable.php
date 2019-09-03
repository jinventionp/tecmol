<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\LoginstoriesTable&\Cake\ORM\Association\HasMany $Loginstories
 * @property \App\Model\Table\ObservationsTable&\Cake\ORM\Association\HasMany $Observations
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\HasMany $Reviews
 * @property \App\Model\Table\SamplesTable&\Cake\ORM\Association\HasMany $Samples
 * @property \App\Model\Table\SamplesTestsTable&\Cake\ORM\Association\HasMany $SamplesTests
 * @property \App\Model\Table\TrackersdetailsTable&\Cake\ORM\Association\HasMany $Trackersdetails
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsToMany $Departments
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsToMany $Profiles
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Loginstories', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Observations', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Samples', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('SamplesTests', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Trackersdetails', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Departments', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'department_id',
            'joinTable' => 'departments_users'
        ]);
        $this->belongsToMany('Profiles', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'profile_id',
            'joinTable' => 'profiles_users'
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
            ->scalar('username')
            ->maxLength('username', 60)
            ->allowEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('avatar')
            ->maxLength('avatar', 255)
            ->allowEmptyString('avatar');

        $validator
            ->scalar('language')
            ->maxLength('language', 12)
            ->allowEmptyString('language');

        $validator
            ->scalar('timezone')
            ->maxLength('timezone', 128)
            ->allowEmptyString('timezone');

        $validator
            ->scalar('token')
            ->maxLength('token', 255)
            ->allowEmptyString('token');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->boolean('delete')
            ->notEmptyString('delete');

        $validator
            ->dateTime('last_login')
            ->allowEmptyDateTime('last_login');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
