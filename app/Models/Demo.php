<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Demo
 *
 * @property int $id
 * @property int|null $demo_id
 * @property int|null $user_id
 * @property string $name
 * @property string $body
 * @property string|null $phone
 * @property string|null $vat
 * @property string|null $zip
 * @property string|null $optional
 * @property string|null $body_optional
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $date
 * @property \Illuminate\Support\Carbon|null $datetime
 * @property bool $checkbox
 * @property bool $privacy_policy
 * @property int $status 1 - Active | 2 - Disable | 3 - Draft
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read string $status_label
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\DemoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Demo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Demo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Demo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereBodyOptional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereCheckbox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereDemoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereOptional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo wherePrivacyPolicy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereVat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Demo whereZip($value)
 * @mixin \Eloquent
 */
class Demo extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    const STATUS_DISABLE = 0;
    const STATUS_ACTIVE = 1;

    public $table = 'demos';

    public $fillable = [
        'demo_id',
        'user_id',
        'name',
        'body',
        'phone',
        'vat',
        'zip',
        'optional',
        'body_optional',
        'value',
        'date',
        'datetime',
        'checkbox',
        'privacy_policy',
        'status'
    ];

    protected $casts = [
        'name' => 'string',
        'body' => 'string',
        'phone' => 'string',
        'vat' => 'string',
        'zip' => 'string',
        'optional' => 'string',
        'body_optional' => 'string',
        'value' => 'decimal:2',
        'date' => 'date',
        'datetime' => 'datetime',
        'checkbox' => 'boolean',
        'privacy_policy' => 'boolean'
    ];

    public static function rules(): array
    {
        return [
            'demo_id' => 'nullable',
        'user_id' => 'nullable',
        'name' => 'required|string|max:255',
        'body' => 'required|string|max:65535',
        'phone' => 'nullable|string|max:32',
        'vat' => 'nullable|string|max:32',
        'zip' => 'nullable|string|max:16',
        'optional' => 'nullable|string|max:255',
        'body_optional' => 'nullable|string|max:65535',
        'value' => 'nullable|numeric',
        'date' => 'nullable',
        'datetime' => 'nullable',
        'checkbox' => 'required|boolean',
        'privacy_policy' => 'required|boolean',
        'status' => 'required',
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
        'demo_id' => __('Demo Id'),
        'user_id' => __('User Id'),
        'name' => __('Name'),
        'body' => __('Body'),
        'phone' => __('Phone'),
        'vat' => __('Vat'),
        'zip' => __('Zip'),
        'optional' => __('Optional'),
        'body_optional' => __('Body Optional'),
        'value' => __('Value'),
        'date' => __('Date'),
        'datetime' => __('Datetime'),
        'checkbox' => __('Checkbox'),
        'privacy_policy' => __('Privacy Policy'),
        'status' => __('Status'),
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

    /**
    * Return an array with the values of status field
    * @return array
    */
    public static function getStatusArray() : array
    {
        return [
            self::STATUS_ACTIVE =>  __('Active'),
            self::STATUS_DISABLE =>  __('Disable'),
        ];
    }

    /**
    * Return the status label
    * @return string
    */
    public function getStatusLabelAttribute() : string
    {
        $array = static::getStatusArray();
        return $array[$this->status] ?? "";
    }

}
