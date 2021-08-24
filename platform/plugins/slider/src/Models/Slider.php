<?php

namespace Botble\Slider\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

class Slider extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sliders';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'button_1',
        'button_1_url',
        'status',
        'main_slide',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public static function getSlider($slug)
    {
        return Slider::select('*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'sliders.id');
            })
            ->where([
                'language_meta.reference_type' => Slider::class,
                'language_meta.lang_meta_code' => (app()->getLocale()=='en')?'en_US':'ar',
                'sliders.status' => 'published', 'sliders.slug' => $slug])->orderBy('sliders.created_at', 'DESC')->get();
    }
}
