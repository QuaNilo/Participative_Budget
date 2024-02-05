<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\LoadDefaults;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
        'title',
        'content',
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
        'budget_estimate'
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
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
        'lat' => 'nullable|numeric',
        'lng' => 'nullable|numeric',
        'street' => 'nullable|string|max:60',
        'postal_code' => 'nullable|string|max:20',
        'city' => 'nullable|string|max:60',
        'freguesia' => 'nullable|string|max:60',
        'url' => 'nullable|string|max:60',
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
        'title' => __('Title'),
        'content' => __('Content'),
        'summary' => __('Summary'),
        'lat' => __('Lat'),
        'lng' => __('Lng'),
        'street' => __('Street'),
        'postal_code' => __('Postal Code'),
        'city' => __('City'),
        'freguesia' => __('Freguesia'),
        'url' => __('Url'),
        'winner' => __('Winner'),
        'rank' => __('Rank'),
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
