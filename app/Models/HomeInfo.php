<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\HomeInfo
 *
 * @property int $id
 * @property int $home_id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\Home $home
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo whereHomeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeInfo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomeInfo extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'home_infos';

    public $fillable = [
        'home_id',
        'title',
        'content'
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'home_id' => '',
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:255',
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
        'title' => __('Title'),
        'content' => __('Content'),
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
