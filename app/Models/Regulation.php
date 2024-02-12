<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Regulation
 *
 * @property int $id
 * @property string|null $description
 * @property string|null $author
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Database\Factories\RegulationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Regulation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Regulation extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'regulations';

    public $fillable = [
        'description',
        'author'
    ];

    protected $casts = [
        'description' => 'string',
        'author' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'description' => 'nullable|string|max:255',
        'author' => 'nullable|string|max:255',
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
        'description' => __('Description'),
        'author' => __('Author'),
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


    public function chapters(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Chapter::class, 'regulation_id');
    }

}
