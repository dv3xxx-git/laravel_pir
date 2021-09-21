<?php
namespace App\Repositories;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Repositories\CoreRepository;
use Illuminate\Database\Eloquent\Model;

class BlogPostRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return BlogPost::class;
    }

    public function getAllWithPaginate()
    {
        $fields = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id',
        ];

        $result = $this->startConditions()
            ->select($fields)
            ->orderBy('id','DESC')
            ->with('category:id,title','user:id,name')
            ->paginate(25);
        return $result;
    }
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }
}
