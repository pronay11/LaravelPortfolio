@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Blog Page</h4>
                        <form action="{{route('store.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" name="id" value="{{$aboutslide->id}}" > --}}
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Blog Category Name</label>
                                <div class="col-sm-10">

                                    <select class="form-select" name="blog_category_id" aria-label="Default select example">
                                        @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->blog_category}}</option>
                                        @endforeach
                                    </select>

                                    @error('portfolio_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Blog Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Blog title" id="blog_title" name="blog_title">
                                    @error('blog_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Blog Tags</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="home,tech"  id="blog_tags" name="blog_tags" data-role="tagsinput">
                                </div>
                            </div>
                            <!-- end row -->
                        
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Portfolio Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="blog_description">

                                    </textarea>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Portfolio Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" placeholder="Image" id="image" name="blog_image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" src="{{(url('upload/no_image.jpg'))}}" alt="avatar-4" class="rounded avatar-md">
                                </div>
                            </div>
                            <!-- end row -->
                           <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Blog Data">
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