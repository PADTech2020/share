<?php

namespace Botble\Clients\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

class Clients extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * @var array
     */
    protected $fillable = [
        'company',
        'company_link',
        'company_logo',
        'content',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public static function getAll(){
        return Clients::where(['status'=>'published'])->orderBy('created_at','desc')->get();
    }

}
