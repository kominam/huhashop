@push('css')
<link rel="stylesheet" href="{{ asset('plugins/backend/plugins/datatables/dataTables.bootstrap.css') }}">
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
                  Order Management
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
                           Customer Name
                        </th>
                         <th aria-controls="example1" aria-label="Browser: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 170px;" tabindex="0">
                           Order ID
                        </th>
                         <th aria-controls="example1" aria-label="Browser: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 170px;" tabindex="0">
                           Total
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Detail
                        </th>
                        <th aria-controls="example1" aria-label="Engine version: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 115px;" tabindex="0">
                           Transactioned At
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @php($i=0)
                     @foreach($orders as $order)
                     <tr class="{{($i%2==0)? 'odd': 'even'}}" role="row">
                        <td class="sorting_1">
                           {{++$i}}
                        </td>
                        <td>
                           {{ $order->user->name }}
                        </td>
                         <td>
                           {{ $order->id }}
                        </td>
                        <td>
                           {{ $order->total }}
                        </td>
                        <td>
                           <a href="{{ route('admin.order.show', $order->id) }}" class="btn btn-info pull-right" style="margin-right: 5px;">
                           <i class="fa fa-trash">
                           </i>
                           Detail
                           </a>
                        </td>
                        <td>
                           {{$order->created_at->diffForHumans()}}
                        </td>
                     </tr>
                     @endforeach
                  <tfoot>
                     <tr>
                        <th colspan="1" rowspan="1">
                           No
                        </th>
                        <th colspan="1" rowspan="1">
                           Customer Name
                        </th>
                        <th colspan="1" rowspan="1">
                           Order ID
                        </th>
                         <th colspan="1" rowspan="1">
                           Total
                        </th>
                        <th colspan="1" rowspan="1">
                           Trasnactionad At
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
