<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * App\Models\Proposal
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property int $edition_id
 * @property string $title
 * @property string $content
 * @property string|null $summary
 * @property float|null $lat
 * @property float|null $lng
 * @property string|null $street
 * @property string|null $postal_code
 * @property string|null $city
 * @property string|null $freguesia
 * @property string|null $url
 * @property bool|null $winner
 * @property int|null $rank
 * @property int $status 1 - Pendente | 2 - Em Revisão | 3 - Aceite | 4 - Rejeitado | 5 - Fechado
 * @property float|null $budget_estimate
 * @property int $unique_impressions
 * @property int $impressions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Edition $edition
 * @property-read string $status_label
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vote> $votes
 * @property-read int|null $votes_count
 * @method static \Database\Factories\ProposalFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereBudgetEstimate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereEditionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereFreguesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereImpressions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUniqueImpressions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereWinner($value)
 * @mixin \Eloquent
 */
class Proposal extends Model implements Auditable, HasMedia
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use InteractsWithMedia;
    use HasFactory;


    const STATUS_PENDING = 0;
    const STATUS_REVIEW = 1;
    const STATUS_ACCEPTED = 2;
    const STATUS_REJECTED = 3;
    const STATUS_CLOSED = 4;

    public $table = 'proposals';

    public $fillable = [
        'user_id',
        'category_id',
        'edition_id',
        'title',
        'content',
        'summary',
        'lat',
        'lng',
        'street',
        'postal_code',
        'city',
        'freguesia',
        'url',
        'winner',
        'rank',
        'status',
        'budget_estimate',
        'unique_impressions',
        'impressions'
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'summary' => 'string',
        'lat' => 'float',
        'lng' => 'float',
        'street' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'freguesia' => 'string',
        'url' => 'string',
        'winner' => 'boolean',
        'budget_estimate' => 'float'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($proposal) {
            // Truncate the content to 255 characters and assign it to the summary field
            $proposal->summary = substr($proposal->content, 0, 255);
            $proposal->created_at = now();
            $proposal->updated_at = now();
        });

        static::creating(function($proposal) {
            $proposal->status = 0;
        });
    }

    public static function rules(): array
    {
        return [
            'user_id' => 'required',
        'category_id' => 'required',
        'title' => 'required|string|max:255',
        'content' => 'required|string|max:32000',
        'lat' => 'required|numeric',
        'lng' => 'required|numeric',
        'street' => 'required|string|max:60',
        'postal_code' => 'nullable|string|max:20',
        'city' => 'required|string|max:60',
        'freguesia' => 'required|string|max:60',
        'url' => 'nullable|string|max:255',
        'budget_estimate' => 'nullable|numeric|max:9999999'
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
        'user_id' => __('User ID'),
        'category_id' => __('Category Id'),
        'edition_id' => __('Edition Id'),
        'title' => __('Title'),
        'content' => __('Content'),
        'summary' => __('Summary'),
        'lat' => __('Latitude'),
        'lng' => __('Longitude'),
        'street' => __('Street'),
        'postal_code' => __('Postal Code'),
        'city' => __('City'),
        'freguesia' => __('Freguesia'),
        'url' => __('Url'),
        'winner' => __('Winner'),
        'rank' => __('Rank'),
        'status' => __('Status'),
        'budget_estimate' => __('Budget Estimate'),
        'unique_impressions' => __('Unique Impressions'),
        'impressions' => __('Impressions'),
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

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function edition(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Edition::class, 'edition_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function votes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Vote::class, 'proposal_id');
    }

    /**
    * Return an array with the values of status field
    * @return array
    */
    public static function getStatusArray() : array
    {
        return [
            self::STATUS_PENDING =>  __('Pendente'),
            self::STATUS_REVIEW =>  __('Em Revisão'),
            self::STATUS_ACCEPTED =>  __('Aceite'),
            self::STATUS_REJECTED =>  __('Rejeitado'),
            self::STATUS_CLOSED =>  __('Fechado')
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

    public function registerMediaCollections(Media $media = null): void
    {
        $this->addMediaCollection('images');
        $this->addMediaCollection('cover')
            ->singleFile()
            ->useFallbackUrl(asset('images/placeholders/200x200.jpg'))
            ->useFallbackPath(public_path('/images/placeholders/200x200.jpg'))
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('original')
                    ->fit('max', 1024, 1024)
                    ->keepOriginalImageFormat();
                $this
                    ->addMediaConversion('square')
                    ->crop('crop-center', 800, 800);
                $this
                    ->addMediaConversion('retangular')
                    ->crop('crop-center', 800, 400);
            });

            $this->addMediaConversion('original')
                ->keepOriginalImageFormat();

            $this->addMediaConversion('square')
                ->crop('crop-center', 800, 800);

            $this->addMediaConversion('retangular')
                ->crop('crop-center', 800, 400);
    }
}
