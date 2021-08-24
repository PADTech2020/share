<?php

namespace Botble\Team\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

class Team extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teams';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'summary',
        'image',
        'text_bg',
        'phone',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
    public static function getTeamMembers()
    {
        //return Team::where(['status' => 1])->get();
        return Team::select('*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'teams.id');
            })
            ->where([
                'language_meta.reference_type' => Team::class,
                'language_meta.lang_meta_code' => (app()->getLocale()=='en')?'en_US':'ar',
                'teams.status' => 1])->orderBy('teams.created_at', 'DESC')->get();
    }
}
