<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <style type="text/css">
       .div_center
    {
        text-align: center;
        padding-top: 40px;

    }

    .h2_font
     {
        font-size: 40px;
        padding-top: 40px; 
     }

     .input_color
     {
      color:black;
     }

     .center
     {
      margin:auto;
      width:70%;
      text-align:center;
      margin-top:30px;
      border:3px solid white;
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
   <div class=div_center>
     

        @if(session()->has('message'))

        <div class= "alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
              </button>

        {{session()->get('message')}}
        </div>

        @endif


               <div class="div_center">
        <h2 class="h2_font">Add Category</h2>

        <form action="{{url('/add_category')}}" method="POST">

        @csrf

        <input class="input color" type="text" name="category" placeholder="write category name" required>
        <input type="submit" class="btn btn-primary" name="submit" value="Add category">
        </form>
        </div>

        <table class="center"> 

        <tr style="color:blue; text:bold;">
           <td>Category Name</td>
             <td>Action</td>
        
        </tr>

        @foreach($data as $data )

                      <tr >

                      <td>{{$data->category_name}}</td>
                      <td style="padding:20px;">
                          <a onclick ="return confirm('Are you sure to  want to delete this ?')"class="btn btn-danger" href="{{url('/delete_category',$data->id)}}">Delete</a>
                      
                      </td>
                     </tr>
                      
        @endforeach

        </table>

</div>
</div>



    </body>
    </html>


