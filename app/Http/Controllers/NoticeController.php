<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    public function mostrarNoticias(){
        $noticias = Notice::paginate(3);
        return view('welcome', compact('noticias'));
    }

    public function create(){
        return view('notice.create');
    }

    public function store(Request $request){

        $notice= new Notice();
        $notice->title=$request->title;
        $notice->body=$request->body;

        //ADJUNTAR EL PDF
        $file=$request->file("urlImg");
        $nombreArchivo = "img_".time().".".$file->guessExtension();
        $request->file('urlImg')->storeAs('public/images', $nombreArchivo );
        $notice->urlImg = $nombreArchivo;
        $notice->save();
        return redirect()->route('home');
        

    }

    public function noticiaDetalle(Notice $noticia){
        
        return view('notice.detalle', compact('noticia'));
    }
}
