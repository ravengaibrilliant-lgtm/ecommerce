<!DOCTYPE html>
<html lang="en">
<base href="/public">
<head>

    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <style type="text/css">

    .div_center{
        text-align:center;
        padding-top:40px
    }
    .font_size{
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color{
        color:black;
        padding-bottom:20px;
    }

    label{
        display:inline-block;
        width:200px;
    }

    .div_design{
        padding-bottom:15px;
    }
     form {
        display:center;
     }
    
    
    
    
    
    </style>
    </head>

    <body>
    
    @include('admin.navbar')
    @include('admin.scripts')
    @include('admin.sidebar')

    @include('sweetalert::alert')
    
    
     <div class="main-panel">
     <div class="content-wrapper">
     <div class=div_center>


     
        @if(session()->has('message'))

        <div class= "alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
              </button>

        {{session()->get('message')}}
        </div>

        @endif


    <h1 class="font_size">Update product</h1>

    <form action="{{url('/update_product_confirm',$product->id)}}" method="post" enctype="multipart/form-data">


    @csrf

    <div class="div_design">

    <label>Product title</label>
    <input class="text_color" type="text" name="title" placeholder="Write a product tittle" required="" value={{$product->title}}>

    </div>


         <div class="div_design">

     <label>Product description</label>
     <input class="text_color" type="text" name="description" placeholder="Write a product description" value={{$product->description}}>
     </div>
    
    
      <div  class="div_design">
     <label>Product price</label>
     <input class="text_color" type="number" name="price" placeholder="Write a product price" value={{$product->price}}>
     </div>
    
      <div  class="div_design">
     <label>Product quantity</label>
     <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a product quantity"  value={{$product->quantity}}>
     </div>
    
      <div  class="div_design">
     <label>Product category</label>
     <select  class="text_color" name="category" required=""  >

      <option value="{{$product->category}}" selected="">value={{$product->category}}</option>

         @foreach($category as $category)
         <option value= {{$category->category_name}}>{{$category->category_name}}</option>
         @endforeach

     
     </select>
     </div>
    
      <div  class="div_design">
    <label>Discount Price</label>
    <input class="text_color" type="number" name="disc_price" placeholder="Write discount" value={{$product->discount_price}}>
    </div>

         <div  class="div_design">
          <label>Current Product image</label>
         <img style="margin:auto" height="100" width="100" src="/product/{{$product->image}}">
          </div>
    
        <div  class="div_design">
         <label>Change Product image</label>
        <input type="file" name="image" id="image">
         </div>

        
  <div  class="div_design">
       
        <input type="submit" value="Update product" class="btn btn-primary">
        </div>

        </form>

 


    </div>
    </div>
    </div>

    </body>
    </html>


