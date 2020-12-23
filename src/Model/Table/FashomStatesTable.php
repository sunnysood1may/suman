<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FashomStates Model
 *
 * @property \App\Model\Table\FashomCountriesTable&\Cake\ORM\Association\BelongsTo $FashomCountries
 *
 * @method \App\Model\Entity\FashomState get($primaryKey, $options = [])
 * @method \App\Model\Entity\FashomState newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FashomState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FashomState|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomState saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FashomState[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FashomState findOrCreate($search, callable $callback = null, $options = [])
 */
class FashomStatesTable extends Table
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

        $this->setTable('fashom_states');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('FashomCountries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER',
        ]);

        $this->hasMany('FashomUsers', [
            'foreignKey' => 'state_id',
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
            ->scalar('state_name')
            ->maxLength('state_name', 255)
            ->requirePresence('state_name', 'create')
            ->notEmptyString('state_name');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

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
        $rules->add($rules->existsIn(['country_id'], 'FashomCountries'));

        return $rules;
    }
}
