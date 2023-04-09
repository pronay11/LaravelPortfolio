@extends('admin.admin_master')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Blogs All Data</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                            <thead>
                              <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 158px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">SI</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 241px;" aria-label="Position: activate to sort column ascending">Blog Category</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113px;" aria-label="Office: activate to sort column ascending">Blog Title</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113px;" aria-label="Office: activate to sort column ascending">Blog Tags</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113px;" aria-label="Office: activate to sort column ascending">Blog Images</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113px;" aria-label="Office: activate to sort column ascending">Action</th>

                             </thead>
                            <tbody> 
                                {{-- @php
                                dd($blogs);
                                @endphp --}}
                                @php($i=1)
                                
                                @foreach($blogs as $item)                          
                              <tr>
                                 <td>{{$i++}}</td>
                                 <td> {{ $item->blog_category_id }} </td>
                                 {{-- <td> {{ $item['category']['blog_category'] }} </td> --}}
                                 <td>{{$item->blog_title}}</td>
                                 <td>{{$item->blog_tags}}</td>
                                 <td><img src="{{asset($item->blog_image)}}"style="width:60px; height:50px" alt=""></td>
                                 <td>
                                    <a href="{{route('edit.blog',$item->id)}}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('delete.blog',$item->id)}}" class="btn btn-danger sm" id="delete" title="Delete Data"><i class="fas fa-trash-alt"></i></a>
                                 </td> 

                              </tr>
                              @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        
    </div> <!-- container-fluid -->
</div>
                          
@endsection