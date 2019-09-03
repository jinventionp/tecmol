<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modules Model
 *
 * @property \App\Model\Table\FieldsTable&\Cake\ORM\Association\HasMany $Fields
 * @property \App\Model\Table\TrackersdetailsTable&\Cake\ORM\Association\HasMany $Trackersdetails
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsToMany $Profiles
 *
 * @method \App\Model\Entity\Module get($primaryKey, $options = [])
 * @method \App\Model\Entity\Module newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Module[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Module|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Module saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Module patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Module[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Module findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ModulesTable extends Table
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

        $this->setTable('modules');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Fields', [
            'foreignKey' => 'module_id'
        ]);
        $this->hasMany('Trackersdetails', [
            'foreignKey' => 'module_id'
        ]);
        $this->belongsToMany('Profiles', [
            'foreignKey' => 'module_id',
            'targetForeignKey' => 'profile_id',
            'joinTable' => 'modules_profiles'
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
            ->scalar('controller_name')
            ->maxLength('controller_name', 200)
            ->requirePresence('controller_name', 'create')
            ->notEmptyString('controller_name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->boolean('delete')
            ->notEmptyString('delete');

        return $validator;
    }
}
