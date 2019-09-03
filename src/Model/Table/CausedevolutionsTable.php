<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Causedevolutions Model
 *
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\BelongsToMany $Reviews
 *
 * @method \App\Model\Entity\Causedevolution get($primaryKey, $options = [])
 * @method \App\Model\Entity\Causedevolution newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Causedevolution[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Causedevolution|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Causedevolution saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Causedevolution patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Causedevolution[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Causedevolution findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CausedevolutionsTable extends Table
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

        $this->setTable('causedevolutions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Reviews', [
            'foreignKey' => 'causedevolution_id',
            'targetForeignKey' => 'review_id',
            'joinTable' => 'causedevolutions_reviews'
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
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->boolean('delete')
            ->allowEmptyString('delete');

        return $validator;
    }
}
