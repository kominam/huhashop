@push('css')
<link rel="stylesheet" href="{{ asset('plugins/backend/plugins/datatables/dataTables.bootstrap.css') }}">
 <link rel="stylesheet" href="{{ elixir('css/frontend/sweetalert.css') }}">
@endpush
@push('js-head')
    <script src="{{ elixir('js/frontend/sweetalert.js') }}"></script>
@endpush
@extends('admin.layout.master')
@section('content')
<div class="content-wrapper" style="min-height: 901px;">
   <div style="padding: 0px; background: white; z-index: 999999; font-size: 16px; font-weight: 600;">
   </div>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box-header">
               <h3 class="box-title">
                  Category Management
                  <button class="btn btn-primary pull-primary" data-target="#addNewCategory" data-toggle="modal" style="margin-right: 5px;" type="button">
                  <i class="fa fa-plus">
                  </i>
                  Add new category
                  </button>
                  <!-- Modal New -->
                  <div aria-labelledby="myModalLabel" class="modal fade" id="addNewCategory" role="dialog" tabindex="-1">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                              <span aria-hidden="true">
                              ×
                              </span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">
                                 Edit
                              </h4>
                           </div>
                           <div class="modal-body">
                              <form role="form" action="{{route('admin.category.store')}}" method="POST">
                                 {!! csrf_field() !!}
                                 <div class="box-body">
                                    <div class="form-group">
                                       <label for="name">Category Name</label>
                                       <input type="text" class="form-control" id="name" name="name"
                                          placeholder="Nhập tên thể loại" value="{{ old('name' )}}">
                                    </div>
                                    <div class="box-footer">
                                       <button type="submit" class="btn btn-primary">Xác nhận</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="modal-footer">
                              <button class="btn btn-default" data-dismiss="modal" type="button">
                              Close
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table aria-describedby="example1_info" class="table table-bordered table-striped dataTable" id="example1" role="grid">
                  <thead>
                     <tr role="row">
                        <th aria-controls="example1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" class="sorting_asc" colspan="1" rowspan="1" style="width: 135px;" tabindex="0">
                           No
                        </th>
                        <th aria-controls="example1" aria-label="Browser: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 170px;" tabindex="0">
                           Name
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Tool
                        </th>
                        <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 115px;" tabindex="0">
                           Created At
                        </th>
                        <th aria-controls="example1" aria-label="CSS grade: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 81px;" tabindex="0">
                           Last Updated
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @php($i=0)
                     @foreach($categories as $category)
                     <tr class="{{($i%2==0)? 'odd': 'even'}}" role="row">
                        <td class="sorting_1">
                           {{++$i}}
                        </td>
                        <td>
                           {{ $category->name }}
                        </td>
                        <td>
                           <button class="btn btn-danger pull-right" data-target="#deleteCategoryId{{ $category->id }}" data-toggle="modal" style="margin-right: 5px;" type="button">
                           <i class="fa fa-trash">
                           </i>
                           Delete
                           </button>
                           <button class="btn btn-info pull-right" data-target="#editCategoryId{{ $category->id }}" data-toggle="modal" style="margin-right: 5px;" type="button">
                           <i class="fa fa-pencil">
                           </i>
                           Edit
                           </button>
                        </td>
                        <!-- Modal Update -->
                        <div aria-labelledby="myModalLabel" class="modal fade" id="editCategoryId{{ $category->id }}" role="dialog" tabindex="-1">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                    <span aria-hidden="true">
                                    ×
                                    </span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">
                                       Edit
                                    </h4>
                                 </div>
                                 <div class="modal-body">
                                    <form role="form" action="{{route('admin.category.update', $category->slug)}}" method="POST">
                                       {!! csrf_field() !!}
                                       <input name="_method" type="hidden" value="PUT">
                                       <div class="box-body">
                                          <div class="form-group">
                                             <label for="name">Category Name</label>
                                             <input type="text" class="form-control" id="name" name="name"
                                                placeholder=" Nhập tên thể loại" value="{{ $category->name}}">
                                          </div>
                                          <div class="box-footer">
                                             <button type="submit" class="btn btn-primary">Xác nhận</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" type="button">
                                    Close
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Modal Delete -->
                        <div aria-labelledby="myModalLabel" class="modal fade" id="deleteCategoryId{{ $category->id }}" role="dialog" tabindex="-1">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                    <span aria-hidden="true">
                                    ×
                                    </span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">
                                       Warning
                                    </h4>
                                 </div>
                                 <div class="modal-body">
                                    Are you sure to delete category {{ $category->name }}
                                 </div>
                                 <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" type="button">
                                    Close
                                    </button>
                                    <a class="btn btn-danger" href="{{route('admin.category.delete',['slug' => $category->slug])}}">
                                    Yes, I m sure
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <td>
                           {{$category->created_at->diffForHumans()}}
                        </td>
                        <td>
                           {{$category->updated_at->diffForHumans()}}
                        </td>
                     </tr>
                     @endforeach
                  <tfoot>
                     <tr>
                        <th colspan="1" rowspan="1">
                           No
                        </th>
                        <th colspan="1" rowspan="1">
                           Name
                        </th>
                        <th colspan="1" rowspan="1">
                           Tool
                        </th>
                        <th colspan="1" rowspan="1">
                           Create At
                        </th>
                        <th colspan="1" rowspan="1">
                           Last Updated
                        </th>
                     </tr>
                  </tfoot>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </section>
</div>


@stop
@section('after-script')
<script src="{{ asset('plugins/backend/plugins/datatables/jquery.dataTables.min.js') }}">
</script>
<script src="{{ asset('plugins/backend/plugins/datatables/dataTables.bootstrap.min.js') }}">
</script>
<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>
@stop
