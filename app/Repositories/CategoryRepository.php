<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Exception;
use Illuminate\Database\QueryException;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function create($data = [])
    {

        try {
            $category = Category::create([
                'name' => $data['category-name'],
            ]);
            return $category;
        } catch (QueryException $e) {
            echo "Lỗi" + $e->getMessage();
        }
    }
    public function getAll()
    {
        try {
            $categories = Category::all();
            return $categories;
        } catch (QueryException $e) {
            echo "Lỗi" + $e->getMessage();
        }
    }
    public function findById($id)
    {
        try {
            $category = Category::where('id', $id)->first();
            return $category;
        } catch (Exception $e) {
            echo "Lỗi" + $e->getMessage();
        }
    }
    public function update($data = [])
    {
        try {
            $category = Category::find($data['id']); // hoặc findOrFail

            if ($category) {
                $updated = $category->update([
                    'name' => $data['category-name'],
                ]); // <- Gọi update trên instance
                return $updated;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function destroy($id){
        
        $deleted = Category::destroy($id);
        return $deleted;
    }
}
