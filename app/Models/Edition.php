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
 * @property \Illuminate\Support\Carbon|null $edition_end
 * @property \Illuminate\Support\Carbon|null $edition_publish
 * @property int $status 0 - Pendente | 1 - Aberta | 2 - Analise | 3 - Votação | 4 - Completado | 5 - Fechado | 6 - Cancelado
 * @property string $identifier
 * @property int|null $edition_number
 * @property string|null $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $ano
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read string $status_label
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Proposal> $proposals
 * @property-read int|null $proposals_count
 * @method static \Database\Factories\EditionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Edition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Edition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Edition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereAno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereEditionEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereEditionNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereEditionPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Edition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Edition extends Model implements Auditable
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;



    const STATUS_PENDING = 0;
    const STATUS_OPEN = 1;
    const STATUS_ANALYSIS = 2;
    const STATUS_VOTING = 3;
    const STATUS_COMPLETED = 4;
    const STATUS_CLOSED = 5;
    const STATUS_CANCELED = 6;


    public $table = 'editions';

    public $fillable = [
        'edition_end',
        'edition_publish',
        'status',
        'identifier',
        'edition_number',
        'title',
        'description',
        'ano'
    ];

    protected $casts = [
        'edition_end' => 'date',
        'edition_publish' => 'date',
        'identifier' => 'string',
        'title' => 'string',
        'description' => 'string',
        'ano' => 'integer'
    ];

    public static function rules(): array
    {
        return [
            'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'edition_end' => 'nullable',
        'edition_publish' => 'nullable',
        'status' => 'required',
        'identifier' => 'required|string|max:255',
        'edition_number' => 'nullable',
        'title' => 'nullable|string|max:60',
        'description' => 'nullable|string|max:255',
        'ano' => 'nullable'
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
        'edition_end' => __('Edition End'),
        'edition_publish' => __('Edition Publish'),
        'status' => __('Status'),
        'identifier' => __('Identifier'),
        'edition_number' => __('Edition Number'),
        'title' => __('Title'),
        'description' => __('Description'),
        'ano' => __('Ano')
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

    public function proposals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Proposal::class, 'edition_id');
    }

    /**
    * Return an array with the values of status field
    * @return array
    */
    public static function getStatusArray() : array
    {
        return [
            self::STATUS_PENDING =>  __('Pendente'),
            self::STATUS_OPEN =>  __('Aberta'),
            self::STATUS_ANALYSIS =>  __('Analise'),
            self::STATUS_VOTING =>  __('Votação'),
            self::STATUS_COMPLETED =>  __('Concluido'),
            self::STATUS_CLOSED =>  __('Fechada'),
            self::STATUS_CANCELED =>  __('Cancelada')
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
