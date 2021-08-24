<?php

namespace Botble\Campaigns\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

class Campaigns extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'campaigns';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'summary',
        'image',
        'content',
        'donation_total',
        'donation_goal',
        'seo_title',
        'seo_description',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
