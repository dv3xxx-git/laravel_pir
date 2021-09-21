<?php

namespace App\Observers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Carbon\Carbon;

class BlogCategoryObserver
{
    /**
     * Handle the ModelsBlogCategory "created" event.
     *
     * @param  \App\Models\BlogCategory $modelsBlogCategory
     * @return void
     */
    public function created(BlogCategory $modelsBlogCategory)
    {
        //
    }

    public function creating(BlogCategory $modelsBlogCategory)
    {
        $this->setSlug($modelsBlogCategory);


    }


    private function setSlug($modelsBlogCategory)
    {
        if(empty($modelsBlogCategory->slug)){
            $modelsBlogCategory->slug = str_slug($modelsBlogCategory->title);
        }
    }
    /**
     * Handle the ModelsBlogCategory "updated" event.
     *
     * @param  \App\Models\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function updated(BlogCategory $modelsBlogCategory)
    {
        //
    }

        /**
     * Handle the ModelsBlogCategory "updating" event.
     *
     * @param  \App\Models\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */

    /**
     * Handle the ModelsBlogCategory "deleted" event.
     *
     * @param  \App\Models\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function deleted(BlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the ModelsBlogCategory "restored" event.
     *
     * @param  \App\Models\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function restored(BlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the ModelsBlogCategory "force deleted" event.
     *
     * @param  \App\Models\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function forceDeleted(BlogCategory $modelsBlogCategory)
    {
        //
    }
}
