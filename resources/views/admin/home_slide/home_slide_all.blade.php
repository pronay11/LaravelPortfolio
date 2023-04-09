@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home Slide Page</h4>
                        <form action="{{route('update.slider')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$homeslide->id}}" >
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="title" id="title" value="{{$homeslide->title}}" name="title">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Email" id="short_title" value="{{$homeslide->short_title}}" name="short_title">
                                </div>
                            </div>
                            <!-- end row -->

                            

                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Video Link</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="vedio_url" name="vedio_url" value="{{$homeslide->vedio_url}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Home Slide</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" placeholder="Image" id="home_slide" value="{{$homeslide->home_slide}}" name="home_slide">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" src="{{(!empty($homeslide->home_slide))? url($homeslide->home_slide):url('upload/no_image.jpg')}}" alt="avatar-4" class="rounded avatar-md">
                                </div>
                            </div>
                            <!-- end row -->
                           <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
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