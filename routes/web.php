<?php
use App\Http\Controllers\NoticeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/',[NoticeController::class,'mostrarNoticias'])->name('home');
 Route::get('/noticiaDetalle/{noticia}',[NoticeController::class,'noticiaDetalle'])->name('noticia.detalle');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Ruta para la sección de Misión, Visión, Historia
Route::get('/mision-vision-historia', function () {
    return view('mision_vision');
})->name('mision_vision');

// Ruta para la sección de Historia de la Liga
Route::get('/historia-liga', function () {
    return view('historia_liga');
})->name('historia_liga');

// Ruta para la sección de Fotos y Videos
Route::get('/fotos-videos', function () {
    return view('fotos_videos');
})->name('fotos_videos');

// Ruta para la sección de Eventos
Route::get('/eventos', function () {
    return view('eventos');
})->name('eventos');