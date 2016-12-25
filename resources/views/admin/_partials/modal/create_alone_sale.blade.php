<!-- Modal New -->
<div aria-labelledby="myModalLabel" class="modal fade" id="markAsSaleFromNow{{ $product->id }}" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Create a new sales
                </h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.alone_sale.store',$product->slug) }}" enctype="multipart/form-data" method="POST" role="form">
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="rate">
                                Discount Rate
                            </label>
                            <input class="form-control" id="rate" name="rate" type="number" min="0" max="100" required="">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="began_at">
                                Began At
                            </label>
                            <input class="form-control" id="began_at" name="began_at" type="date" value="{{ date('Y-m-d')}}">
                        </div>
                        <div class="form-group">
                            <label for="ended_at">
                                Ended At
                            </label>
                            <input class="form-control" id="ended_at" name="ended_at" type="date">
                        </div>
                         <div class="form-group">
                            <input class="form-control" id="product_id" name="product_id" type="hidden" value="{{ $product->id }}">
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