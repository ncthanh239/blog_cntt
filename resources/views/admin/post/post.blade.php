@extends('layouts.masterad')
@section('adnoidung')


<div class="box-header">
  <h3 class="box-title" style="">DANH SÁCH BÀI VIẾT</h3>
</div>
<!-- /.box-header -->
<button data-toggle="modal" type="button" class="btn btn-sm btn-success" id="add_btn" data-target="#modaladd" style="margin-bottom: 20px; margin-left: 20px;">Thêm mới</button>

<div class="box-body">
  <table id="posts-table" class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>ID</th>
          <th>TITLE</th>
          <th>DESCRIPTION</th>
          <th>ACTION</th>
      </tr>
  </thead>

</table>

</div>


<div class="modal fade" id="modaladd" >
    <div class="modal-lg-12">
        <div class="modal-dialog" style="width: 60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">POST</h4>
                </div>
                <div class="modal-body">
                    <form id="add" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <h1 style="text-align: center;">Thêm mới</h1>
                        <div class="row">

                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <label for="">Title (<span style="color: red;">*</span>)</label>
                                    <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề" name="title" value="{{old('title')}}" cols="30">

                                    @if ($errors->has('title'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('title')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Description (<span style="color: red;">*</span>)</label>
                                    <input type="text" class="form-control" id="description" placeholder="Nhập tóm tắt" name="description" value="{{old('description')}}">
                                    @if ($errors->has('description'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('description')}}
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Content (<span style="color: red;">*</span>)</label>

                                    <textarea name="editor1" id="editor1" rows="10" cols="30" name="content"></textarea>
                                    @if ($errors->has('content'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('content')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Category (<span style="color: red;">*</span>)</label>
                                    <select class="form-control" name="category_id" id="category_id">

                                    @if(count($cates)>0)
                                    @foreach($cates as $cate)
                                    
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>



                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Add</button>
                    

                </form>
            </div>

        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal_uploada">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">POST</h4>
            </div>
            <div class="modal-body main-section" style=" margin:0 auto;padding: 20px; background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1; ">
              <h1 style="text-align: center;">Upload IMG</h1>

            {!! csrf_field() !!}
            
            <div class="form-group">
               <label for="">Choose Image (<span style="color: red;">*</span>)</label>
               <div class="file-loading">
                <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
            </div>
        </div>


    </div>
    <div class="modal-footer">

        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
    </div>
</div>



@stop
@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<script>
        $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });




        $('#posts-table').DataTable({
            "order": [[3,"desc" ]],
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.listposts') !!}',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action' }
            ]
        });
    });

         $(document).on('submit','#add', function(e){
            e.preventDefault();
            var content = CKEDITOR.instances['editor1'].getData();
            var formData = new FormData();
            formData.append('title',$('#title').val());
            formData.append('content',content);
            formData.append('description',$('#description').val());
            formData.append('category_id',$('#category_id').val());



            $.ajax({
                type:'post',
                url:'{!! route('admin.storePost') !!}',
                dataType:'json',
                data:formData,
                async:false,
                processData: false,
                contentType: false,
                success:function(response){
                    $('#modaladd').modal('hide');
                    toastr.success('Thêm mới thành công!')
                    $('#posts-table').DataTable().ajax.reload(null, false);
                },
                // error: function(jqXHR, testStatus, errorThrown){
                //         if (jqXHR.responseJSON.errors.title!==undefined) {

                //             toastr.error(jqXHR.responseJSON.errors.title[0])
                //         }
                //         if (jqXHR.responseJSON.errors.description!==undefined) {

                //             toastr.error(jqXHR.responseJSON.errors.description[0])
                //         }
                //         if (jqXHR.responseJSON.errors.content!==undefined) {

                //             toastr.error(jqXHR.responseJSON.errors.content[0])
                //         }
                //     }

            });
        });


    $(document).on('click','.btn-danger', function(){
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
                    url:'http://uneti.dev.blog:8080/admin/post/' +id,
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

    $(document).on('click', '.btn-uploada', function(e){
       e.preventDefault();
       var id = $(this).attr('data-id');
       $('#file-1').attr('data-id', id);
       $('#modal_uploada').modal('show');


   });

    $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: "/upload",
        uploadExtraData: function() {
          var id= $('#file-1').data('id');
              // alert(id);
              return {
                 post_id: id,
                 _token: $("input[name='_token']").val(),
             };
         },
         allowedFileExtensions: ['jpg', 'png', 'gif'],
         overwriteInitial: false,
         maxFileSize:2000,
         maxFilesNum: 10,
         slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });

  
    




</script>  
@endsection