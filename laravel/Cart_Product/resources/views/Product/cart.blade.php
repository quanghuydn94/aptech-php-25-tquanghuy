
    <table border="1" width="50%">
        <thead>
        <tr>
            <th style="width:20%">Product</th>
            <th style="width:5%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:10%">Subtotal</th>
            <th style="width:5%">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
<!-- by this code session get all product that user chose -->
        @if(session('cart'))
            @forelse(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr>
                    <td  >
                        <div  ><img src="{{url('ImgPhone')}}/{{ $details['image'] }}" width="100" height="100"  /></div>
                        <div  >
                            <h4  >{{ $details['name'] }}</h4>
                        </div>
                    </td>
                    <td  >${{ $details['price'] }}</td>
                    <td  >
                        <input type="number" value="{{ $details['quantity'] }}"  />
                    </td>
                    <td  >${{ $details['price'] * $details['quantity'] }}</td>
                    <td><a href="">Delete</a></td>
            @empty
                    <td colspan="5">No item!</td>
                </tr>
            @endforelse
        @endif

        </tbody>
        <tfoot>

        <tr>
            <td><a href="{{ route('product.index') }}"  >  Continue Shopping</a></td>
            <td colspan="2"  ></td>
            <td ><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>
