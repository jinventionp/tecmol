<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reports Model
 *
 * @property \App\Model\Table\ReportfoldersTable&\Cake\ORM\Association\BelongsTo $Reportfolders
 * @property \App\Model\Table\ReportqueriesTable&\Cake\ORM\Association\HasMany $Reportqueries
 * @property \App\Model\Table\ReportsortcolumnsTable&\Cake\ORM\Association\HasMany $Reportsortcolumns
 *
 * @method \App\Model\Entity\Report get($primaryKey, $options = [])
 * @method \App\Model\Entity\Report newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Report[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Report|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Report saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Report patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Report[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Report findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReportsTable extends Table
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

        $this->setTable('reports');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Reportfolders', [
            'foreignKey' => 'reportfolder_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Reportqueries', [
            'foreignKey' => 'report_id'
        ]);
        $this->hasMany('Reportsortcolumns', [
            'foreignKey' => 'report_id'
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
            ->notEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('primarymodule')
            ->maxLength('primarymodule', 50)
            ->allowEmptyString('primarymodule');

        $validator
            ->scalar('secondarymodules')
            ->maxLength('secondarymodules', 250)
            ->allowEmptyString('secondarymodules');

        $validator
            ->scalar('selectcolumns')
            ->maxLength('selectcolumns', 255)
            ->allowEmptyString('selectcolumns');

        $validator
            ->boolean('delete')
            ->allowEmptyString('delete');

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
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->existsIn(['reportfolder_id'], 'Reportfolders'));

        return $rules;
    }
}
