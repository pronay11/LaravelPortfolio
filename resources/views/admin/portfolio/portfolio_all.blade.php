@extends('admin.admin_master')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Multi Image Table</h4>
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
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 241px;" aria-label="Position: activate to sort column ascending">Portfolio Name</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113px;" aria-label="Office: activate to sort column ascending">Portfolio Title</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113px;" aria-label="Office: activate to sort column ascending">Portfolio Image</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 113px;" aria-label="Office: activate to sort column ascending">Action</th>

                             </thead>
                            <tbody> 
                                @php($i=1)
                                @foreach($portfolio as $item)                          
                              <tr>
                                 <td>{{$i++}}</td>
                                 <td>{{$item->portfolio_name}}</td>
                                 <td>{{$item->portfolio_title}}</td>
                                 <td><img src="{{asset($item->portfolio_image)}}"style="width:60px; height:50px" alt=""></td>
                                 <td>
                                    <a href="{{route('edit.portfolio',$item->id)}}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('delete.portfolio',$item->id)}}" class="btn btn-danger sm" id="delete" title="Delete Data"><i class="fas fa-trash-alt"></i></a>
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