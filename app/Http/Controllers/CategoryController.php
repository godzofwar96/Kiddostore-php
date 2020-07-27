<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\StoreCategoryRequest;
use Validator;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $category = Categories::paginate(5);
        if($user -> can('view',Categories::class)){
            
            return view('admin.pages.category.list',compact("category"));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->can('create',Categories::class))
        {
            return view('admin.pages.category.add');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {   
        $user = Auth::user();
        if($user->can('create',Categories::class)){
            Categories::create([
                'name' => $request->name,
                'slug' => utf8tourl($request ->name),
                'status' =>$request->status
            ]);
            return redirect()->route('category.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = Auth::user();
        if($user->can('update',Categories::class)){
            $category = Categories::find($id);
            return response() ->json($category,200);
        }
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if($user->can('update',Categories::class)){
            $validator = Validator::make($request->all(),
                [
                    'name' => 'required|min:2|max:255'
                ],
                [
                    'required' => 'Tên Category không được để trống',
                    'min' => 'Tên Category phải từ 2->255 kí tự',
                    'max' => 'Tên Category phải từ 2->255 kí tự',
                ]
            );
            if($validator->fails()){
                return response()->json(['error' =>'true', 'message' =>$validator->errors()],200);
            }
            $category = Categories::find($id);
            $category ->update(
            [
                'name' => $request->name,
                'slug' => utf8tourl($request ->name),
                'status' =>$request->status
            ]);
            return response()->json(['success'=>'Chỉnh sửa thành công']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $user = Auth::user();
        if($user->can('delete',Categories::class)){
            $category = Categories::find($id);
            $category->delete();
            return response()->json(['success'=>'Xóa thành công']);
        }
    }
}
