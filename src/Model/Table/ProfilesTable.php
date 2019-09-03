<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profiles Model
 *
 * @property \App\Model\Table\FieldsTable&\Cake\ORM\Association\BelongsToMany $Fields
 * @property \App\Model\Table\ModulesTable&\Cake\ORM\Association\BelongsToMany $Modules
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Profile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profile|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfilesTable extends Table
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

        $this->setTable('profiles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Fields', [
            'foreignKey' => 'profile_id',
            'targetForeignKey' => 'field_id',
            'joinTable' => 'fields_profiles'
        ]);
        $this->belongsToMany('Modules', [
            'foreignKey' => 'profile_id',
            'targetForeignKey' => 'module_id',
            'joinTable' => 'modules_profiles'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'profile_id',
            'targetForeignKey' => 'user_id',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->boolean('root')
            ->allowEmptyString('root');

        $validator
            ->boolean('delete')
            ->allowEmptyString('delete');

        $validator
            ->boolean('review_1')
            ->allowEmptyString('review_1');

        $validator
            ->boolean('review_2')
            ->allowEmptyString('review_2');

        $validator
            ->boolean('edit')
            ->allowEmptyString('edit');

        return $validator;
    }
}
