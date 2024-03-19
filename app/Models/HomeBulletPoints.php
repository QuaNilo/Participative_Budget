<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\HomeBulletPoints
 *
 * @property int $id
 * @property int $home_id
 * @property string $bullet_point
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\Home $home
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints whereBulletPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints whereHomeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeBulletPoints whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomeBulletPoints extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'home_bullet_points';

//    public static function create(array $attributes = [])
//    {
//        // If 'home_id' is not provided in the attributes and there's at least one Home record
//        if (!isset($attributes['home_id']) && Home::count() > 0) {
//            // Set 'home_id' to the ID of the first Home instance
//            $attributes['home_id'] = Home::first()->id;
//        }
//
//        return parent::create($attributes);
//    }

    public $fillable = [
        'home_id',
        'bullet_point'
    ];

    protected $casts = [
        'bullet_point' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'home_id' => 'nullable',
        'bullet_point' => 'required|string|max:255',
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
        'home_id' => __('Home Id'),
        'bullet_point' => __('Bullet Point'),
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

    public function home(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Home::class, 'home_id');
    }


}
