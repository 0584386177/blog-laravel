<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Services\Interfaces\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface
{

    protected $categoryRepo;
    public function __construct(CategoryRepositoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }
    public function create($data = [])
    {
        return $this->categoryRepo->create($data);
    }
    public function getAll()
    {
        return $this->categoryRepo->getAll();
    }
    public function findById($id)
    {
        $category =  $this->categoryRepo->findById($id);
        if (!$category) {
            abort(404, 'Category không được tìm thấy');
        }
        return $category;
    }
    public function update($data = []) {
        return $this->categoryRepo->update($data);
    }
    public function destroy($id) {
        return $this->categoryRepo->destroy($id);
    }
}
