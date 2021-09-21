<?php
namespace App\Repositories;

use App\Models\BlogCategory;
use App\Repositories\CoreRepository;
use Illuminate\Database\Eloquent\Model;

class BlogCategoryRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return BlogCategory::class;
    }

    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    public function getForComboBox()
    {
        $fields = implode(', ',[
            'id',
            'CONCAT (id,". ",title) AS id_title',
        ]);

        $result = $this->startConditions()
        ->selectRaw($fields)
        ->toBase()
        ->get();

        return $result;
    }

    public function getAllWithPaginate($per_page = null)
    {
        $fields = ['id','title','parent_id'];

        $result = $this->startConditions()->select($fields)->paginate($per_page);
        return $result;
    }
}
