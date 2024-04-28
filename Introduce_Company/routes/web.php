<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use App\Mail\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/admin', function () {
    return view('pages.login.login');
})->name('admin');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/login', [UserController::class, 'login_page'])->name('login.page');

Route::get('/about', function () {
    return view('pages.contacts.about');
})->name('about');
Route::get('/contacts', function () {
    return view('pages.contacts.contacts');
})->name('contacts');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{id?}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/product', [ProductTypeController::class, 'index'])->name('product');
Route::get('/list-product/{id?}', [ProductController::class, 'list'])->name('list');
Route::get('/show-product/{id?}', [ProductController::class, 'show'])->name('show');
Route::post('/contact/store', [ContactsController::class, 'store'])->name('Storecontact');
Route::get('/sendcontact', function(Illuminate\Http\Request $request){
    $arr = Session::pull('contact');
    //Không còn session Contact
    $lienhe = [
        'hoten' =>trim(strip_tags( $arr['ht'] )),
        'email' =>trim(strip_tags( $arr['em'] )),
        'noidung' => trim(strip_tags( $arr['nd'] )),
        'tieude' =>trim(strip_tags( $arr['td'] )),
    ];
    $adminEmail = 'huynhhao792002@gmail.com'; //Gửi thư đến ban quản trị
    Mail::mailer('smtp')->to( $adminEmail )->send(new Contact($lienhe));
    Session::put('sendct',1); // Neu bang` 1 gui alert gui mail thanh cong
    return redirect()->route('contacts');
  })->name('sendcontact');

