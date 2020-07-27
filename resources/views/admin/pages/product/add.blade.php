@extends('admin.layouts.master')

@section('title')
	KiddoStore - Thêm SP
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm mới sản phẩm</h6>
    </div>
	 <div class="row" style="margin: 5px">
        <div class="col-lg-12">
            <form role="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <fieldset class="form-group">
                    <label>Product - Name</label>
                    <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm">
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                    @endif
                </fieldset>
                <div class="form-group">
                    <label for="quantity">Số lượng</label>
                    <input type="number" name="quantity" min="1" value="1" class="form-control">
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('quantity') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Đơn giá</label>
                    <input type="text" name="price"  class="form-control" placeholder="Nhập giá bán">
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="promotional">Giá khuyến mãi</label>
                    <input type="text" name="promotional" value="0" class="form-control" placeholder="Nhập giá khuyến mãi nếu có">
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('promotional') }}</div>
                    @endif
                </div>
                 <div class="form-group">
                    <label for="image">Ảnh sản phẩm</label>
                    <input type="file" name="image" value="0" class="form-control">
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea name="desciption" id="demo" cols="5" rows="5" class="form-control"></textarea>
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('desciption') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Danh mục SP</label>
                    <select class="form-control cateProduct" name="idCategory">
                        @foreach($category as $cate)
                        <option value="{{ $cate ->id }}">{{ $cate ->name }}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <select class="form-control proTypeProduct" name="idProducType">
                        @foreach($producttype as $pro)
                        <option value="{{ $pro ->id }}">{{ $pro ->name }}</option>
                        @endforeach 
                    </select>
                </div>
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
