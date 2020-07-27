@extends('admin.layouts.master')

@section('title')
	KiddoStore - Sản phẩm
@endsection

@section('content')
	<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"> Danh sách sản phẩm</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>STT</th>
						<th>Name</th>
						<th>Mô tả</th>
                        <th>Hình ảnh</th>
						<th>Thông tin</th>
						<th>Danh mục sản phẩm</th>
						<th>Loại sản phẩm</th>
						<th>Status</th>
						<th>Edit</th>
				</thead>
				<!-- <tfoot>
					<tr>
						<th>STT</th>
						<th>Name</th>
						<th>Slug-name</th>
						<th>Status</th>
						<th>Edit</th>
					</tr>
				</tfoot> -->
				<tbody>
					@foreach($product as $key => $value)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $value->name }}</td>
							<td>{!! $value->desciption !!}</td>
                            <td><img src="img/upload/product/{{ $value->image }}" width="100" height="100" ></td>
							<td>
								<b>Số lượng:</b> {{ $value->quantity }}
								<br/>
								<b>Đơn giá:</b> {{ $value->price }}
                                <br/>
                                <b>Khuyến mại:</b> {{ $value->promotional }}
							</td>
							<td>{{ $value->categories->name }}</td>
							<td>{{ $value->productTypes->name }}</td>
							<td>
                                @if($value -> status == 1)
                                    {{ "Hiển thị" }}
                                @else
                                    {{ "Không hiển thị" }}
                                @endif
                            </td>
							<td>
								<button class="btn btn-primary editProduct" data-toggle="modal" data-target="#edit" type="button" data-id="{{ $value ->id }}" title="{{ "Sửa ".$value ->name }}" ><i class="fas fa-edit"></i> </button>
								<button class="btn btn-danger deleteProduct" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value ->id }}" title="{{ "Xóa ".$value ->name }}"><i class="fas fa-trash-alt"></i> 
								</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="pull-right">{{ $product->links() }}</div>
		</div>
	</div>
</div>
  <!-- Edit Modal-->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa Loại sản phẩm: <span class='title'></span></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row" style="margin: 5px">
						<div class="col-lg-12">
							<form role="form" id='updateProduct' method="POST" enctype="multipart/form-data">
				                <fieldset class="form-group">
				                    <label>Product - Name</label>
				                    <input class="form-control name" name="name" placeholder="Nhập tên loại sản phẩm">
				                    <div class="alert alert-danger errorName" ></div>
				                </fieldset>
				                <div class="form-group">
				                    <label for="quantity">Số lượng</label>
				                    <input type="number" name="quantity" min="1" value="1" class="form-control quantity">
				                    <div class="alert alert-danger errorQuantity" ></div>
				                </div>
				                <div class="form-group">
				                    <label for="price">Đơn giá</label>
				                    <input type="text" name="price"  class="form-control price" placeholder="Nhập giá bán">
				                     <div class="alert alert-danger errorPrice" ></div>
				                </div>
				                <div class="form-group">
				                    <label for="promotional">Giá khuyến mãi</label>
				                    <input type="text" name="promotional" value="0" class="form-control promotional" placeholder="Nhập giá khuyến mãi nếu có">
				                     <div class="alert alert-danger errorPromotional" ></div>
				                </div>
				                <img  class="img img-thumbnail imageThum" width="100" height="100" lign="center">
				                 <div class="form-group">
				                    <label for="image">Ảnh sản phẩm</label>
				                    <input type="file" name="image" value="0" class="form-control image">
				                    <div class="alert alert-danger errorImage" ></div>
				                </div>
				                <div class="form-group">
				                    <label>Mô tả sản phẩm</label>
				                    <textarea name="desciption" id="demo" cols="5" rows="5" class="form-control desciption"></textarea>
				                     <div class="alert alert-danger errorDesciption" ></div>
				                </div>
				                <div class="form-group">
				                    <label>Danh mục SP</label>
				                    <select class="form-control cateProduct" name="idCategory"></select>
				                </div>
				                <div class="form-group">
				                    <label>Loại sản phẩm</label>
				                    <select class="form-control proTypeProduct" name="idProducType"></select>
				                </div>
				                <div class="form-group">
				                    <label>Status</label>
				                    <select class="form-control status" name="status">
				                        <option value="1" class="ht">Hiển thị</option>
				                        <option value="0" class="kht">Không hiển thị</option>
				                    </select>
				                </div>
				                <input type="submit" value="Save" class="btn btn-success">
								<button type="reset" class="btn btn-primary reset">Làm Lại</button>
								<button class="btn btn-secondary " type="button" data-dismiss="modal">Cancel</button>
				            </form>
						</div>
					</div>  
				</div>
			</div>
		</div>
	</div>
   <!-- delete Modal-->
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body" style="margin-left: 183px;">
					<button type="button" class="btn btn-success delProduct">Có</button>
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
				</div>
			</div>
		</div>
	</div>
@endsection