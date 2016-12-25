@push('css')
<link rel="stylesheet" href="{{ asset('plugins/backend/plugins/datatables/dataTables.bootstrap.css') }}">
 <link rel="stylesheet" href="{{ elixir('css/frontend/sweetalert.css') }}">
@endpush
@push('js-head')
    <script src="{{ elixir('js/frontend/sweetalert.js') }}"></script>
@endpush
@extends('admin.layout.master')
@section('content')
 @if (session('statusCreateStock')=='success' || session('statusUpdateStock')=='success' || session('statusDeleteDelete')=='success')
  <script type="text/javascript">
  swal({
    title: "Success!",
    text: "Action Success !",
    type: "success",
    timer:1000,
    confirmButtonText: "OK"
  });
  </script>
   @endif
   @if( count($errors) >0 )
   <script type="text/javascript">
  swal({
    title: "Whoops!",
    text: "Look like something went wrong !",
    type: "error",
    confirmButtonText: "OK"
  });
  @endif
  </script>
<div class="content-wrapper" style="min-height: 901px;">
   <div style="padding: 0px; background: white; z-index: 999999; font-size: 16px; font-weight: 600;">
   </div>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box-header">
               <h3 class="box-title">
                  Stock Management
                  <button class="btn btn-primary pull-primary" data-target="#addNewProduct" data-toggle="modal" style="margin-right: 5px;" type="button">
                  <i class="fa fa-plus">
                  </i>
                  Add new stock
                  </button>
               @include('admin._partials.modal.create_stock')
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
                           Product
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Qty
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Price
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
                     <?php $i=0?>
                     @foreach($stocks as $stock)
                     <tr class="{{($i%2==0)? 'odd': 'even'}}" role="row">
                        <td class="sorting_1">
                           {{++$i}}
                        </td>
                        <td>
                           {{ $stock->product->name }}
                        </td>
                        <td>
                           {{ $stock->qty }}
                        </td>
                         <td>
                           {{ $stock->import_price }}
                        </td>
                        <td>
                           <button class="btn btn-info pull-right" data-target="#editStockId{{ $stock->id }}" data-toggle="modal" style="margin-right: 5px;" type="button">
                           <i class="fa fa-pencil">
                           </i>
                           </button>
                            <button class="btn btn-danger pull-right" data-target="#deleteStockId{{ $stock->id }}" data-toggle="modal" style="margin-right: 5px;" type="button">
                           <i class="fa fa-trash">
                           </i>
                           </button>
                          @include('admin._partials.modal.edit_stock', ['stock' => $stock ])
                          @include('admin._partials.modal.delete_stock', ['stock' => $stock ])
                        </td>
                        <td>
                           {{$stock->created_at->diffForHumans()}}
                        </td>
                        <td>
                           {{$stock->updated_at->diffForHumans()}}
                        </td>
                     </tr>
                     @endforeach
                  <tfoot>
                     <tr>
                        <th colspan="1" rowspan="1">
                           No
                        </th>
                        <th colspan="1" rowspan="1">
                           Product Name
                        </th>
                         <th colspan="1" rowspan="1">
                           Qty
                        </th>
                           <th colspan="1" rowspan="1">
                           Price
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
