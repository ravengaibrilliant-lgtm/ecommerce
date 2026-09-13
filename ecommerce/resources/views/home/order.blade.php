<!DOCTYPE html>
<html>


   <head>

   
    <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <!-- Mobile Metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <!-- Site Metas -->
 <meta name="keywords" content="" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <link rel="shortcut icon" href="images/logo4.png" type="">
 <title>LIGOS</title>
 <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
 <!-- font awesome style -->
 <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
 <!-- Custom styles for this template -->
 <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
 <!-- responsive style -->
 <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />


       <style type="text/css">

       .brilliant{
        text-align:center;
        font-weight:bold;
       }

       .center{
        margin:auto;
        width:70%;
        padding:30px;
        text-align:center;
       }

       table,th,td {
        border:1px solid black; 
       }

       .th_deg{
        padding:10px;
        background-color:skyblue;
        font-size:20px;
        font-weight:bold;
       }

       .img_des{
         height:100px;
         width:180px;
       }


       </style>
</head>

<body>

@include('home.header')
@include('sweetalert::alert')


@if(session()->has('message'))
 <div class= "alert alert-success">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
   </button>
 {{session()->get('message')}}
 </div>
 @endif


<h1 class="brilliant">User order</h1>


<div class="center">
<table>

<tr>

<th class="th_deg">Product Title</th>
<th class="th_deg">Quantity</th>
<th class="th_deg">Price</th>
<th class="th_deg">Payment status</th>
<th class="th_deg">Delivery Status</th>
<th class="th_deg">Image</th>
<th class="th_deg">Action</th>


</tr>
@foreach($order as $order)
<tr>

<td>{{$order->product_title}}</td>
<td>{{$order->quantity}}</td>
<td>{{$order->price}}</td>
<td>{{$order->payment_status}}</td>
<td>{{$order->delivery_status}}</td>

<td><img class="img_des" src="/product/{{$order->image}}"></td>


  <td>
  @if($order->delivery_status=='Processing')
  <a class="btn btn-danger"  onclick="return confirm('Are you sure you want to cancel this order')"href="{{url('cancel_order',$order->id)}}">Cancel order

  @else
  <p style="color:blue;">Not allowed</p>

  @endif
  </td>


</tr>


@endforeach




</table>

</div>

</body>
@include('home.footer')
 <!-- jQery -->
 <script src="home/js/jquery-3.4.1.min.js"></script>
 <!-- popper js -->
 <script src="home/js/popper.min.js"></script>
 <!-- bootstrap js --> 
 <script src="home/js/bootstrap.js"></script>
 <!-- custom js -->
 <script src="home/js/custom.js"></script>



</html>