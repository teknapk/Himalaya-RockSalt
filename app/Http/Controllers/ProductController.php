<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $html = "";
        $categories = DB::table('categories')
            ->select(
                'categories.id as id',
                'categories.name as name',
                'categories.img_path as img',
            )->get();
        $products = DB::table('products')
            ->select(
                'products.id as id',
                'products.name as name',
                'products.img_path as img',
                'products.description as description',
                'products.category_id as category_id',
            )->limit(8)->get();
        return view('welcome', compact('categories', 'products'));
    }
    public function productpage()
    {
        $get = DB::table('categories')
            ->select(
                'categories.id as id',
                'categories.name as name',
                'categories.img_path as img',
            )->get();
        return view('products', compact('get'));
    }
    public function productdetails(Request $request)
    {
        $productid = $request->id;
        $product = DB::table('products')
            ->select(
                'products.id as id',
                'products.name as name',
                'products.img_path as img',
                'products.description as description',
                'products.category_id as categoryid',
            )->where('id', $productid)->get();

        $categoryid = $product[0]->categoryid;

        $relatedproducts = DB::table('products')
            ->select(
                'products.id as id',
                'products.name as name',
                'products.img_path as img',
                'products.description as description',
            )->where('category_id', $categoryid)->limit(4)->get();
        return view('readmore', compact('product', 'relatedproducts'));
    }

    public function categorydetails(Request $request)
    {
        $categoryid = $request->id;
        if ($categoryid) {
            $products = DB::table('products')
                ->select(
                    'products.id as id',
                    'products.name as name',
                    'products.img_path as img',
                    'products.description as description',
                    'products.category_id as categoryid',
                )->where('category_id', $categoryid)->get();

            $categories = DB::table('categories')
                ->select(
                    'categories.id as id',
                    'categories.name as name',
                    'categories.img_path as img',
                    'categories.img_path2 as img2'
                )->find($categoryid);
               
                $slider=false;
                

           
            return view('categoriesexplore', compact('products', 'categories','slider'));
        } else {
            $products = DB::table('products')
                ->select(
                    'products.id as id',
                    'products.name as name',
                    'products.img_path as img',
                    'products.description as description',
                    'products.category_id as categoryid',
                )->get();

            $categories = DB::table('categories')
                ->select(
                    'categories.id as id',
                    'categories.name as name',
                    'categories.img_path as img',
                )->get();
                $slider=true;
            return view('categoriesexplore', compact('products', 'categories','slider'));
        }
    }
    public function description($id)
    {
        $categories = DB::table('categories')
                ->where('id',$id)
                ->select(
                    'categories.id as id',
                    'categories.name as name',
                    'categories.description as description',
                    'categories.img_path as img',
                )->first();
            
       
        return view('description', compact('categories'));
    }
}