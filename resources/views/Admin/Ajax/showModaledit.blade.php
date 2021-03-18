<div id="edit_modal_{{$product->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{__('Sửa Ngành Hàng')}}</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <div class="form-group">
                        <label for="">Ngành Hàng<span class="text-danger">(*)</span></label>
                        <input type="text" name="name" value="{{$product->name}}" required="required"
                               id="name" class="form-control"
                               placeholder="Nhập tên loại hình phân phối để thêm mới">
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        <textarea type="text" name="description"
                               id="description" class="form-control"
                                  placeholder="Nhập mô tả">{{$product->description}}</textarea>
                    </div>
                
                    <br><br><br>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary"
                                id="btn_themmoi">{{__("Xác Nhận")}}</button>
                        <button data-dismiss="modal" class="btn btn-danger"
                                type="button">{{__("Hủy")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
