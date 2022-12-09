<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Car Rent System</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>bs4 search Bar - Bootdey.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="receipt-content">


        <div class="invoice-wrapper">
            <div>
                Hi <strong>{{$renter_name}} and {{ $customer_name }}</strong>,
                <br>
                This is the receipt for a payment of <strong> BDT {{$rent_price}}</strong> for {{ $renter_name }} service
            </div>

            <div class="payment-info">
                <div class="row">
                    <div class="col-sm-6">
                        <span>Payment No.</span>

                        <strong>{{$payment_no}}</strong>
                    </div>
                    <div class="col-sm-6 text-right">
                        <span>Payment Date</span>

                        <strong>{{$created_at}}</strong>
                    </div>
                </div>
            </div>

            <div class="payment-details">
                <div class="row">
                    <div class="col-sm-6">
                        <span>Client</span>
                        <strong>
                            {{$customer_name}}
                        </strong>
                        <p>
                        {{$customer_email }} <br>

                        {{$myinfo->username }} <br>
                        {{$customer_address }} <br>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <span>Payment To</span>
                        <strong>
                            {{$renter_name}}
                        </strong>
                        <p>
                        {{$renter_email }} <br>


                        <br>{{$renter_address }} <br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="line-items">

                <table class="table">
                    <th>
                        Details
                    </th>
                    <th>
                        Service id
                    </th>
                    <th>
                        Amount
                    </th>
                    <tr>
                        <td>
                            Car Name: <b>{{$car_name}}</b> <br>
                            Car Model: <b>{{$car_model}}</b> <br>
                            Type: <b>{{$car_type}}</b> <br>
                            Color: <b>{{$car_color}}</b> <br>
                            Car No. <b>{{$car_number}}</b> <br>
                        </td>
                        <td>
                            {{$Clist->id}}
                        </td>
                        <td>
                            {{$rent_price}}
                        </td>
                    </tr>
                </table>

                <div class="total text-right">
                    <p class="extra-notes">
                        <strong>Extra Notes</strong>
                        I was chack the request and Approvel it. Thank you for using our service.
                    </p>

                </div>
            </div>
        </div>



</div>

<style type="text/css">
.receipt-content .logo a:hover {
text-decoration: none;
color: #7793C4;
}

.receipt-content .invoice-wrapper {
background: #FFF;
border: 1px solid #CDD3E2;
box-shadow: 0px 0px 1px #CCC;
padding: 40px 40px 60px;
margin-top: 40px;
border-radius: 4px;
}

.receipt-content .invoice-wrapper .payment-details span {
color: #A9B0BB;
display: block;
}
.receipt-content .invoice-wrapper .payment-details a {
display: inline-block;
margin-top: 5px;
}

.receipt-content .invoice-wrapper .line-items .print a {
display: inline-block;
border: 1px solid #9CB5D6;
padding: 13px 13px;
border-radius: 5px;
color: #708DC0;
font-size: 13px;
-webkit-transition: all 0.2s linear;
-moz-transition: all 0.2s linear;
-ms-transition: all 0.2s linear;
-o-transition: all 0.2s linear;
transition: all 0.2s linear;
}

.receipt-content .invoice-wrapper .line-items .print a:hover {
text-decoration: none;
border-color: #333;
color: #333;
}

.receipt-content {
background: #ECEEF4;
}
@media (min-width: 1200px) {
.receipt-content .container {width: 900px; }
}

.receipt-content .logo {
text-align: center;
margin-top: 50px;
}

.receipt-content .logo a {
font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
font-size: 36px;
letter-spacing: .1px;
color: #555;
font-weight: 300;
-webkit-transition: all 0.2s linear;
-moz-transition: all 0.2s linear;
-ms-transition: all 0.2s linear;
-o-transition: all 0.2s linear;
transition: all 0.2s linear;
}

.receipt-content .invoice-wrapper .intro {
line-height: 25px;
color: #444;
}

.receipt-content .invoice-wrapper .payment-info {
margin-top: 25px;
padding-top: 15px;
}

.receipt-content .invoice-wrapper .payment-info span {
color: #A9B0BB;
}

.receipt-content .invoice-wrapper .payment-info strong {
display: block;
color: #444;
margin-top: 3px;
}

@media (max-width: 767px) {
.receipt-content .invoice-wrapper .payment-info .text-right {
text-align: left;
margin-top: 20px; }
}
.receipt-content .invoice-wrapper .payment-details {
border-top: 2px solid #EBECEE;
margin-top: 30px;
padding-top: 20px;
line-height: 22px;
}


@media (max-width: 767px) {
.receipt-content .invoice-wrapper .payment-details .text-right {
text-align: left;
margin-top: 20px; }
}
.receipt-content .invoice-wrapper .line-items {
margin-top: 40px;
}
.receipt-content .invoice-wrapper .line-items .headers {
color: #A9B0BB;
font-size: 13px;
letter-spacing: .3px;
border-bottom: 2px solid #EBECEE;
padding-bottom: 4px;
}
.receipt-content .invoice-wrapper .line-items .items {
margin-top: 8px;
border-bottom: 2px solid #EBECEE;
padding-bottom: 8px;
}
.receipt-content .invoice-wrapper .line-items .items .item {
padding: 10px 0;
color: #696969;
font-size: 15px;
}
@media (max-width: 767px) {
.receipt-content .invoice-wrapper .line-items .items .item {
font-size: 13px; }
}
.receipt-content .invoice-wrapper .line-items .items .item .amount {
letter-spacing: 0.1px;
color: #84868A;
font-size: 16px;
}
@media (max-width: 767px) {
.receipt-content .invoice-wrapper .line-items .items .item .amount {
font-size: 13px; }
}

.receipt-content .invoice-wrapper .line-items .total {
margin-top: 30px;
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes {
float: left;
width: 40%;
text-align: left;
font-size: 13px;
color: #7A7A7A;
line-height: 20px;
}

@media (max-width: 767px) {
.receipt-content .invoice-wrapper .line-items .total .extra-notes {
width: 100%;
margin-bottom: 30px;
float: none; }
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
display: block;
margin-bottom: 5px;
color: #454545;
}

.receipt-content .invoice-wrapper .line-items .total .field {
margin-bottom: 7px;
font-size: 14px;
color: #555;
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total {
margin-top: 10px;
font-size: 16px;
font-weight: 500;
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
color: #20A720;
font-size: 16px;
}

.receipt-content .invoice-wrapper .line-items .total .field span {
display: inline-block;
margin-left: 20px;
min-width: 85px;
color: #84868A;
font-size: 15px;
}

.receipt-content .invoice-wrapper .line-items .print {
margin-top: 50px;
text-align: center;
}



.receipt-content .invoice-wrapper .line-items .print a i {
margin-right: 3px;
font-size: 14px;
}

.receipt-content .footer {
margin-top: 40px;
margin-bottom: 110px;
text-align: center;
font-size: 12px;
color: #969CAD;
}
</style>

<script type="text/javascript">


</script>

</body>
@endsection
</html>
