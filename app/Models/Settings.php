<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Settings
 *
 * @property int $id
 * @property bool $require_cc_vote_create
 * @property bool $require_address_vote_create
 * @property bool $allow_change_lang
 * @property string|null $address
 * @property string $map_lat
 * @property string $map_lng
 * @property string|null $nome_cm
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
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereAllowChangeLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereEmailCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereMapLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereMapLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereNomeCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereRequireAddressVoteCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereRequireCcVoteCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereTelephoneCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereWebsiteCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereYoutube($value)
 * @mixin \Eloquent
 */
class Settings extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'settings';

    public $fillable = [
        'require_cc_vote_create',
        'require_address_vote_create',
        'allow_change_lang',
        'address',
        'map_lat',
        'map_lng',
        'nome_cm',
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
        'address' => 'string',
        'map_lat' => 'string',
        'map_lng' => 'string',
        'nome_cm' => 'string',
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
        'address' => 'nullable|string|max:255',
        'map_lat' => 'required|string|max:255',
        'map_lng' => 'required|string|max:255',
        'nome_cm' => 'nullable|string|max:255',
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
        'require_cc_vote_create' => __('Require Cc Vote Create'),
        'require_address_vote_create' => __('Require Address Vote Create'),
        'allow_change_lang' => __('Allow Change Lang'),
        'address' => __('Address'),
        'map_lat' => __('Map Lat'),
        'map_lng' => __('Map Lng'),
        'nome_cm' => __('Nome Cm'),
        'email_cm' => __('Email Cm'),
        'facebook' => __('Facebook'),
        'instagram' => __('Instagram'),
        'twitter' => __('Twitter'),
        'linkedin' => __('Linkedin'),
        'youtube' => __('Youtube'),
        'website_cm' => __('Website Cm'),
        'telephone_cm' => __('Telephone Cm'),
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
