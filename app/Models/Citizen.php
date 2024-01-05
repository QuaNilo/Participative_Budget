<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Citizen
 *
 * @property int $id
 * @property int $user_id
 * @property string $CC
 * @property \Illuminate\Support\Carbon|null $CC_verified_at
 * @property bool $CC_verified
 * @property string $address
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
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCCVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCCVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Citizen whereUserId($value)
 * @mixin \Eloquent
 */
class Citizen extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'citizens';

    public $fillable = [
        'user_id',
        'CC',
        'CC_verified_at',
        'CC_verified',
        'address',
        'remember_token'
    ];

    protected $casts = [
        'CC' => 'string',
        'CC_verified_at' => 'datetime',
        'CC_verified' => 'boolean',
        'address' => 'string',
        'remember_token' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'user_id' => 'required',
        'CC' => 'required|string|max:255',
        'CC_verified_at' => 'nullable',
        'CC_verified' => 'required|boolean',
        'address' => 'required|string|max:255',
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
            'id' => __('Id'),
        'user_id' => __('User Id'),
        'CC' => __('Cc'),
        'CC_verified_at' => __('Cc Verified At'),
        'CC_verified' => __('Cc Verified'),
        'address' => __('Address'),
        'remember_token' => __('Remember Token'),
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

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }


}
