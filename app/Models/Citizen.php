<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * App\Models\Citizen
 *
 * @property int $id
 * @property int $user_id
 * @property string $CC
 * @property string|null $occupation
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $CC_verified_at
 * @property int $CC_verified
 * @property int $address_verified
 * @property \Illuminate\Support\Carbon $address_verified_at
 * @property string|null $address
 * @property string|null $localidade
 * @property string|null $freguesia
 * @property string|null $cod_postal
 * @property string|null $telemovel
 * @property int|null $gender
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CitizenFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereAddressVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereAddressVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCCVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCCVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCodPostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereFreguesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereLocalidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereTelemovel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereUserId($value)
 * @mixin \Eloquent
 */
class Citizen extends Model implements Auditable, HasMedia
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    use InteractsWithMedia;

    const GENDER_FEMALE = 1;
    const GENDER_MALE = 2;
    const GENDER_UNDEFINED = 0;
    const APPROVAL_STATUS_PENDING = 2;
    const APPROVAL_STATUS_ACCEPTED = 1;
    const APPROVAL_STATUS_REJECTED = 0;

    public $table = 'citizens';

    public $fillable = [
        'user_id',
        'CC',
        'occupation',
        'description',
        'CC_verified_at',
        'CC_verified',
        'address_verified',
        'address_verified_at',
        'address',
        'localidade',
        'freguesia',
        'cod_postal',
        'telemovel',
        'gender',
        'remember_token'
    ];

    protected $casts = [
        'CC' => 'string',
        'occupation' => 'string',
        'description' => 'string',
        'CC_verified_at' => 'datetime',
        'CC_verified' => 'integer',
        'address_verified' => 'integer',
        'address_verified_at' => 'datetime',
        'address' => 'string',
        'localidade' => 'string',
        'freguesia' => 'string',
        'cod_postal' => 'string',
        'telemovel' => 'string',
        'remember_token' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'user_id' => 'required',
        'CC' => 'required|string|max:255',
        'occupation' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'CC_verified_at' => 'nullable',
        'CC_verified' => 'required',
        'address_verified' => 'required',
        'address_verified_at' => 'required',
        'address' => 'nullable|string|max:255',
        'localidade' => 'nullable|string|max:255',
        'freguesia' => 'nullable|string|max:255',
        'cod_postal' => 'nullable|string|max:255',
        'telemovel' => 'nullable|string|max:255',
        'gender' => 'nullable',
        'remember_token' => 'nullable|string|max:100',
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
            'id' => __('ID'),
        'user_id' => __('User ID'),
        'CC' => __('Cc'),
        'occupation' => __('Occupation'),
        'description' => __('Description'),
        'CC_verified_at' => __('Citizen Card Verified At'),
        'CC_verified' => __('Citizen Card Verified'),
        'address_verified' => __('Address Verified'),
        'address_verified_at' => __('Address Verified At'),
        'address' => __('Address'),
        'localidade' => __('Localidade'),
        'freguesia' => __('Freguesia'),
        'cod_postal' => __('Codigo Postal'),
        'telemovel' => __('Telemovel'),
        'gender' => __('Gender'),
        'remember_token' => __('Remember Token'),
        'created_at' => __('Created At'),
        'updated_at' => __('Updated At')
        ];
    }


    public static function getApprovalArray() : array
    {
        return [
            self::APPROVAL_STATUS_PENDING =>  __('Pendente'),
            self::APPROVAL_STATUS_ACCEPTED =>  __('Aprovado'),
            self::APPROVAL_STATUS_REJECTED =>  __('Rejeitado'),
        ];
    }

    public static function getGenderArray() : array
    {
        return [
            self::GENDER_UNDEFINED =>  __('Undefined'),
            self::GENDER_FEMALE =>  __('Female'),
            self::GENDER_MALE =>  __('Male'),
        ];
    }


    /**
    * Return the status label
    * @return string
    */
    public function getAddressVerifiedLabelAttribute() : string
    {
        $array = static::getApprovalArray();
        return $array[$this->address_verified] ?? "";
    }

    public function getCcVerifiedLabelAttribute() : string
    {
        $array = static::getApprovalArray();
        return $array[$this->CC_verified] ?? "";
    }


    /**
    * Return the status label
    * @return string
    */
    public function getGenderLabelAttribute() : string
    {
        $array = static::getGenderArray();
        return $array[$this->gender] ?? "";
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

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }


    public function registerMediaCollections(Media $media = null): void
    {
        $this->addMediaCollection('images');

        $this->addMediaConversion('original')
            ->keepOriginalImageFormat();

        $this->addMediaConversion('square')
            ->crop('crop-center', 800, 800);

        $this->addMediaConversion('retangular')
            ->crop('crop-center', 800, 400);

    }

}
