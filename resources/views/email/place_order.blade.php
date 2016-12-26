<h2>
    Hello,
</h2>
<h3>
    You receive this email because you are place a new order in Huhashop
</h3>
<p>
    The detail of order will shown below:
</p>
<h3>ID: {{ $order->id }}</h3>
<h3>Total: {{ $order->total }}</h3>
<h3>Shipping Info : {{$order->shipping_info->name}}, {{$order->shipping_info->telepohne}}, {{ $order->shipping_info->address}}</h3>
<table class="table ">
    <tr>
        <th class="t-head head-it ">
            Stt
        </th>
        <th class="t-head">
            Product
        </th>
        <th class="t-head">
            Qty
        </th>
        <th class="t-head">
            Price
        </th>
    </tr>
    @php($i=0)
     @foreach ($order->products as $product)
    <tr class="cross">
        <td class="t-data">
            {{$i}}
        </td>
        <td class="t-data">
            {{$product->name}}
        </td>
        <td class="t-data">
            {{$product->pivot->quantity}}
        </td>
        <td class="t-data">
            VND {{$product->getCurrentPrice()}}
        </td>
    </tr>
    @endforeach
</table>
<h4>We will notify you when your order was sent to receiver. Thansk you!!! </h4>