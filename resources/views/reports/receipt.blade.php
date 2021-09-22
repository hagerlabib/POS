    <div id="invoice-POS">
    <!-- {{-- print section--}} -->
    <div class="printed_content">
    <center id="logo">
        <div class="logo"> Alagie</div>
    <div class="info"></div>
    <h2>POS ltd</h2>
    </center>
    </div>
    <div class="mid">
        <div class="info">
            <h2>Contact Us</h2>
            <p>
                Address: dghg,
                Email:tfyty
                Phone: 5664
            </p>
        </div>
    </div>
<!-- End of Recipt Mid -->
<div class="bot">
    <div id="table">
        <table>
            <tr class="tabletitle">
                <td class="item"><h2>Item</h2></td>
                <td class="Hours"><h2>QTY</h2></td>
                <td class="Rate"><h2>Unit</h2></td>
                <td class="Rate"><h2>Discount</h2></td>
                <td class="Rate"><h2>Sub Total</h2></td>
          </tr>
          @foreach($order_receipt as $receipt )
          <tr class="service">
              <td class="tableitem"><p class="itemtext">{{$receipt->product->product_name}}</p></td>
              <td class="tableitem"><p class="itemtext">{{number_format($receipt->unitprice, 2)}}</p></td>
              <td class="tableitem"> <p class="itemtext">{{$receipt->product->quantity}}</p></td>
              <td class="tableitem"><p class="itemtext"> {{$receipt->discount ? ' ' : '0'}} </p></td>
              <td class="tableitem"> <p class="itemtext">{{number_format($receipt->amount, 2)}}</p></td>
          </tr>
          @endforeach
          <tr class="tableitem">
          <td></td>
          <td></td>
          <td></td>
          <td class="Rate"> <p class="itemtext">Tax</p></td>
          <td class="Payment"><p class="itemtext"> Sum Total $ {{number_format($receipt->amount, 2)}}</p></td>
        </tr>

        <tr class="tableitem">
            <td></td>
            <td></td>
            <td></td>
            <td class="Rate"> Total </td>
            <td class="Payment">{{ number_format($order_receipt->sum('amount'), 2)}}<h2>
            </h2> </td>
          </tr>
        </table>
        <div class="legalcopy">
            <p class="legal"> <strong> ** Thank you for visiting **
            </strong><br>
            The good which are subject to tax, prices includes tax
            </p>
        </div>
        <div class="serial-number">
           Serial :  <span class="serial">
               124155143513
           </span>
           <span> 24/12/2020 &nbsp; &nbsp; 00: 45</span>
        </div>
    </div>
</div>
</div>
<style>
    #invoice-POS{
        box-shadow: 0 0 1in -0.25in rgb(0, 0, 0.5);
        padding: 2mm;
        margin: 0 auto;
        width: 58mm;
        background-color: #fff;
    }
    #invoice-POS ::selection{
        background: #34495E;
        color: #fff;
    }
    #invoice-POS ::-moz-selection{
        background: #34495E;
        color: #fff;
    }
    #invoice-POS h1{
        font-size: 1.5em;
        color: #222;
        }
        #invoice-POS h2{
        font-size: 0.5em;
        }
        #invoice-POS h3{
        font-size: 1.2em;
        font-weight: 300;
        line-height: 2em;
        }
        #invoice-POS p{
        font-size: 0.7em;
       color: #666;
        line-height: 1.2em;
        }
        #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot{
            border-bottom: 1px solid #eee;
        }
        #invoice-POS #top{
            min-height: 100px;
        }
        #invoice-POS #mid{
            min-height: 80px;
        }
        #invoice-POS #bot{
            min-height: 50px;
        }
        #invoice-POS #top .logo{
            height: 60px;
            width: 60px;
            background-image: url() no-repeat;
            background-size: 60px 60px ;
            border-radius:50px ;
        }
        #invoice-POS #top .info{
            display: block;
            margin-left: 0;
            text-align: center;
        }
        #invoice-POS .title{
            text-align: right;
        }
        #invoice-POS .title p{
            text-align: right;
        }
        #invoice-POS table{
            width: 100%;
            border-collapse:collapse ;
        }
        #invoice-POS .tabletitle {
            font-size: 0,5em;
            background: #eee;
        }
        #invoice-POS .service {
  border-bottom: 1px solid #eee;
        }
        #invoice-POS .item {
            width: 24mm;
         }
         #invoice-POS .itemtext {
font-size: 0.5em;
}
#invoice-POS #legalcopy{
    margin-top: 5mm;
    text-align: center;
}
.serial-number{
    margin-top: 5mm;
    margin-bottom: 2mm;
    text-align: center;
    font-size: 12px;
}
.serial {
    font-size: 10px !important;
}





</style>



