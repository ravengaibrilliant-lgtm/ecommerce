<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Notifications\MyFirstNotification;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;




class AdminController extends Controller
{
    public function view_category()
    {
        if(Auth::id())
        {
            $data=category::all();
            return view('admin.category',compact('data'));

        }
        else{
            return redirect('login');
        }
       
       
    }

    public function add_category(Request $request)
    {
        if(Auth::id())
        {
            $data=new category;
            $data->category_name=$request->category;
            $data->save();
            Alert::success('Category successfully added');
            return redirect()->back();

        }
        else{
            return redirect('login');
        }



    }

    public function delete_category($id)
    {
        if(Auth::id())
        {

            $data=category::find($id);
            $data->delete();
            Alert::success('Category successfully removed');
            return redirect()->back();

        }
        else{
            return redirect('login');
        }




    }
    

    public function view_product()
    {    
        $category=category::all();
        return view('admin.product',compact('category'));
    }

    public function add_product(Request $request)
    {
        if(Auth::id())
        {
               //dd($request->all());
               $product=new product;
               $product->title=$request->title;
               $product->description=$request->description;
               $product->price=$request->price;
               $product->quantity=$request->quantity;
               $product->discount_price=$request->disc_price;
               $product->category=$request->category;
               $image=$request->image;
               $imageName=time().'.'.$image->getClientOriginalExtension();
               $request->image->move('product',$imageName);
               $product->image=$imageName;
               
               $product->save();
               
               Alert::success('Product successfully added');
               return redirect()->back();

        }

        else{
            return redirect('login');
        }

       
       

    }

    public function show_product()
    {
        if(Auth::id())
        {
            $product= product::all();
 
            return view('admin.show_product',compact('product'));

        }
        else{
            return redirect('login');
        }
    }

    public function delete_product($id)
    {
        if(Auth::id())
        {
            $product=product::find($id);
            $product->delete();
            Alert::success('Product successfully removed');
            return redirect()->back();

        }
        else{
            return redirect('login');
        }



    }

    public function update_product($id)
    {
        if(Auth::id())
        {
            $product=product::find($id);
            $category=category::all();
            return view('admin.update_product',compact('product','category'));

        }
        else{
            return redirect('login');
        }



    }
    public function update_product_confirm(Request $request,$id)
    {
        if(Auth::id())
        {
            $product=product::find($id);
            $product->title=$request->title;
            $product->description=$request->description;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $product->discount_price=$request->disc_price;
            $product->category=$request->category;
            $image=$request->image;
            if($image)
            {
                $imageName=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('product',$imageName);
                $product->image=$imageName;
            }
            $product->save();
            Alert::success('Product successfully updated');
            return redirect()->back();

        }
        else{
            return redirect ('login');
        }

       
    }

    public function order()
{
    if(Auth::id())
    {
        $order=order::all();
        return view('admin.order',compact('order'));

    }
    else{
        return redirect('login');
    }
}

public function delivered($id)
{

    
       $order=order::find($id);
       $order->delivery_status="delivered";
       $order->payment_status="paid";
       $order->save();

       Alert::success('Product delivery successfully updated');
       return redirect()->back();



     

    
}

public function print_pdf($id)
{
    if(Auth::id())
    {
         //data to be printed on the pdf file
         $order=order::find($id);
         //to download pdf
         $pdf=PDF::loadView('admin.pdf',compact('order'));
         return $pdf->download('order_details.pdf');

    }

}

public function send_email($id)
{
    $order=order::find($id);
    return view('admin.email_info',compact('order'));
}

public function send_user_email(Request $request,$id)
{
    $order=order::find($id);
    $details= [
        'greeting'=>$request->greeting,

        'firstline'=>$request->firstline,
        'body'=>$request->body,
        'button'=>$request->button,
        'url'=>$request->url,
        'lastline'=>$request->lastline,


    ];

    

    Notification::send($order,new MyFirstNotification($details));


    Alert::success('Notification successfully updated');

    return redirect()->back();

}

public function searchdata(Request $request)
{
    $searchText= $request->search;
    $order=order::where('name', 'LIKE', "%$searchText%")->orWhere('product_title', 'LIKE', "%$searchText%")->get();

    return view('admin.order',compact('order'));
}

    
    

}
