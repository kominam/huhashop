<!-- Modal Delete -->
<div aria-labelledby="myModalLabel" class="modal fade" id="deleteStockId{{ $stock->id }}" role="dialog" tabindex="-1">
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
                Are you sure to delete stock of  {{ $stock->product->name }}
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    Close
                </button>
                <a class="btn btn-danger" href="{{route('admin.stock.delete',$stock->id)}}">
                    Yes, I m sure
                </a>
            </div>
        </div>
    </div>
</div>