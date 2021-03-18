@extends('admin.master')
@section('content')




<div class="row">
        <div class="row">
        </div>
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#add_distribution_type">Thêm Mới
                    </button>
                </header>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    Tìm Thấy : <strong class="text-danger">  {{$product->total()}} Sản Phẩm</strong>
                </header>
                <br>
                <div id="" class="col-sm-4">
                    <form method="get" action="{{route('admin.search.product')}}">
                        <div class="input-group">
                            <input name="search" type="text" value="{{Request::get('search')}}" class="form-control" placeholder="{{__("Tìm Kiếm Sản Phẩm")}}">
                            <span class="input-group-btn">
                                    <button  class="btn btn-primary" type="submit"  >{{__("Tìm Kiếm")}}</button>
                                </span>
                        </div>
                    </form>
                </div>
                <br></br>
                <div class="panel-body">
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Mô Tả</th>
                                <th>Hình Ảnh</th>
                                <th>Tác Vụ</th>
                            </tr>
                            </thead>
                            <tbody>
                         @foreach($product as  $pro)
                                <tr >
                                    <td class="text-center" data-title="ID">
                                        <a class="btn btn-primary" href="">{{$pro->id}}</a>
                                    </td>
                                    <td data-title="Tên">{{$pro->name}}</td>
                                    <td data-title ="Giá">{{$pro->price}}</td>
                                    <td data-title="Mô Tả"></td>
                                    <td data-title="Hình Ảnh"></td>
                                    <td data-title="Tác Vụ">
                                        <a class="btn btn-primary" href="javascript:void(0)"  data-toggle="modal2" onclick="editproduct({{$pro->id}})" >Sửa</a>
                                        <a class="btn btn-danger" href="">Xóa</a>
                                    </td>
                                </tr>
                          @endforeach
                            </tbody>
                        </table>
                    
                    </section>
                </div>
            </section>
            

            <!-- Modal adđ product -->
           
                <div id="add_distribution_type" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">{{__('Thêm Mới Sản Phẩm')}}</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Sản Phẩm<span class="text-danger">(*)</span></label>
                                        <input type="text" name="name" value="" required="required"
                                               id="name" class="form-control"
                                               placeholder="Nhập tên ngành hàng để thêm mới">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mã<span class="text-danger">(*)</span></label>
                                        <input type="text" name="code" value="" required="required"
                                               id="code" class="form-control"
                                               placeholder="Nhập Mã">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mô Tả</label>
                                        <textarea type="text" name="description"
                                                  id="description" class="form-control"
                                                  placeholder="Nhập mô tả"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Trạng Thái<span class="text-danger">(*)</span></label>
                                        
                                    </div>
                                    <br><br><br>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary"
                                                id="btn_themmoi">{{__("Thêm Mới")}}</button>
                                        <button data-dismiss="modal" class="btn btn-danger"
                                                type="button">{{__("Hủy")}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
               


            <!-- Modal edit product -->
           
           <div id="editProduct" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">{{__('Thêm Mới Sản Phẩm')}}</h4>
                            </div>
                            <div class="modal-body">
                                <form id="editProductForm">
                            
                                    {{ csrf_field() }}
                                    <input type="hidden" id="id" name="name" />
                                    <div class="form-group">
                                        <label for="">Sản Phẩm<span class="text-danger">(*)</span></label>
                                        <input type="text" name="name" value="" required="required"
                                               id="name2" class="form-control"
                                               placeholder="Nhập tên ngành hàng để thêm mới">
                                    </div>
                
                                
                                    <br><br><br>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary"
                                                id="btn_themmoi">{{__("Thêm Mới")}}</button>
                                        <button data-dismiss="modal" class="btn btn-danger"
                                                type="button">{{__("Hủy")}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
               

        <script>
        function editproduct(id) {
            $.get('/product/'+id,function(product) {
                $("#id").val(product.id)
                $("#name2").val(product.name)
                $("#editProduct").modal('toggle');
            })
            
        }
        </script>
            
            
@endsection
