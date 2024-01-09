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
 * @property string $content
 * @property float $coordinateX
 * @property float $coordinateY
 * @property string $summary
 * @property string $title
 * @property int $status 1 - Pendente | 2 - Em Revisão | 3 - Aceite | 4 - Rejeitado | 5 - Fechado
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
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCoordinateX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCoordinateY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proposal whereId($value)
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
    const STATUS_DISABLE = 0;
    const STATUS_ACTIVE = 1;

    public $table = 'proposals';


    public $fillable = [
        'user_id',
        'category_id',
        'content',
        'coordinateX',
        'coordinateY',
        'summary',
        'title',
        'status'
    ];

    protected $casts = [
        'content' => 'string',
        'coordinateX' => 'float',
        'coordinateY' => 'float',
        'summary' => 'string',
        'title' => 'string'
    ];

    public static function rules(): array
    {
        return [
            'user_id' => 'required',
        'category_id' => 'required',
        'content' => 'required|string|max:65535',
        'coordinateX' => 'required|numeric',
        'coordinateY' => 'required|numeric',
        'summary' => 'required|string|max:65535',
        'title' => 'required|string|max:65535',
        'status' => 'required',
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
        'content' => __('Content'),
        'coordinateX' => __('Coordinatex'),
        'coordinateY' => __('Coordinatey'),
        'summary' => __('Summary'),
        'title' => __('Title'),
        'status' => __('Status'),
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
            self::STATUS_ACTIVE =>  __('Active'),
            self::STATUS_DISABLE =>  __('Disable'),
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
