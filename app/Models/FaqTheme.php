<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\FaqTheme
 *
 * @property int $id
 * @property string $theme
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTheme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTheme whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTheme whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FaqTheme extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'faq_themes';

    public $fillable = [
        'theme'
    ];

    protected $casts = [
        'theme' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'theme' => 'required|string|max:255',
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
        'theme' => __('Theme'),
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

        public function faqs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Faq::class, 'faq_theme_id');
    }



}
