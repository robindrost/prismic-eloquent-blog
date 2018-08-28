<?php

namespace App;

use RobinDrost\PrismicEloquent\Model;

class BlogPost extends Model
{
    protected function relatedBlogPosts()
    {
        $this->hasMany(BlogPost::class, 'related_blog_posts', 'blog_post');
    }
}
