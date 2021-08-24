<?php

namespace Botble\Partners\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

class Partners extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partners';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'logo',
        'summary',
        'url',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
    public static function getPartnersList()
    {
        return Partners::where(['status'=>'published'])->pluck('name', 'id')->toArray();
    }
    public static function getAllPartners()
    {
        return Partners::where(['status'=>'published'])->get();
    }

}
