<?php

namespace App\Observers;

use App\Models\BlogPost;
use Carbon\Carbon;

class BlogPostObserver
{
    /**
     * Handle the ModelsBlogPost "created" event.
     *
     * @param  \App\Models\BlogPost  $modelsBlogPost
     * @return void
     */
    public function created(BlogPost $modelsBlogPost)
    {
        //
    }

    public function creating(BlogPost $modelsBlogPost)
    {
        $this->setPublishedAt($modelsBlogPost);
        $this->setSlug($modelsBlogPost);
        $this->setHtml($modelsBlogPost);
        $this->setUser($modelsBlogPost);
    }

    /**
     * Handle the ModelsBlogPost "updated" event.
     *
     * @param  \App\Models\BlogPost  $modelsBlogPost
     * @return void
     */
    public function updated(BlogPost $modelsBlogPost)
    {
        //
    }

    /**
     * Handle the ModelsBlogPost "deleted" event.
     *
     * @param  \App\Models\BlogPost  $modelsBlogPost
     * @return void
     */
    public function deleted(BlogPost $modelsBlogPost)
    {
        //
    }

    /**
     * Handle the ModelsBlogPost "restored" event.
     *
     * @param  \App\Models\BlogPost  $modelsBlogPost
     * @return void
     */
    public function restored(BlogPost $modelsBlogPost)
    {
        //
    }

    /**
     * Handle the ModelsBlogPost "force deleted" event.
     *
     * @param  \App\Models\BlogPost  $modelsBlogPost
     * @return void
     */
    public function forceDeleted(BlogPost $modelsBlogPost)
    {
        //
    }

    public function updating(BlogPost $modelsBlogPost)
    {
        $this->setPublishedAt($modelsBlogPost);
        $this->setSlug($modelsBlogPost);
    }

    public function setPublishedAt(BlogPost $modelsBlogPost)
    {
        if(empty($modelsBlogPost->published_at) && $modelsBlogPost->is_published){
            $modelsBlogPost->published_at = Carbon::now();
        }
    }

    public function setSlug(BlogPost $modelsBlogPost)
    {
        if(empty($modelsBlogPost->slug)){
            $modelsBlogPost->slug = \Str::slug($modelsBlogPost->slug);
        }
    }

    public function setHtml(BlogPost $modelsBlogPost)
    {
        if($modelsBlogPost->isDirty('content_raw'))
        {
            $modelsBlogPost->content_html = $modelsBlogPost->content_raw;
        }
    }

    public function setUser(BlogPost $modelsBlogPost)
    {
        $modelsBlogPost->user_id = auth()->id() ?? BlogPost::UNKNOWN_USER;
    }
}
