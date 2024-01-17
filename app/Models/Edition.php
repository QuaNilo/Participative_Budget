<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Edition
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon $year
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Illuminate\Database\Eloquent\Builder|Edition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Edition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Edition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereYear($value)
 * @mixin \Eloquent
 */
class Edition extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'editions';

    public $fillable = [
        'year'
    ];

    protected $casts = [
        'year' => 'integer'
    ];

    public static function rules(): array
    {
        return [
            'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'year' => 'required'
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
        'created_at' => __('Created At'),
        'updated_at' => __('Updated At'),
        'year' => __('Year')
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


    public function edition_winners(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\EditionWinner::class, 'edition_winners_id');
    }

        public function proposals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Proposal::class, 'proposal_id');
    }

}
