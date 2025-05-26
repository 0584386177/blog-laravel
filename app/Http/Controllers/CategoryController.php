<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Services\Interfaces\CategoryServiceInterface;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected  $categoryService;
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function show()
    {
        $template = 'admin.pages.categories.categories-list';
        $categories = $this->categoryService->getAll();
        return view('layouts.AdminLayout', compact('template', 'categories'));
    }
    public function add()
    {
        $template = 'admin.pages.categories.categories-add';
        return view('layouts.AdminLayout', compact('template'));
    }
    public function store(CategoryRequest $request)
    {

        try {
            $data = $request->except('_token');

            $category = $this->categoryService->create($data);
            if ($category) {

                flash()->success("Thêm danh mục thành công");
                return redirect()->route('admin.categories.show');
            }
        } catch (Exception $e) {
            flash()->error($e->getMessage());
        }
    }
    public function edit($id)
    {
        $category = $this->categoryService->findById($id);
        $template = 'admin.pages.categories.categories-edit';
        return view('layouts.AdminLayout', compact('template', 'category'));
    }
    public function update(CategoryRequest $request, $id)
    {
        try {
            $data = $request->except('_token');
            $data['id'] = $id;
            
            $updated = $this->categoryService->update($data);
            if ($updated) {
                flash()->success("Cập nhật danh mục thành công");
                return redirect()->route('admin.categories.show');
            }
        } catch (Exception $e) {
            flash()->error($e->getMessage());
        }
    }
    public function delete($id) {
        try {
            $deleted = $this->categoryService->destroy($id);
            if($deleted){
               flash()->success("Xóa danh mục thành công");
                return redirect()->route('admin.categories.show');
            }
            flash()->error('Xóa danh mục không thành công.');
            return back();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
