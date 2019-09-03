<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CausedevolutionsReviews Model
 *
 * @property \App\Model\Table\CausedevolutionsTable&\Cake\ORM\Association\BelongsTo $Causedevolutions
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\BelongsTo $Reviews
 *
 * @method \App\Model\Entity\CausedevolutionsReview get($primaryKey, $options = [])
 * @method \App\Model\Entity\CausedevolutionsReview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CausedevolutionsReview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CausedevolutionsReview|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CausedevolutionsReview saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CausedevolutionsReview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CausedevolutionsReview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CausedevolutionsReview findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CausedevolutionsReviewsTable extends Table
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

        $this->setTable('causedevolutions_reviews');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Causedevolutions', [
            'foreignKey' => 'causedevolution_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Reviews', [
            'foreignKey' => 'review_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
        $rules->add($rules->existsIn(['causedevolution_id'], 'Causedevolutions'));
        $rules->add($rules->existsIn(['review_id'], 'Reviews'));

        return $rules;
    }
}
