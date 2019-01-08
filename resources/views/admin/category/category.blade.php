@extends('layouts.masterad')
@section('adnoidung')


<div class="box-header">
  <h3 class="box-title">Danh sách danh mục</h3>
</div>
<!-- /.box-header -->
<button data-toggle="modal" data-target="#add" type="button" class="btn btn-sm btn-success">Thêm mới</button>
<div class="box-body">
  <table class="table table-bordered table-striped table-danger">
    <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>SLUG</th>
          <th>CREATE-AT</th>
          <th>UPDATE-AT</th>
          <th>ACTION</th>
      </tr>
  </thead>
  @foreach($cates as $cate)
  <tbody>
    <td>{{$cate->id}}</td>
    <td>{{$cate->name}}</td>
    <td>{{$cate->slug}}</td>
    <td>{{$cate->created_at}}</td>
    <td>{{$cate->updated_at}}</td>
    <td>
       
        <button data-toggle="modal" data-id="id_update" data-target="#edit" category_id="{{$cate->id}}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        <button data-id="{{$cate->id}}" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
    </td>

</tbody>
@endforeach
<tfoot>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SLUG</th>
        <th>CREATE-AT</th>
        <th>UPDATE-AT</th>
        <th>ACTION</th>
    </tr>
</tfoot>
</table>
{{$cates->links()}}
</div>

<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Category</h4>
            </div>
            <div class="modal-body">
                <form id="add" method="POST" role="form">
                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                    <h1>Thêm mới</h1>
                    
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tên" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            {{$errors->first('name')}}
                        </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

 
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Chỉnh sửa</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" id="update">

                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">

                    {{-- <input type="hidden" name="_method" value="put"> --}}
                    <h1>Chỉnh sửa</h1>
                    <input type="hidden" id="id_edit" name="id" class="form-control" value="">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="name12" placeholder="Nhập tên" name="name" value="">
                        @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            {{$errors->first('name')}}
                        </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
@stop
@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#add').submit(function(e){
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: "{{route('admin.storeCate')}}",
            data: {

                name: $('#name').val(),
                slug: $('#slug').val(),
                parent_id: $('#parent_id').val(),
                        // _token: $('#token').val()
                        _token: $('input[name="_token"]').val()
                    },

                    success: function(response){
                        toastr.success('Thêm mới thành công!')
                        setTimeout(function(){
                            window.location.href ="{{asset('')}}admin/category"
                        }, 800);
                    },
                    error: function(jqXHR, testStatus, errorThrown){
                        if (jqXHR.responseJSON.errors.name!==undefined) {

                            toastr.error(jqXHR.responseJSON.errors.name[0])
                        }
                        if (jqXHR.responseJSON.errors.slug!==undefined) {

                            toastr.error(jqXHR.responseJSON.errors.slug[0])
                        }
                        if (jqXHR.responseJSON.errors.parent_id!==undefined) {

                            toastr.error(jqXHR.responseJSON.errors.parent_id[0])
                        }
                    }
                })
    })

    $('.btn-danger').click(function(){
        var id=$(this).data('id');
     
        var _this=$(this);
        swal({
            title: "Bạn muốn xóa?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({    
                    type: 'delete',
                    url: "{{asset('')}}admin/category/"+id,
                    data:{

                    },
                    success: function(response){
                        _this.parent().parent().remove();
                    }
                })
                swal("Xóa thành công!", {
                    icon: "success",
                });
            } else {
                swal("Xóa không thành công!");
            }
        });
    });

    $('.btn-warning').click(function(){
        var id=$(this).attr('category_id');
        $.ajax({
            type: 'get',
            url: "{{asset('admin/category/edit')}}/"+id,
            success: function(response){
                console.log(response);
                $('#id_edit').val(response.id);
                $('#name12').val(response.name);
                $('#parent_id12').val(response.parent_id);
                
            }
            
        });
    });


        $('#update').submit(function(e){
        var id=$('#id_edit').val();
        var url="{{asset('admin/category')}}/"+id;
        // console.log(url);
        e.preventDefault();
        $.ajax({
            type:'post',
            url: url,
            data:{
                id: $('#id_edit').val(),
                name: $('#name12').val(),
                slug: $('#slug12').val(),
                parent_id: $('#parent_id12').val(),

                    // _token: $('#token').val()
                    _token: $('input[name="_token"]').val() },
                    success: function(response){
                        toastr.success('Update mới thành công!')
                        console.log(response);
                        setTimeout(function(){
                            window.location.href ="{{asset('')}}admin/category"
                        }, 800);
                    },

                    error: function(jqXHR, testStatus, errorThrown){
                        console.log(jqXHR.responseJSON.errors);
                        // $('#code').after('<p style="color: red;">'+jqXHR.responseJSON.errors.code[0]+'</p>')
                        
                        if (jqXHR.responseJSON.errors.name!==undefined) {

                            // toastr.error(jqXHR.responseJSON.errors.name[0])
                            $('#name12').after('<p style="color: red;">'+jqXHR.responseJSON.errors.name[0]+'</p>')
                        }
                        if (jqXHR.responseJSON.errors.slug!==undefined) {

                            // toastr.error(jqXHR.responseJSON.errors.slug[0])
                            $('#slug12').after('<p style="color: red;">'+jqXHR.responseJSON.errors.slug[0]+'</p>')
                        }
                        if (jqXHR.responseJSON.errors.parent_id!==undefined) {

                            // toastr.error(jqXHR.responseJSON.errors.parent_id[0])
                            $('#parent_id12').after('<p style="color: red;">'+jqXHR.responseJSON.errors.parent_id[0]+'</p>')
                        }
                    }
                });
    });

});



</script>
@stop