@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Blog Category Page</h4> <hr>
                        <form id="myForm" action="{{route('store.blog.category')}}" method="post">
                            @csrf
                            {{-- <input type="hidden" name="id" value="{{$aboutslide->id}}" > --}}
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Blog Category Name</label>
                                <div class="form-group col-sm-10">
                                    <input class="form-control" type="text" placeholder="Blog category name" id="blog_category" name="blog_category">
                                   
                                </div>
                            </div>
                            <!-- end row -->

                           <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Blog Category">
                        </form>   
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#myForm').validate({
            rules:{
                // here blog_category is name="blog_category"
                blog_category:{
                    required: true,
                }
            },
            messages :{
                blog_category:{
                    required: 'Please Enter Blog Category',
                },
            },
            errorElement:'span',
            errorPlacement:function(error,element){
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight:function(element,errorClass,validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight:function(element,errorClass,validClass){
                $(element).removeClass('is-invalid');
            },
        })
    })  
</script>
@endsection