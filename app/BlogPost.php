<?php

namespace App;

use RobinDrost\PrismicEloquent\Model;

class BlogPost extends Model
{
    protected function relatedBlogPostsResolver()
    {
        $this->getDocumentResolver()->resolveManyEagerLoaded($this->related_blog_posts);
    }
}
