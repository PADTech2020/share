<?php

namespace Botble\Projects\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Slug\Traits\SlugTrait;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends BaseModel
{
    use SlugTrait;
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'p_categories';

    /**
     * The date fields for the model.clear
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'order',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    /**
     * @return BelongsToMany
     */
//    public function projects(): hasMany
//    {
//        return $this->hasMany(Projects::class, 'category_id');
//    }
    public function projects()
    {
        return $this->hasMany(Projects::class);
    }
    public static function getALl(){
        return Category::where(['status'=>'published'])->pluck('name', 'id')->toArray();
    }
    public static function getALlCategories(){
        return Category::where(['status'=>'published'])->get();
    }

}
