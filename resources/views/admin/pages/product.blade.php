@push('css')
<link rel="stylesheet" href="{{ asset('plugins/backend/plugins/datatables/dataTables.bootstrap.css') }}">
 <link rel="stylesheet" href="{{ elixir('css/frontend/sweetalert.css') }}">
@endpush
@push('js-head')
    <script src="{{ elixir('js/frontend/sweetalert.js') }}"></script>
@endpush
@extends('admin.layout.master')
@section('content')
 @if (session('statusCreateProduct')=='success' || session('statusUpdateProduct')=='success' || session('statusDeleteProduct')=='success')
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
                  Product Management
                  <button class="btn btn-primary pull-primary" data-target="#addNewProduct" data-toggle="modal" style="margin-right: 5px;" type="button">
                  <i class="fa fa-plus">
                  </i>
                  Add new prdouct
                  </button>
                  <!-- Modal New -->
                  <div aria-labelledby="myModalLabel" class="modal fade" id="addNewProduct" role="dialog" tabindex="-1">
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
                              <form role="form" action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                                 {!! csrf_field() !!}
                                 <div class="box-body">
                                    <div class="form-group">
                                       <label for="name">Product Name</label>
                                       <input type="text" class="form-control" id="name" name="name"
                                          placeholder="Name of product" value="{{ old('name' )}}">
                                    </div>
                                      <div class="form-group">
                 <label for="category_id">Category</label>
                 <select name="category_id">
                 @foreach ($all_categories as $category)
                    <option value="{{ $category->id}}">{{$category->name}}</option>
                 @endforeach
                    
                 </select>
                </div>
                                     <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" id="description" rows="8"></textarea>
                </div>
                                     <div class="form-group">
                                       <label for="unit">Unit</label>
                                       <input type="text" class="form-control" id="unit" name="unit"
                                          placeholder="Enter Unit" value="{{ old('name' )}}">
                                    </div>
                                    <div class="form-group">
                                       <label for="price">Price</label>
                                       <input type="number" class="form-control" id="price" name="price"
                                          placeholder="Enter Unit" value="{{ old('proce' )}}">
                                    </div>
                                    <div class="form-group">
                  <div class="radio">
                    <label>
                      <input name="is_hot" id="" value="0" checked="" type="radio">
                      No Hot
                    </label>
                  </div>
                  <div class="radio">
                   <label>
                      <input name="is_hot" id="" value="1"  type="radio">
                      Hot
                    </label>
                  </div>
                </div>
                        <div class="form-group">
                  <div class="radio">
                    <label>
                      <input name="is_new" id="" value="0" checked="" type="radio">
                      No New
                    </label>
                  </div>
                  <div class="radio">
                   <label>
                      <input name="is_new" id="" value="1" type="radio">
                      New
                    </label>
                  </div>
                </div>
              
               
                                    <div class="form-group">
                                       <label for="image">Image</label>
                                       <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="box-footer">
                                       <button type="submit" class="btn btn-primary">Submit</button>
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
                           Img
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Name
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Category
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Price
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Unit
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Hot
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           New
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Sale
                        </th>
                        <th aria-controls="example1" aria-label="Task : activate to sort column ascending" class="sorting" colspan="1" rowspan="1" style="width: 148px;" tabindex="0">
                           Description
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
                     @foreach($products as $product)
                     <tr class="{{($i%2==0)? 'odd': 'even'}}" role="row">
                        <td class="sorting_1">
                           {{++$i}}
                        </td>
                        <td>
                           <img src="{{ asset($product->url_image) }}" width="100px" height="100px">
                        </td>
                        <td>
                           {{ $product->name }}
                        </td>
                         <td>
                           {{ $product->category->name }}
                        </td>
                         <td>
                           {{ $product->price }}
                        </td>
                         <td>
                           {{ $product->unit }}
                        </td>
                         <td>
                           {{ ($product->is_hot) ? 'Hot' : 'No' }}
                        </td>
                         <td>
                           {{ ($product->is_new) ? 'New' : 'No' }}
                        </td>
                          <td>
                           {{ $product->isAloneSaleNow() ? 'Sale' :'No Sale'   }}
                        </td>
                         <td>
                           {{ str_limit($product->description, $limit = 100, $end = "...") }}
                        </td>
                       
                        <td>
                           <button class="btn btn-danger pull-right" data-target="#deleteProductId{{ $product->id }}" data-toggle="modal" style="margin-right: 5px;" type="button">
                           <i class="fa fa-trash">
                           </i>
                           Delete
                           </button>
                           <button class="btn btn-info pull-right" data-target="#editProductId{{ $product->id }}" data-toggle="modal" style="margin-right: 5px;" type="button">
                           <i class="fa fa-pencil">
                           </i>
                           Edit
                           </button>
                        </td>
                        <!-- Modal Update -->
                        <div aria-labelledby="myModalLabel" class="modal fade" id="editProductId{{ $product->id }}" role="dialog" tabindex="-1">
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
                                   <form role="form" action="{{route('admin.product.update',$product->slug)}}" method="POST" enctype="multipart/form-data">
                                    <input name="_method" type="hidden" value="PUT">
                                 {!! csrf_field() !!}
                                 <div class="box-body">
                                    <div class="form-group">
                                       <label for="name">Product Name</label>
                                       <input type="text" class="form-control" id="name" name="name"
                                          placeholder="Name of product" value="{{ $product->name}}">
                                    </div>
                                      <div class="form-group">
                 <label for="category_id">Category</label>
                 <select name="category_id">
                 @foreach ($all_categories as $category)
                    <option value="{{ $category->id}}" {{ ($product->category->id==$category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                 @endforeach
                    
                 </select>
                </div>
                                     <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" id="description" rows="8">{{ $product->description}}</textarea>
                </div>
                                     <div class="form-group">
                                       <label for="unit">Unit</label>
                                       <input type="text" class="form-control" id="unit" name="unit"
                                          placeholder="Enter Unit" value="{{ $product->unit }}">
                                    </div>
                                    <div class="form-group">
                                       <label for="price">Price</label>
                                       <input type="number" class="form-control" id="price" name="price"
                                          placeholder="Enter Unit" value="{{ $product->price }}">
                                    </div>
                                    <div class="form-group">
                  <div class="radio">
                    <label>
                      <input name="is_hot" id="" value="1" {{ ($product->is_hot) ? 'checked' : ''}} type="radio">
                       Hot
                    </label>
                  </div>
                  <div class="radio">
                   <label>
                      <input name="is_hot" id="" value="0" {{ (!$product->is_hot) ?'checked' : ''}} type="radio">
                      No Hot
                    </label>
                  </div>
                </div>
                        <div class="form-group">
                  <div class="radio">
                    <label>
                      <input name="is_new" id="" value="1" {{ ($product->is_new)? 'checked' : ''}} type="radio">
                       New
                    </label>
                  </div>
                  <div class="radio">
                   <label>
                      <input name="is_new" id="" value="0" {{ (!$product->is_new) ? 'checked' : ''}} type="radio">
                      No New
                    </label>
                  </div>
                </div>
              
               
                                    <div class="form-group">
                                       <label for="image">Image</label>
                                       <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="box-footer">
                                       <button type="submit" class="btn btn-primary">Submit</button>
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
                        <div aria-labelledby="myModalLabel" class="modal fade" id="deleteProductId{{ $product->id }}" role="dialog" tabindex="-1">
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
                                    Are you sure to delete category {{ $product->name }}
                                 </div>
                                 <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" type="button">
                                    Close
                                    </button>
                                    <a class="btn btn-danger" href="{{route('admin.product.delete',['slug' => $product->slug])}}">
                                    Yes, I m sure
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <td>
                           {{$product->created_at->diffForHumans()}}
                        </td>
                        <td>
                           {{$product->updated_at->diffForHumans()}}
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
