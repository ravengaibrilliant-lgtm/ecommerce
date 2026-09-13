<!DOCTYPE html>
<html lang="en">
<base href="/public">
<head>
    <meta charset="utf-8">
    <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">


<style type="text/css">

.font_size{
    text-align:center;
    font-size:25px;
    font-weight:bold;
    padding-bottom:40px;

}

.center{
    border:2px solid white;
    width:100%;
    length:100%
    margin:auto;
    padding-top:50px;
    text-align:center;
}


.th_color{
    background-color:skyblue;
}

.img_size{
    width:200px;
    height:100px;
}


</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



    </head>

    <body>
   
    @include('admin.navbar')
   

     @include('admin.sidebar')
     @include('sweetalert::alert')
       
     
    
     <div class="main-panel">
     <div class="content-wrapper">
     <div class=div_center>


      <h1 class="font_size">All Orders</h1>

      <div style="padding-left:400px; padding-bottom:30px;">
      
      <form action="{{url('search')}}" method="get">

      @csrf
      <input type="text" style="color:black;" name="search" placeholder="Search for something">

      <input type ="submit" value="search" class="btn btn-outline-primary">
      
      </form>

       @if(session()->has('message'))
    <div class= "alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
      </button>
    {{session()->get('message')}}
    </div>
    @endif
      
      </div>

    

    <table class="center">
         <tr class="th_color">
            <th style="padding:2px;">Name</th>
            <th style="padding:2px;">Email</th>
            <th style="padding:2px;">Address</th>
            <th style="padding:2px;">Phone </th>
            <th style="padding:2px;">title</th>
            <th style="padding:2px;">Quantity</th>
            <th style="padding:2px;">Price</th>
            <th style="padding:2px;">Payment status</th>
            <th style="padding:2px;">Delivery status</th>
            <th style="padding:2px;">Image</th>
            <th style="padding:2px;">Delivery</th>  
            <th style="padding:2px;">print </th> 
            <th style="padding:2px;">send email</th> 
        
         </tr>


         @forelse($order as $order)

         <tr>
         
            <td>{{$order->name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->product_title}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>

            
            <td>

            <img class="img_size" src="/product/{{$order->image}}">
            </td>

            <td>
            @if($order->delivery_status=="Processing")
            
            <a href="{{url('delivered',$order->id)}}"onclick="return confirm ('Are you sure this product is delivered !!!')" class="btn btn-primary" >Delivered</a>
 
            @else
            
            
           <p style="color:green;"> Delivered</p>
           
 
            
            
            @endif
 
          
            
            </td>

            <td>
            <a href="{{url('print_pdf',$order->id)}}" class="btn btn-success" class="">Print    </a> 
            
            
            </td>
                

            <td>
           <a href="{{url('send_email',$order->id)}}" class="btn btn-success" class="">Email    </a> 
            
            
           </td>
        
         
         </tr>
         @empty

         <tr>
         <td colspan="16"> 

         <div>
          <p><h2>No Data Found for your search </h2></p>
                   
          </div>
                   
         
         </td>
         
         </tr>

         
         
         
         @endforelse

    </table>

     @include('admin.scripts')
    </body>
    </html>


