<?php

namespace Botble\Blog\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Language\Models\LanguageMeta;
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
    protected $table = 'categories';

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
        'parent_id',
        'icon',
        'is_featured',
        'order',
        'is_default',
        'status',
        'author_id',
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
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_categories')->with('slugable');
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id')->withDefault();
    }

    /**
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    protected static function boot()
    {
        parent::boot();

        self::deleting(function (Category $category) {
            Category::where('parent_id', $category->id)->delete();

            $category->posts()->detach();
        });
    }
    public static function getCategoryByLang($id,$lang)
    {
        if ($id) {

            $data = LanguageMeta::select('reference_id')
                ->whereRaw('lang_meta_code ="' . $lang . '" and lang_meta_origin in (select lang_meta_origin FROM language_meta
                 where reference_id = ' . $id . ' and reference_type like "%Category%")'
                )
                ->limit(1);

            $data = $data->get();

            if (count($data) > 0)
                return $data[0]->reference_id;
        }
        return $id;
    }
}
