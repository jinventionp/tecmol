<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Samples Model
 *
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\LinesTable&\Cake\ORM\Association\BelongsTo $Lines
 * @property \App\Model\Table\StatesTable&\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\BelongsTo $Invoices
 * @property \App\Model\Table\RequestsTable&\Cake\ORM\Association\BelongsTo $Requests
 * @property \App\Model\Table\TypeconceptsTable&\Cake\ORM\Association\BelongsTo $Typeconcepts
 * @property \App\Model\Table\ObservationsTable&\Cake\ORM\Association\HasMany $Observations
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\HasMany $Reviews
 * @property \App\Model\Table\TestsTable&\Cake\ORM\Association\BelongsToMany $Tests
 *
 * @method \App\Model\Entity\Sample get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sample newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sample[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sample|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sample saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sample patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sample[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sample findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SamplesTable extends Table
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

        $this->setTable('samples');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Lines', [
            'foreignKey' => 'line_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id'
        ]);
        $this->belongsTo('Requests', [
            'foreignKey' => 'request_id'
        ]);
        $this->belongsTo('Typeconcepts', [
            'foreignKey' => 'typeconcept_id'
        ]);
        $this->hasMany('Observations', [
            'foreignKey' => 'sample_id'
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'sample_id'
        ]);
        $this->belongsToMany('Tests', [
            'foreignKey' => 'sample_id',
            'targetForeignKey' => 'test_id',
            'joinTable' => 'samples_tests'
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
            ->allowEmptyString('state_previous');

        $validator
            ->scalar('formato')
            ->maxLength('formato', 100)
            ->allowEmptyString('formato');

        $validator
            ->scalar('num_sample')
            ->maxLength('num_sample', 255)
            ->requirePresence('num_sample', 'create')
            ->notEmptyString('num_sample')
            ->add('num_sample', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('bacth')
            ->maxLength('bacth', 255)
            ->allowEmptyString('bacth');

        $validator
            ->scalar('presentation')
            ->maxLength('presentation', 255)
            ->allowEmptyString('presentation');

        $validator
            ->scalar('quantity')
            ->maxLength('quantity', 255)
            ->allowEmptyString('quantity');

        $validator
            ->dateTime('arrival_date')
            ->allowEmptyDateTime('arrival_date');

        $validator
            ->dateTime('notification_date_technical_area')
            ->allowEmptyDateTime('notification_date_technical_area');

        $validator
            ->dateTime('collecting_samples_date_technical_area')
            ->allowEmptyDateTime('collecting_samples_date_technical_area');

        $validator
            ->dateTime('estimated_output_date')
            ->allowEmptyDateTime('estimated_output_date');

        $validator
            ->dateTime('date_of_preparation_of_report')
            ->allowEmptyDateTime('date_of_preparation_of_report');

        $validator
            ->dateTime('sample_delivery_technical_director')
            ->allowEmptyDateTime('sample_delivery_technical_director');

        $validator
            ->scalar('result_format_out_of_specification')
            ->maxLength('result_format_out_of_specification', 100)
            ->allowEmptyString('result_format_out_of_specification');

        $validator
            ->integer('responsible_for_review_technical_director')
            ->allowEmptyString('responsible_for_review_technical_director');

        $validator
            ->scalar('return_report_marketing')
            ->maxLength('return_report_marketing', 4)
            ->allowEmptyString('return_report_marketing');

        $validator
            ->scalar('return_cause_report_marketing')
            ->maxLength('return_cause_report_marketing', 100)
            ->allowEmptyString('return_cause_report_marketing');

        $validator
            ->dateTime('delivery_date_route')
            ->allowEmptyDateTime('delivery_date_route');

        $validator
            ->integer('responsible_report_dhl')
            ->allowEmptyString('responsible_report_dhl');

        $validator
            ->dateTime('customer_delivery_report')
            ->allowEmptyDateTime('customer_delivery_report');

        $validator
            ->scalar('invoice_number')
            ->maxLength('invoice_number', 45)
            ->allowEmptyString('invoice_number');

        $validator
            ->dateTime('creation_date_of_invoice')
            ->allowEmptyDateTime('creation_date_of_invoice');

        $validator
            ->dateTime('delivery_date_of_invoice')
            ->allowEmptyDateTime('delivery_date_of_invoice');

        $validator
            ->allowEmptyString('status');

        $validator
            ->boolean('destruction')
            ->allowEmptyString('destruction');

        $validator
            ->dateTime('date_destruction')
            ->allowEmptyDateTime('date_destruction');

        $validator
            ->boolean('annul')
            ->allowEmptyString('annul');

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
        $rules->add($rules->isUnique(['num_sample']));
        $rules->add($rules->existsIn(['department_id'], 'Departments'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['line_id'], 'Lines'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'));
        $rules->add($rules->existsIn(['request_id'], 'Requests'));
        $rules->add($rules->existsIn(['typeconcept_id'], 'Typeconcepts'));

        return $rules;
    }
}
