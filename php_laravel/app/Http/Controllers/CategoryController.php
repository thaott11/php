<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // lấy thư mục categories trong view
     const PATH_VIEW = 'categories.';

    //  đổ dữ liệu ra view
     public function index()
     {
         $data = Category::latest()->paginate(perPage:5);
        //  lấy dữ liệu dưới dạng array
        // dd($data -> toArray());
         return view(self::PATH_VIEW . 'index', compact('data'));
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: self::PATH_VIEW. __FUNCTION__);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::query()->create($request->all());

        // redirect ra index và hiển thị thông báo
        return redirect()->route('categories.index')->with('msg','thao tác thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view(self::PATH_VIEW.__FUNCTION__ , compact('category'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view(self::PATH_VIEW. __FUNCTION__, compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return back()->with('msg','thao tác thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('msg','thao tác thành công');

    }
}
