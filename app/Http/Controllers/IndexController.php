<?php

namespace App\Http\Controllers;

use App\Blazer;
use App\Brand;
use App\Category;
use App\Comment;
use App\Menu;
use App\Menues;
use App\Order;
use App\Product;
use App\Slider;
use App\Sunglass;
use App\TopMenu;
use App\Tshirt;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

session_start();
class IndexController extends Controller
{


    public  function index(){
   //dd(App::getLocale());
$lang = App::getLocale();

$m = TopMenu::menu();

$menu = Menu::all();
$category = Category::all();
$brand = Brand::all();
$product = Product::all();
$slider = Slider::all();
$tshirt = Product::where(['hits'=>1])->get();
$blazer = Product::where(['new'=>1])->get();
$sunglass = Product::where(['sale'=>1])->get();

        return view("index", compact('menu', 'category', 'brand', 'product', 'slider', 'tshirt', 'blazer', 'sunglass','m', 'lang'));
    }




    public  function category($id){

        $m = TopMenu::menu();
        $cat = Product::where(['cat_id'=>$id])->get();

        $menu = Menu::all();
        $category = Category::all();
        $brand = Brand::all();
        $product = Product::all();
        $slider = Slider::all();
        $tshirt = Product::where(['hits'=>1])->get();
        $blazer = Product::where(['new'=>1])->get();
        $sunglass = Product::where(['sale'=>1])->get();

        return view("category", compact('menu', 'category', 'brand', 'product', 'slider', 'tshirt', 'blazer', 'sunglass', 'cat','m'));
    }



    public  function brand($id){
        $m = TopMenu::menu();

        $brands = Product::where(['cat_id'=>$id])->get();

        $menu = Menu::all();
        $category = Category::all();
        $brand = Brand::all();
        $product = Product::all();
        $slider = Slider::all();
        $tshirt = Product::where(['hits'=>1])->get();
        $blazer = Product::where(['new'=>1])->get();
        $sunglass = Product::where(['sale'=>1])->get();

        return view("brand", compact('menu', 'category', 'brand', 'product', 'slider', 'tshirt', 'blazer', 'sunglass', 'brands','m'));
    }



    public  function detail(Request $request, $id){

        $m = TopMenu::menu();

        $menu = Menu::all();
        $category = Category::all();
        $brand = Brand::all();
        $product = Product::find($id);
        $slider = Slider::all();
        $tshirt = Product::where(['hits'=>1])->get();
        $blazer = Product::where(['new'=>1])->get();
        $sunglass = Product::where(['sale'=>1])->get();
        $comments = Comment::all();

        if($request->isMethod("post")){

            $comment = new Comment();
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->save();

        return redirect()->back();
        }

        return view("detail", compact('menu', 'category', 'brand', 'product', 'slider', 'tshirt', 'blazer', 'sunglass', 'brands', 'comments','m'));
    }



    public function addtocart($id)
    {
        $m = TopMenu::menu();
       $product = Product::find($id);
        Cart::add([
       'id' => $product->id,
       'name' => "$product->title",
       'qty' => 1,
       'price' => "$product->price",
       'weight' => 550,
       'options' => ['size' => 'large']]);

   return redirect()->route('cart', compact('m'));
    }



    public function cart(Request $request)
    {
        $m = TopMenu::menu();
        $menu = Menu::all();
        $order = Order::all();


        if($request->isMethod("post")){
            $order = new Order();
            $order-> product = $request->product;
            $order-> email = $request->email;
            $order-> number = $request->number;
            $order-> message = $request->message;
            $order->save();

            Cart::destroy();
            return redirect()->back();
        }

        return view("cart", compact('menu', 'order','m'));

    }


    public function plus($rowId,$qty)
    {
        Cart::update($rowId, $qty+1);
        return redirect()->back();
    }


    public function minus($rowId,$qty)
    {
        Cart::update($rowId, $qty-1);
        return redirect()->back();
    }


    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }



    public function cartajax()
    {
        $id = $_GET['id'];

        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => "$product->title",
            'qty' => 1,
            'price' => "$product->price",
            'weight' => 550,
            'options' => ['size' => 'large']]);

       return view("modal");
    }



    public function plusajax()
    {
        $id = $_GET['id'];
        $qty = $_GET['qty'];
        Cart::update($id, $qty+1);
        return view("modal");
    }



    public function minusajax()
    {
        $id = $_GET['id'];
        $qty = $_GET['qty'];
        Cart::update($id, $qty-1);
        return view("modal");
    }



    public function removeajax()
{
         $id = $_GET['id'];
         Cart::remove($id);
         return view("modal");
}


    public function viewajax()
    {
        $id = $_GET['id'];

        $product = Product::find($id);


        return view("view", compact('product'));
    }

    public function catajax()
    {
        $id = $_GET['id'];

        $cat = Product::where(['cat_id'=>$id])->get();

        return view ("cat", compact('cat'));
    }


    public function search()
    {
        return view('index');
    }


    public function autocomplete(Request $request){
        $datas=TopMenu::select('title')
            ->where('title','LIKE',"%{$request->terms}%")
            ->get();
        return response()->json($datas);
    }





}
