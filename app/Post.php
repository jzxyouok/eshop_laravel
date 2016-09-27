<?php

namespace Eshop;

use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel {
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array('url', 'title', 'description','content','blog','created_at_ip', 'updated_at_ip');

    public static function prevBlogPostUrl($id) {
        $blog = static::where('id', '<', $id)->orderBy('id', 'desc')->first();

        return $blog ? $blog->url : '#';
    }

    public static function nextBlogPostUrl($id) {
        $blog = static::where('id', '>', $id)->orderBy('id', 'asc')->first();

        return $blog ? $blog->url : '#';
    }

    public function tags() {
        return $this->belongsToMany('Eshop\BlogTag','blog_post_tags','post_id','tag_id');
    }
}