<!DOCTYPE html>
<html>


   <head>
      <!-- Basic -->
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
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style type="text/css">
      .center{
        margin:auto;
         width :70%;
         text-align:center;
         padding:30px;
      }

      table,th,td
      {
        border:1px solid grey;
        
      }

      .ravens
      {
        font-size:30px;
        padding:5px;
        background:skyblue;
      }

      .img_des{
        height:200px;
        width:200px;
      }
      .tinashe{
        font-size: 20px;
        padding: 40px;
      }


      
      </style>
   </head>
   <body>
      <div class="hero_area">
      @include('home.header')
      @include('sweetalert::alert')



     @if(session()->has('message'))
      <div class= "alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
        </button>
      {{session()->get('message')}}
      </div>
      @endif
   

    <div class="center">

    <table>
    <tr>
        <th class="ravens">Product title</th>
        <th class="ravens">product quantity</th>
        <th class="ravens">Price</th>
        <th class="ravens">Image</th>
        <th class="ravens">Action</th>
    
    </tr>

    <?php $totalprice=0;?>

    @foreach($cart as $cart)

    <tr>
         <td>{{$cart->product_title}}</td>
         <td>{{$cart->quantity}}</td>
         <td>${{$cart->price}}</td>
         <td><img class="img_des" src="/product/{{$cart->image}}"></td>
         <td><a class="btn btn-danger"  onclick="return confirm('Are you sure you want to remove this product')"href="{{url('/remove_cart',$cart->id)}}">Remove</td>

    </tr>

    <?php $totalprice=$totalprice + $cart->price ?>

    @endforeach

   


    </table>

    <div>
        <h1 class="tinashe"> TOTAL PRICE :  {{$totalprice}}</h1>
    </div>

    <div>
         <h1 style="font-size:25px; padding-bottom:15px;">Proceed to order</h1>

         <a href="{{url('cash_order')}}" class="btn btn-danger">Cash on delivery</a>

         

         <a href="{{url('pay_now',$totalprice)}}" class="btn btn-danger">Pay using Paynow</a>

    </div>
    </div>
      <!-- footer start -->
       @include('home.footer')  
      <!-- footer end -->
    
    
    
    
      
      
      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>