@extends('admin.layouts.master')

@section('title')
	KiddoStore - Thêm danh mục SP
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm mới Danh mục sản phẩm</h6>
    </div>
	 <div class="row" style="margin: 5px">
        <div class="col-lg-12">
            <form role="form" action="{{ route('category.store') }}" method="POST">
            	@csrf
                <fieldset class="form-group">
                    <label>Tên danh mục</label>
                    <input class="form-control" name="name" placeholder="Nhập tên category">
                </fieldset>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1">Hiển thị</option>
                        <option value="0">Không hiển thị</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Thêm</button>
                <button type="reset" class="btn btn-primary">Đặt lại</button>
            </form>
        </div>
    </div>  
    </div>            
@endsection
