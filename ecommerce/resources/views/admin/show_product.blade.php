<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">


    <style type="text/css">

    .center{
        margin:auto;
        width:20%;
        border:2px solid white;
        text-align:center;
        margin-top:40px;

    }
    .font_size{
        text-align:center;
        font-size :20px;
        padding-top :10px;
    }
    .image_size{
        width:150px;
        height:150px;

    }
    .th_color{
        background:skyblue;
    }

    .th_billiant{
        padding:20px;
    }
    table{
        width:100%;
        margin:0;
        padding:0;

    }

    
    
    
    
    </style>

    </head>

    <body>
   
    @include('admin.navbar')
    @include('admin.scripts')

     @include('admin.sidebar')
     @include('sweetalert::alert')
    
     <div class="main-panel" >
     <div class="content-wrapper">
     <div class=div_center>


        @if(session()->has('message'))
         <div class= "alert alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
               </button>
         {{session()->get('message')}}
         </div>
         @endif

      <h1 class="font_size">All Products</h1>

    

    <table class="center">
         <tr class="th_color">
            <th class="th_billiant">Product title</th>
            <th class="th_billiant">Description</th>
            <th class="th_billiant">Quantity</th>
            <th class="th_billiant">category</th>
            <th class="th_billiant">Price</th>
            <th class="th_billiant">Discount Price</th>
            <th class="th_billiant">Product Image</th>
            <th class="th_billiant">Delete</th>
            <th class="th_billiant">Edit</th>
         </tr>

         @foreach($product as $product)

         <tr>
             <td>{{$product->title}}</td>
             <td>{{$product->description}}</td>
             
             <td>{{$product->quantity}}</td>
             <td>{{$product->category}}</td>
             <td>{{$product->price}}</td>
             <td>{{$product->discount_price}}</td>


             <td>
             <img class="image_size" src="/product/{{$product->image}}">
             </td>

             <td>
             <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the product')" href="{{url('delete_product',$product->id)}}" >Delete</a>
             </td>
             
             <td>
              <a class="btn btn-success" href="{{url('update_product',$product->id)}}" >Edit</a>
             </td>

         </tr>

         @endforeach


    </table>
    </body>
    </html>


