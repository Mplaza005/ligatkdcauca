<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    public function mostrarNoticias(){
        $noticias = Notice::all();
        return view('welcome', compact('noticias'));
    }

    public function noticiaDetalle(Notice $noticia){
        
        return view('notice.detalle', compact('noticia'));
    }
}
