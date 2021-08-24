<?php

namespace Botble\Blog\Models;

use Botble\ACL\Models\User;
use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Language\Models\LanguageMeta;
use Botble\Revision\RevisionableTrait;
use Botble\Slug\Traits\SlugTrait;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends BaseModel
{
    use RevisionableTrait;
    use SlugTrait;
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var mixed
     */
    protected $revisionEnabled = true;

    /**
     * @var mixed
     */
    protected $revisionCleanup = true;

    /**
     * @var int
     */
    protected $historyLimit = 20;

    /**
     * @var array
     */
    protected $dontKeepRevisionOf = [
        'content',
        'views',
    ];

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
        'content',
        'image',
        'is_featured',
        'is_popular',
        'format_type',
        'status',
        'author_id',
        'author_type',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    /**
     * @deprecated
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    /**
     * @return MorphTo
     */
    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function (Post $post) {
            $post->categories()->detach();
            $post->tags()->detach();
        });
    }

    public static function getPopularPosts($limit = 10, array $with = [])
    {
        return Post::where([
            'posts.status' => BaseStatusEnum::PUBLISHED,
            'posts.is_popular' => 1,
        ])
            ->limit($limit)
            ->with(array_merge(['slugable'], $with))
            ->orderBy('posts.created_at', 'desc')->get();
    }

    public static function getPostsByCategory($cat_id, $limit = 10, $is_featured = 0, array $with = [])
    {
        $where = [];

//        $where['language_meta.reference_type'] = Post::class;
//        $where['language_meta.lang_meta_code'] = $lang;
        $where['posts.status'] = BaseStatusEnum::PUBLISHED;
        if ($is_featured) $where['posts.is_featured'] = $is_featured;
        return Post::whereHas('categories', function (Builder $query) use ($cat_id) {
            $query->where('category_id', $cat_id);
        })->where($where)
            ->limit($limit)
            ->with('slugable')
            ->orderBy('posts.created_at', 'desc')->get();
    }

    public static function getLatest($limit = 5, array $with = [])
    {
        return Post::where([
            'posts.status' => BaseStatusEnum::PUBLISHED,
        ])
            ->limit($limit)
            ->with(array_merge(['slugable'], $with))
            ->orderBy('posts.created_at', 'desc')->get();
    }

    public static function getPostsForOthersLang($id, $lang)
    {
        if ($id) {
            $lang = $lang;
            $data = LanguageMeta::select(['reference_id', 'lang_meta_code'])
                ->whereRaw('lang_meta_code ="' . $lang . '" and lang_meta_origin in (select lang_meta_origin FROM language_meta
                 where reference_id = ' . $id . ' and reference_type like "%Post%")'
                );

            $data = $data->first();
            return $data;
        }
        return [];
    }
}
