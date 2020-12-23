<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FashomCountries Model
 *
 * * @property \App\Model\Table\FashomStatesTable&\Cake\ORM\Association\HasMany $FashomStates
 *
 * @method \App\Model\Entity\FashomCountry get($primaryKey, $options = [])
 * @method \App\Model\Entity\FashomCountry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FashomCountry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FashomCountry|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomCountry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomCountry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FashomCountry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FashomCountry findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FashomCountriesTable extends Table
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

        $this->setTable('fashom_countries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('FashomStates', [
            'foreignKey' => 'country_id',
        ]);

        $this->hasMany('FashomUsers', [
            'foreignKey' => 'country_id',
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
            ->scalar('country_name')
            ->maxLength('country_name', 255)
            ->requirePresence('country_name', 'create')
            ->notEmptyString('country_name');

        $validator
            ->scalar('country_iso_code_2')
            ->maxLength('country_iso_code_2', 2)
            ->requirePresence('country_iso_code_2', 'create')
            ->notEmptyString('country_iso_code_2');

        $validator
            ->scalar('country_iso_code_3')
            ->maxLength('country_iso_code_3', 3)
            ->requirePresence('country_iso_code_3', 'create')
            ->notEmptyString('country_iso_code_3');

        $validator
            ->scalar('currency_code')
            ->maxLength('currency_code', 10)
            ->allowEmptyString('currency_code');

        $validator
            ->scalar('currency_symbol')
            ->maxLength('currency_symbol', 10)
            ->allowEmptyString('currency_symbol');

        $validator
            ->scalar('country_status')
            ->maxLength('country_status', 1)
            ->notEmptyString('country_status');

        return $validator;
    }
}
