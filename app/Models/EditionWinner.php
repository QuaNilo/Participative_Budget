<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\EditionWinner
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon $year
 * @property int|null $rank
 * @property int $edition_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner query()
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EditionWinner whereYear($value)
 * @mixin \Eloquent
 */
class EditionWinner extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'edition_winners';

    public $fillable = [
        'edition_id',
        'year',
        'rank'
    ];

    protected $casts = [
        'year' => 'integer'
    ];

    public static function rules(): array
    {
        return [
            'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'edition_id' => 'required',
        'year' => 'required',
        'rank' => 'nullable'
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
        'year' => __('Year'),
        'rank' => __('Rank')
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

    public function edition(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Edition::class, 'edition_id');
    }

        public function proposals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Proposal::class, 'proposal_id');
    }



}
