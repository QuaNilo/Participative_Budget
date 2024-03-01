<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\CalendarDynamic
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $date
 * @property string|null $text
 * @property string|null $description
 * @property int $phase
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Database\Factories\CalendarDynamicFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic wherePhase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarDynamic whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CalendarDynamic extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'calendar_dynamics';

    public $fillable = [
        'date',
        'text',
        'description',
        'phase'
    ];

    protected $casts = [
        'date' => 'string',
        'text' => 'string',
        'description' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'date' => 'nullable|string|max:255',
        'text' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'phase' => 'required'
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
        'created_at' => __('Created At'),
        'updated_at' => __('Updated At'),
        'date' => __('Date'),
        'text' => __('Text'),
        'description' => __('Description'),
        'phase' => __('Phase')
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
