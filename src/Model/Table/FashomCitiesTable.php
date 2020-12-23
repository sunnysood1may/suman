<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FashomCities Model
 *
 * @property \App\Model\Table\FashomStatesTable&\Cake\ORM\Association\BelongsTo $FashomStates
 *
 * @method \App\Model\Entity\FashomCity get($primaryKey, $options = [])
 * @method \App\Model\Entity\FashomCity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FashomCity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FashomCity|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomCity saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomCity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FashomCity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FashomCity findOrCreate($search, callable $callback = null, $options = [])
 */
class FashomCitiesTable extends Table
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

        $this->setTable('fashom_cities');

        $this->belongsTo('FashomStates', [
            'foreignKey' => 'city_state_id',
            'propertyName' => 'name_city_state'
        ]);

        $this->hasMany('FashomUsers', [
            'foreignKey' => 'city_id',
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
            ->numeric('id')
            ->allowEmptyString('id');

        $validator
            ->scalar('city_ascii_name')
            ->maxLength('city_ascii_name', 300)
            ->allowEmptyString('city_ascii_name');

        $validator
            ->scalar('city_name')
            ->maxLength('city_name', 300)
            ->allowEmptyString('city_name');

        $validator
            ->scalar('city_state')
            ->maxLength('city_state', 15)
            ->allowEmptyString('city_state');

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
        $rules->add($rules->existsIn(['city_state_id'], 'FashomStates'));

        return $rules;
    }
}
