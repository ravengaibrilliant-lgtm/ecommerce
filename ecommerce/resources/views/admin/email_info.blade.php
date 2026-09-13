<!DOCTYPE html>
<html lang="en">
<base href="/public">
<head>
    <meta charset="utf-8">
    <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">


<style type="text/css">

label{
    display:inline-block;
    width:200px;
    font-size:15px;
    font-weight:bold;


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

      <h1 class="font_size">Send Email</h1>

     

     

     <h1 style="text-align:center; font-size:25px"> Send Email to: {{$order->email}}</h1>


     <form action="{{url('send_user_email',$order->id)}}" method="POST">

     @csrf

     <div style="padding-left:35%; padding-top:30px;">
     <label>Email Greeting: </label>
     <input style="color:black;" type="text" name=greeting>
     
     
     </div>

     <div style="padding-left:35%; padding-top:30px;">
     <label>Email FirstLine: </label>
     <input style="color:black;" type="text" name="firstline">
          
          
     </div>

     <div style="padding-left:35%; padding-top:30px;">
     <label>Email body    : </label>
     <input style="color:black;" type="text" name=body>
          
          
     </div>

     <div style="padding-left:35%; padding-top:30px;">
    <label>Email button name: </label>
    <input style="color:black;" type="text" name=button>
         
         
    </div>

    <div style="padding-left:35%; padding-top:30px;">
    <label>Email Url: </label>
    <input style="color:black;" type="text" name=url>
         
         
    </div>


   <div style="padding-left:35%; padding-top:30px;">
     <label>Email last name: </label>
     <input  style="color:black;"type="text" name=lastline>
          
          
     </div>


     <div style="padding-left:35%; padding-top:30px;">
     
      <input type="submit" value="Send Email" class="btn btn-primary">
           
           
      </div>

     </form>











     @include('admin.scripts')
    </body>
    </html>


