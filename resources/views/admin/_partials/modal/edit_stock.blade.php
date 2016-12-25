<!-- Modal Update -->
<div aria-labelledby="myModalLabel" class="modal fade" id="editStockId{{ $stock->id }}" role="dialog" tabindex="-1">
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
                <form action="{{route('admin.stock.update', $stock->id)}}" enctype="multipart/form-data" method="POST" role="form">
                  <input name="_method" type="hidden" value="PUT">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="product_id">
                                Product
                            </label>
                            <select name="product_id" disabled="">
                                @foreach ($all_products as $product)
                                <option value="{{ $product->id}}">
                                    {{$product->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="qty">
                                Qty
                            </label>
                            <input class="form-control" id="qty" name="qty" placeholder="Enter qty" type="text" value="{{ $stock->qty }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="import_price">
                                Import Price
                            </label>
                            <input class="form-control" id="import_price" name="import_price" placeholder="Enter Unit" type="number" value="{{ $stock->import_price }}">
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
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