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
                  Deail for Order {{ $order->id}}
                  Total: VND {{ $order->total }}
                  
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
                           Product Name
                        </th>
                         <th aria-controls="example1" aria-label="Browser: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 170px;" tabindex="0">
                           Quantity
                        </th>
                         <th aria-controls="example1" aria-label="Browser: activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 170px;" tabindex="0">
                           Price
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @php($i=0)
                     @foreach($order->products as $product)
                     <tr class="{{($i%2==0)? 'odd': 'even'}}" role="row">
                        <td class="sorting_1">
                           {{++$i}}
                        </td>
                        <td>
                          {{$product->name}}
                        </td>
                         <td>
                           {{$product->pivot->quantity}}
                        </td>
                        <td>
                           VND {{$product->getCurrentPrice()}}
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
                           Quantity 
                        </th>
                         <th colspan="1" rowspan="1">
                           Price
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
