<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class CategoryRepository
{
    private $key;

    public function __construct()
    {
        $this->key = "category.all";
    }

    public function get()
    {
        return Category::orderBy('name', 'asc')->get();
    }

    public function create($data)
    {
        return Category::create($data);
    }

    public function update($data, $id){


        return null;
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function delete($id)
    {
        $eat=$this->find($id);

        if(!$eat)
            return null;
            
        return $eat->delete();
    }
}
