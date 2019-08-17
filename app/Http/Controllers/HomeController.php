<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Wisata;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $wisata = Wisata::query()->latest()->limit(5);
      return view('home', compact('wisata'));
    }

    public function wisata()
    {
      $counter = 1;
      $wisata = Wisata::query()->orderBy('nama', 'asc');
      if (request()->has("search") && strlen(request()->query("search")) >= 1) {
        $wisata->where(
          "wisatas.nama", "like", "%" . request()->query("search") . "%"
        );
      }

      $pagination = 6;
      $wisata = $wisata->paginate($pagination);
      if( request()->has('page') && request()->get('page') > 1){
        $counter += (request()->get('page')- 1) * $pagination;
      }

      return view('wisata', compact('wisata','counter'));
    }

}
