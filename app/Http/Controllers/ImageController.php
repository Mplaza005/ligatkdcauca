<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Notice;
use Illuminate\Http\Request;

class ImageController extends Controller
{
   public function index()
   {
      $images = Image::paginate(2);
      return view('galeria.index', compact('images'));
   }

   public function create()
   {
      return view('galeria.create');
   }

   public function store(Request $request){

      
      $image= new Image();
      //ADJUNTAR EL PDF
      $file=$request->file("urlImg");
      $nombreArchivo = "img_".time().".".$file->guessExtension();
      $request->file('urlImg')->storeAs('public/images', $nombreArchivo );
      $image->urlImg = $nombreArchivo;
      $image->save();
      return redirect()->route('home');

  }



}
