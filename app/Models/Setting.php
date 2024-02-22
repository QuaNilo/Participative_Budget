<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Setting
 *
 * @property int $id
 * @property bool $require_cc_vote_create
 * @property bool $require_address_vote_create
 * @property bool $allow_change_lang
 * @property string $map_lat
 * @property string $map_lng
 * @property string|null $email_cm
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property string|null $youtube
 * @property string|null $website_cm
 * @property string|null $telephone_cm
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Database\Factories\SettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereAllowChangeLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereEmailCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereMapLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereMapLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereRequireAddressVoteCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereRequireCcVoteCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTelephoneCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereWebsiteCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereYoutube($value)
 * @mixin \Eloquent
 */
class Setting extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'settings';

    public $fillable = [
        'require_cc_vote_create',
        'require_address_vote_create',
        'allow_change_lang',
        'map_lat',
        'map_lng',
        'email_cm',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'youtube',
        'website_cm',
        'telephone_cm'
    ];

    protected $casts = [
        'require_cc_vote_create' => 'boolean',
        'require_address_vote_create' => 'boolean',
        'allow_change_lang' => 'boolean',
        'map_lat' => 'string',
        'map_lng' => 'string',
        'email_cm' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'twitter' => 'string',
        'linkedin' => 'string',
        'youtube' => 'string',
        'website_cm' => 'string',
        'telephone_cm' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'require_cc_vote_create' => 'required|boolean',
        'require_address_vote_create' => 'required|boolean',
        'allow_change_lang' => 'required|boolean',
        'map_lat' => 'required|string|max:255',
        'map_lng' => 'required|string|max:255',
        'email_cm' => 'nullable|string|max:255',
        'facebook' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'linkedin' => 'nullable|string|max:255',
        'youtube' => 'nullable|string|max:255',
        'website_cm' => 'nullable|string|max:255',
        'telephone_cm' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
        ];
    }

    /**
    * Attribute labels
    *
    * @return array
    */
    public static function attributeLabels() : array
    {
        return [
            'id' => __('Id'),
        'require_cc_vote_create' => __('Require Validated ID to Vote&Create'),
        'require_address_vote_create' => __('Require Validated Address to Vote&Create'),
        'allow_change_lang' => __('Allow Toggle of Language'),
        'map_lat' => __('Map Latitude'),
        'map_lng' => __('Map Longitude'),
        'email_cm' => __('Email Town Hall'),
        'facebook' => __('Facebook'),
        'instagram' => __('Instagram'),
        'twitter' => __('Twitter'),
        'linkedin' => __('Linkedin'),
        'youtube' => __('Youtube'),
        'website_cm' => __('Website Town Hall'),
        'telephone_cm' => __('Telephone Town Hall'),
        'created_at' => __('Created At'),
        'updated_at' => __('Updated At')
        ];
    }

    /**
    * Return the attribute label
    * @param string $attribute
    * @return string
    */
    public function getAttributeLabel($attribute) : string
    {
        $attributeLabels = static::attributeLabels();
        return isset($attributeLabels[$attribute]) ? $attributeLabels[$attribute] : __($attribute);
    }




}
