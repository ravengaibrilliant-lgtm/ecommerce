<!DOCTYPE html>
<head>
<title></title>


</head>


<body>
<h1>Order Details</h1>




Customer name:<h3>{{$order->name}}</h3>
Customer email:<h3>{{$order->email}}</h3>
Customer Phone:<h3>{{$order->phone}}</h3>
Customer ID:<h3>{{$order->user_id}}</h3>

Customer address:<h3>{{$order->address}}</h3>
Product title :<h3>{{$order->product_title}}</h3>
Product Quantity:<h3>{{$order->quantity}}</h3>
Price:<h3>{{$order->price}}</h3>

Product id:<h3>{{$order->product_id}}</h3>
Payment status:<h3>{{$order->payment_status}}</h3>
Delivery status:<h3>{{$order->delivery_status}}</h3>

<img height="150" width="250" src="product/{{$order->image}}">



</body>


</html>