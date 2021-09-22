<div class="col-lg-12">
    <div class="row">
       <div class="col-md-8">
        <div class="card">

            <div class="card-header">
                <h4 style="float:left">Order Products</h4>
                <a href="#" style="float: right" class="btn btn-dark" data-toggle="modal" data-target="#addproduct">
                    <i class="fa fa-plus"></i>Add New Products </a>
                </div>
                <div class="my-2">
            <form wire:submit.prevent="InsertoCart">
                    <input type="text" wire:model="prodoct_code" class="form-control" placeholder="Enter Product Code">
            </form>
                </div>
                <form action=" {{ route('orders.store') }} " method="post">
                    @csrf
            <div class="card-body">
                <table class="table table-bordered table-left">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Disc(%)</th>
                            <th>Total </th>
                            <th><a href="#" class="btn btn-sm btn-success add_more rounded-circle"><i class="fa fa-plus"></i></a> </th>
                        </tr>
                    </thead>
                    <tbody class="addMoreProduct">
                        <tr>
                            <td class="no">1</td>
                            <td>
                      <select name="product_id[]" id="product_id" class="form-control product_id">
                           <option value="">Select Item</option>
                        @foreach ($products as $product )
                            <option data-price="{{ $product->id }}"
                                value="{{$product->id}}">
                                {{$product->product_name}} </option>
                        @endforeach
                    </select>
</td>
<td>
    <input type="number" name="quantity[]" id="quantity"
    class="form-control quantity">
</td>
<td>
    <input type="number" name="price[]" id="price"
     class="form-control price">
</td>
<td>
    <input type="number" name="discount[]" id="discount"
     class="form-control discount">
</td>
<td>
    <input type="number" name="total_amount[]" id="total_amount"
    class="form-control total_amount">
</td>
<td><a href="#" class="btn btn-sm btn-danger delete rounded-circle"><i class="fa fa-times"></i> </a> </td>
</tr>
                  </tbody>

                </table>
            </div>
        </div>
       </div>
       <div class="col-md-3">
        <div class="card">
            <div class="card-header"><h4>Total <b class="total">0.00</b></h4></div>
            <div class="card-body">
                <div class="btn-group">
                    <button onclick="PrintReceiptContent('print')" class="btn btn-dark" type="button">
                    <i class="fa fa-print"></i> Print </button>

                    <button onclick="PrintReceiptContent('print')" class="btn btn-primary" type="button">
                        <i class="fa fa-print"></i> History </button>

                        <button onclick="PrintReceiptContent('print')" class="btn btn-danger" type="button">
                            <i class="fa fa-print"></i> Report </button>
                </div>
               <div class="panel">
                   <div class="row">
                       <table class="table table-striped">
                           <tr>
                               <td>
                                <label for="">Customer Name</label>

                                 <input type="text" name="customer_name" id="" class="form-control">

                               </td>
                               <td>
                                <label for="">Customer Phone</label>

                                 <input type="number" name="customer_phone" id="" class="form-control">

                               </td>
                           </tr>
                       </table>
          <td>Payment Method <br>
            <span class="radio-item">
                <input name="payment_method" class="true" id="payment_method"
                 type="radio" value="cash" checked="checked">
                 <label for="payment_method"><i class="fa fa-money-bill text-success"></i> Cash </label>
            </span>
            <span class="radio-item">
                <input name="payment_method" class="true" id="payment_method"
                 type="radio" value="bank transfer" >
                 <label for="payment_method"><i class="fa fa-university text-danger"></i> Bank Transfer </label>
            </span>
            <span class="radio-item">
                <input name="payment_method" class="true" id="payment_method"
                 type="radio" value="credit Card" >
                 <label for="payment_method"><i class="fa fa-credit-card text-info"></i> Credit Card </label>
            </span>

          </td><br>
          <td>Payment <input type="number" name="paid_amount" id="paid_amount" class="form-control">
        </td>
        <td>Returning Change <input type="number" readonly name="balance" id="balance" class="form-control">
        </td>
        <td>
            <button class="btn-primary btn-lg btn-block mt-3">Save</button>
        </td>
        <td>
            <button class="btn-danger btn-lg btn-block mt-2">Calculator</button>
        </td> <br>
        <div class="text-center" style="text-align: center !important">
            <a href="#" class="text-danger text-center"><i class="fa fa-sign-out-alt"></i></a>
        </div>

                   </div>
               </div>
            </div>
        </div>
       </div>
    </form>
    </div>
</div>
</div>

{{--modal of adding new product--}}

<div class="modal right fade" id="addproduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="staticBackdropLabel">Add product</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Brand</label>
                <input type="text" name="brand" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Quantity</label>
                <input type="number" name="quantity" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Alert Stock</label>
                <input type="number" name="alert_stock" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="2" class="form-control"></textarea>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Save Product</button>
            </div>
        </form>
    </div>
  </div>
</div>
</div>
