@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Blog Category Edit Page</h4>
                        <form action="{{route('update.blog.category',$blogcategory->id)}}" method="post" >
                            @csrf
                            {{-- <input type="hidden" name="id" value="{{$blogcategory->id}}" > --}}
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Blog Category Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Blog Category" value="{{$blogcategory->blog_category}}" id="blog_category" name="blog_category">
                                    @error('blog_category')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
  
                           <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Blog Category Data">
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

@endsection