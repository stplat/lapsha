<?php

namespace App\Http\Controllers;

use DB;

class IndexController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $meta_keywords = 'кафе, суши, магазин, роллы, супы, азиатская кухня';
    $meta_description = 'Ресторан (кафе) азиатской кухни с низкими ценами. Найти нас можно по адресу г.Москва, ул. Покровка д.7/9-11 к.1';
    $title = '«Лапша и Суши на Покровке» - кафе азиатской кухни с низкими ценами';

    $items = DB::table('product')->leftJoin('product_to_category', 'product.product_id', '=', 'product_to_category.product_id')
      ->select('product.*', 'category.name_2st as category', 'category.slug as category_slug')->inRandomOrder()->limit('4')
      ->leftJoin('category', 'product.category_id', '=', 'category.category_id')->get();

    $canonical = $this->canonical;

    return view('index', compact('items', 'meta_keywords', 'meta_description', 'title', 'canonical'));
  }

  public function sitemap(\Request $request) {
    $items = DB::table('product')->leftJoin('product_to_category', 'product.product_id', '=', 'product_to_category.product_id')
      ->select('product.*', 'category.name_2st as category', 'category.slug as category_slug')->groupBy('product.product_id')
      ->leftJoin('category', 'product.category_id', '=', 'category.category_id')->get();

    $categories = DB::table('category')->where('available', '1')->get();

    return response()->view('sitemap', compact('items', 'categories'))->header('Content-Type', 'text/xml');
  }

  public function route() {

  }
}
