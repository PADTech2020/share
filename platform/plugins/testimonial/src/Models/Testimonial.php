<?php

namespace Botble\Testimonial\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

class Testimonial extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'testimonials';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'content',
        'image',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
    public static function getAll(){
        return Testimonial::where(['status'=>'published'])->orderBy('created_at','desc')->get();
    }
}
