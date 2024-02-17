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
 * @property bool $validate_cc
 * @property bool $validate_address
 * @property bool $require_cc_vote_create
 * @property bool $require_address_vote_create
 * @property bool $allow_change_lang
 * @property string $map_lat
 * @property string $map_lng
 * @property string $email_cm
 * @property string $facebook
 * @property string $instagram
 * @property string $twitter
 * @property string $linkedin
 * @property string $youtube
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
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValidateAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValidateCc($value)
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
        'validate_cc',
        'validate_address',
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
        'youtube'
    ];

    protected $casts = [
        'validate_cc' => 'boolean',
        'validate_address' => 'boolean',
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
        'youtube' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'validate_cc' => 'required|boolean',
        'validate_address' => 'required|boolean',
        'require_cc_vote_create' => 'required|boolean',
        'require_address_vote_create' => 'required|boolean',
        'allow_change_lang' => 'required|boolean',
        'map_lat' => 'required|string|max:255',
        'map_lng' => 'required|string|max:255',
        'email_cm' => 'required|string|max:255',
        'facebook' => 'required|string|max:255',
        'instagram' => 'required|string|max:255',
        'twitter' => 'required|string|max:255',
        'linkedin' => 'required|string|max:255',
        'youtube' => 'required|string|max:255',
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
        'validate_cc' => __('Validate Cc'),
        'validate_address' => __('Validate Address'),
        'require_cc_vote_create' => __('Require Cc Vote Create'),
        'require_address_vote_create' => __('Require Address Vote Create'),
        'allow_change_lang' => __('Allow Change Lang'),
        'map_lat' => __('Map Lat'),
        'map_lng' => __('Map Lng'),
        'email_cm' => __('Email Cm'),
        'facebook' => __('Facebook'),
        'instagram' => __('Instagram'),
        'twitter' => __('Twitter'),
        'linkedin' => __('Linkedin'),
        'youtube' => __('Youtube'),
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
