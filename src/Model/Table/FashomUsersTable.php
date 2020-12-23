<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FashomUsers Model
 *
 * @property \App\Model\Table\FashomCountriesTable&\Cake\ORM\Association\BelongsTo $FashomCountries
 * @property \App\Model\Table\FashomStatesTable&\Cake\ORM\Association\BelongsTo $FashomStates
 * @property \App\Model\Table\FashomCitiesTable&\Cake\ORM\Association\BelongsTo $FashomCities
 *
 * @method \App\Model\Entity\FashomUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\FashomUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FashomUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FashomUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FashomUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FashomUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FashomUser findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FashomUsersTable extends Table
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

        $this->setTable('fashom_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FashomCountries', [
            'foreignKey' => 'country_id',
            'propertyName' => 'user_country'
        ]);
        $this->belongsTo('FashomStates', [
            'foreignKey' => 'state_id',
            'propertyName' => 'user_state'
        ]);
        $this->belongsTo('FashomCities', [
            'foreignKey' => 'city_id',
            'propertyName' => 'user_city'
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
            ->scalar('user_name')
            ->maxLength('user_name', 100)
            ->allowEmptyString('user_name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 86)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('business_name')
            ->maxLength('business_name', 255)
            ->allowEmptyString('business_name');

        $validator
            ->scalar('business_user_type')
            ->maxLength('business_user_type', 255)
            ->allowEmptyString('business_user_type');

        $validator
            ->scalar('business_type')
            ->maxLength('business_type', 255)
            ->allowEmptyString('business_type');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 50)
            ->allowEmptyString('gender');

        $validator
            ->date('dob')
            ->allowEmptyDate('dob');

        $validator
            ->date('date_of_birth')
            ->allowEmptyDate('date_of_birth');

        $validator
            ->allowEmptyString('show_birthday');

        $validator
            ->scalar('user_image')
            ->maxLength('user_image', 255)
            ->allowEmptyFile('user_image');

        $validator
            ->scalar('create_for')
            ->maxLength('create_for', 255)
            ->allowEmptyString('create_for');

        $validator
            ->scalar('business_category')
            ->maxLength('business_category', 255)
            ->allowEmptyString('business_category');

        $validator
            ->scalar('contact_number')
            ->maxLength('contact_number', 255)
            ->allowEmptyString('contact_number');

        $validator
            ->scalar('website')
            ->maxLength('website', 255)
            ->allowEmptyString('website');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('country')
            ->maxLength('country', 255)
            ->allowEmptyString('country');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->allowEmptyString('state');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmptyString('city');

        $validator
            ->scalar('change_password')
            ->maxLength('change_password', 1)
            ->allowEmptyString('change_password');

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 255)
            ->allowEmptyString('zip_code');

        $validator
            ->scalar('latitude')
            ->maxLength('latitude', 25)
            ->allowEmptyString('latitude');

        $validator
            ->scalar('longitude')
            ->maxLength('longitude', 25)
            ->allowEmptyString('longitude');

        $validator
            ->scalar('user_status')
            ->maxLength('user_status', 2)
            ->allowEmptyString('user_status');

        $validator
            ->scalar('user_type')
            ->maxLength('user_type', 50)
            ->allowEmptyString('user_type');

        $validator
            ->scalar('registration_type')
            ->maxLength('registration_type', 20)
            ->notEmptyString('registration_type');

        $validator
            ->scalar('verify_code')
            ->maxLength('verify_code', 255)
            ->allowEmptyString('verify_code');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('acc_status')
            ->maxLength('acc_status', 2)
            ->allowEmptyString('acc_status');

        $validator
            ->scalar('notify_status')
            ->maxLength('notify_status', 1)
            ->allowEmptyString('notify_status');

        $validator
            ->scalar('code')
            ->maxLength('code', 5)
            ->allowEmptyString('code');

        $validator
            ->scalar('facebook_token')
            ->maxLength('facebook_token', 280)
            ->allowEmptyString('facebook_token');

        $validator
            ->scalar('instagram_token')
            ->maxLength('instagram_token', 255)
            ->allowEmptyString('instagram_token');

        $validator
            ->scalar('instagram_name')
            ->maxLength('instagram_name', 100)
            ->allowEmptyString('instagram_name');

        $validator
            ->integer('show_group_popup')
            ->allowEmptyString('show_group_popup');

        $validator
            ->integer('show_follow_btn')
            ->allowEmptyString('show_follow_btn');

        $validator
            ->dateTime('last_access')
            ->allowEmptyDateTime('last_access');

        $validator
            ->integer('push_notify_status')
            ->allowEmptyString('push_notify_status');

        $validator
            ->date('last_reminder_sent_at')
            ->allowEmptyDate('last_reminder_sent_at');

        $validator
            ->integer('is_brand_profile')
            ->allowEmptyFile('is_brand_profile');

        $validator
            ->scalar('google_token')
            ->maxLength('google_token', 2000)
            ->allowEmptyString('google_token');

        $validator
            ->dateTime('last_instagram_updated_date')
            ->allowEmptyDateTime('last_instagram_updated_date');

        $validator
            ->scalar('invite_code')
            ->maxLength('invite_code', 20)
            ->allowEmptyString('invite_code');

        $validator
            ->integer('posts_count')
            ->allowEmptyString('posts_count');

        $validator
            ->integer('is_stylist')
            ->notEmptyString('is_stylist');

        $validator
            ->integer('is_stylist60')
            ->notEmptyString('is_stylist60');

        $validator
            ->scalar('stylist_bio_notapproved')
            ->allowEmptyString('stylist_bio_notapproved');

        $validator
            ->scalar('stylist_bio')
            ->allowEmptyString('stylist_bio');

        $validator
            ->integer('is_valid_email')
            ->allowEmptyString('is_valid_email');

        $validator
            ->integer('is_private')
            ->allowEmptyString('is_private');

        $validator
            ->scalar('user_locale')
            ->maxLength('user_locale', 10)
            ->allowEmptyString('user_locale');

        $validator
            ->scalar('user_data')
            ->allowEmptyString('user_data');

        $validator
            ->integer('credit_amount')
            ->notEmptyString('credit_amount');

        $validator
            ->integer('is_cc_declined')
            ->notEmptyString('is_cc_declined');

        $validator
            ->integer('is_fraud')
            ->notEmptyString('is_fraud');

        $validator
            ->integer('is_youtuber')
            ->allowEmptyString('is_youtuber');

        $validator
            ->integer('is_influencer')
            ->notEmptyString('is_influencer');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['country_id'], 'FashomCountries'));
        $rules->add($rules->existsIn(['state_id'], 'FashomStates'));
        $rules->add($rules->existsIn(['city_id'], 'FashomCities'));

        return $rules;
    }
}
