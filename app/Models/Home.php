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
 * App\Models\Home
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \OwenIt\Auditing\Models\Audit> $audits
 * @property-read int|null $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\HomeInfo> $homeInfos
 * @property-read int|null $home_infos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home query()
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Home extends Model implements Auditable, HasMedia
{
    use LoadDefaults;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    use InteractsWithMedia;

    public $table = 'homes';

    public $fillable = [
    ];

    protected $casts = [
    ];

    public static function rules(): array
    {
        return [
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

    public function homeBulletPoints(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\HomeBulletPoints::class, 'home_id');
    }

    public function homeInfos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\HomeInfo::class, 'home_id');
    }

    public function registerMediaCollections(Media $media = null): void
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
