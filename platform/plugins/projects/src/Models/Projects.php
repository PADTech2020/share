<?php

namespace Botble\Projects\Models;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Base\Traits\EnumCastable;
use Botble\Services\Models\Services;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Projects extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'image',
        'summary',
        'youtube',
        'content',
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

    public static function getProjects($limit = 6)
    {
//        return Projects::select('*')
//            ->join('language_meta', function ($join) {
//                $join->on('language_meta.reference_id', '=', 'projects.id');
//            })
//            ->where([
//                'language_meta.reference_type' => Projects::class,
//                'language_meta.lang_meta_code' => (app()->getLocale()=='en')?'en_US':'ar',
//                'projects.status' => 'published'])->orderBy('projects.created_at', 'DESC')->limit($limit)->get();
        return Projects::where(['status' => 'published'])->limit($limit)->orderBy('created_at', 'desc')->get();
    }
//    public static function getCategory(){
//        return Projects::where(['status'=>'published'])->get();
//    }
    /**
     * @return BelongsToMany
     */
    public function services()
    {
        //return $this->belongsToMany(Services::class, 'project_services');

        return $this->belongsToMany(Services::class, 'project_services', 'project_id', 'service_id');
        //return $this->belongsToMany(Services::class, 'foreign_id', 'id')->orderBy('rank');
    }

    public function getYoutubeID()
    {

//$url = "http://www.youtube.com/watch?v=C4kxS1ksqtw&feature=relate";
        parse_str(parse_url($this->youtube, PHP_URL_QUERY), $my_array_of_vars);
// Output: C4kxS1ksqtw
        return $my_array_of_vars['v'];
    }

    public function category()
    {
        return $this->belongsTo(Category::class); //return $this->hasOne(Category::class);
    }
}
