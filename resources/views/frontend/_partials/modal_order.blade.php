     @foreach ($orders as $order)
       <div class="modal fade" id="orderModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-info">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-12 span-1 ">
                  <h3>Code: {{$order->id}}
                  <br>({{$order->created_at->diffForHumans()}})</h3>
                  <div class="price_single">
                    <span class="reducedfrom ">Total: VND {{$order->total}}</span>
                   <div class="clearfix"></div>
                  </div>
                  <h4 class="quick">Quick Overview:</h4>
                  <table class="table ">
                  <tr>
                  <th class="t-head head-it ">Stt</th>
                  <th class="t-head">Product</th>
                  <th class="t-head">Qty</th>
                  <th class="t-head">Price</th>
                  </tr>
                  <?php $i=1?>
                  @foreach ($order->products as $product)
                  <tr class="cross">
                  <td class="t-data">{{$i}}</td>
                  <td class="t-data">{{$product->name}}</td>
                  <td class="t-data">{{$product->pivot->quantity}}</td>
                  <td class="t-data">VND {{$product->getCurrentPrice()}}</td>
                  </tr>
                  @endforeach
              </table>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach