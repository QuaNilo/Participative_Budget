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
 * @property int|null $edition_winners_id
 * @property int $edition_id
 * @property string $content
 * @property float $coordinateX
 * @property float $coordinateY
 * @property string $summary
 * @property string $title
 * @property string|null $image
 * @property int $status 1 - Pendente | 2 - Em Revisão | 3 - Aceite | 4 - Rejeitado | 5 - Fechado
 * @property float|null $budget_estimate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \App\Models\Category $category
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
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCoordinateX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCoordinateY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereProposalWinnersId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereUserId($value)
 * @mixin \Eloquent
 */
class Proposal extends Model implements Auditable, HasMedia
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    use InteractsWithMedia;


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
        'edition_winners_id',
        'content',
        'coordinateX',
        'coordinateY',
        'summary',
        'title',
        'image',
        'status',
        'budget_estimate'
    ];

    protected $casts = [
        'content' => 'string',
        'coordinateX' => 'float',
        'coordinateY' => 'float',
        'summary' => 'string',
        'title' => 'string',
        'image' => 'string',
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
        'edition_id' => 'required',
        'edition_winners_id' => 'nullable',
        'content' => 'required|string|max:65535',
        'coordinateX' => 'required|numeric',
        'coordinateY' => 'required|numeric',
        'summary' => 'required|string|max:65535',
        'title' => 'required|string|max:65535',
        'image' => 'nullable|string|max:65535',
        'status' => 'required',
        'budget_estimate' => 'nullable|numeric',
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
        'user_id' => __('User Id'),
        'category_id' => __('Category Id'),
        'edition_id' => __('Edition Id'),
        'edition_winners_id' => __('Edition Winners ID'),
        'content' => __('Content'),
        'coordinateX' => __('Coordinatex'),
        'coordinateY' => __('Coordinatey'),
        'summary' => __('Summary'),
        'title' => __('Title'),
        'image' => __('Image'),
        'status' => __('Status'),
        'budget_estimate' => __('Budget Estimate'),
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

    public function edition_winners(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\EditionWinner::class, 'edition_winners_id');
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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
        $this->addMediaCollection('cover')
            ->singleFile()
            ->useFallbackUrl(asset('images/placeholders/800x800.jpg'))
            ->useFallbackPath(public_path('/images/placeholders/800x800.jpg'))
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('original')
                    ->fit('max', 1024, 1024)
                    ->keepOriginalImageFormat();
                $this
                    ->addMediaConversion('square')
                    ->crop('crop-center', 512, 512);
                $this
                    ->addMediaConversion('retangular')
                    ->crop('crop-center', 512, 384);
            });

        //->useFallbackUrl(asset('images/placeholders/amt.jpg'));;
        //->useFallbackUrl('/images/anonymous-user.jpg')
        //->useFallbackPath(public_path('/images/anonymous-user.jpg'));
        /*->useFallbackPath(public_path('/default_avatar.jpg'))
        ->useFallbackPath(public_path('/default_avatar_thumb.jpg'), 'thumb')
        ->registerMediaConversions(function (Media $media) {
            $this
                ->addMediaConversion('thumb')
                ->width(50)
                ->height(50);

            $this
                ->addMediaConversion('thumb_2')
                ->width(100)
                ->height(100);
        });*/
    }

}
