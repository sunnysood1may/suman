<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * FashomUser Entity
 *
 * @property int $id
 * @property string|null $user_name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $business_name
 * @property string|null $business_user_type
 * @property string|null $business_type
 * @property string|null $email
 * @property string|null $password
 * @property string|null $gender
 * @property \Cake\I18n\FrozenDate|null $dob
 * @property \Cake\I18n\FrozenDate|null $date_of_birth
 * @property string|resource|null $show_birthday
 * @property string|null $user_image
 * @property string|null $create_for
 * @property string|null $business_category
 * @property string|null $contact_number
 * @property string|null $website
 * @property string|null $address
 * @property int|null $country_id
 * @property int|null $state_id
 * @property int|null $city_id
 * @property string|null $change_password
 * @property string|null $zip_code
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $user_status
 * @property string|null $user_type
 * @property string $registration_type
 * @property string|null $verify_code
 * @property string|null $description
 * @property string|null $acc_status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $notify_status
 * @property string|null $code
 * @property string|null $facebook_token
 * @property string|null $instagram_token
 * @property string|null $instagram_name
 * @property int|null $show_group_popup
 * @property int|null $show_follow_btn
 * @property \Cake\I18n\FrozenTime|null $last_access
 * @property int|null $push_notify_status
 * @property \Cake\I18n\FrozenDate|null $last_reminder_sent_at
 * @property int|null $is_brand_profile
 * @property string|null $google_token
 * @property \Cake\I18n\FrozenTime|null $last_instagram_updated_date
 * @property string|null $invite_code
 * @property int|null $posts_count
 * @property int $is_stylist
 * @property int $is_stylist60
 * @property string|null $stylist_bio_notapproved
 * @property string|null $stylist_bio
 * @property int|null $is_valid_email
 * @property int|null $is_private
 * @property string|null $user_locale
 * @property string|null $user_data
 * @property int $credit_amount
 * @property int $is_cc_declined
 * @property int $is_fraud
 * @property int|null $is_youtuber
 * @property int $is_influencer
 *
 * @property \App\Model\Entity\FashomCountry $country
 * @property \App\Model\Entity\FashomState $state
 * @property \App\Model\Entity\FashomCity $city
 */
class FashomUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_name' => true,
        'first_name' => true,
        'last_name' => true,
        'business_name' => true,
        'business_user_type' => true,
        'business_type' => true,
        'email' => true,
        'password' => true,
        'gender' => true,
        'dob' => true,
        'date_of_birth' => true,
        'show_birthday' => true,
        'user_image' => true,
        'create_for' => true,
        'business_category' => true,
        'contact_number' => true,
        'website' => true,
        'address' => true,
        'country_id' => true,
        'state_id' => true,
        'country' => true,
        'state' => true,
        'city' => true,
        'city_id' => true,
        'change_password' => true,
        'zip_code' => true,
        'latitude' => true,
        'longitude' => true,
        'user_status' => true,
        'user_type' => true,
        'registration_type' => true,
        'verify_code' => true,
        'description' => true,
        'acc_status' => true,
        'created' => true,
        'modified' => true,
        'notify_status' => true,
        'code' => true,
        'facebook_token' => true,
        'instagram_token' => true,
        'instagram_name' => true,
        'show_group_popup' => true,
        'show_follow_btn' => true,
        'last_access' => true,
        'push_notify_status' => true,
        'last_reminder_sent_at' => true,
        'is_brand_profile' => true,
        'google_token' => true,
        'last_instagram_updated_date' => true,
        'invite_code' => true,
        'posts_count' => true,
        'is_stylist' => true,
        'is_stylist60' => true,
        'stylist_bio_notapproved' => true,
        'stylist_bio' => true,
        'is_valid_email' => true,
        'is_private' => true,
        'user_locale' => true,
        'user_data' => true,
        'credit_amount' => true,
        'is_cc_declined' => true,
        'is_fraud' => true,
        'is_youtuber' => true,
        'is_influencer' => true,
        'facebook' => true,
        'twitter' => true,
        'instagram' => true,
        'google' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
