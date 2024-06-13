<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use App\Mail\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CKEditorController;

Route::get('/', [UserController::class, 'homepage'])->name('home');
Route::get('/admin', function () {
    return view('pages.login.login');
})->name('admin');
Route::get('/about', function () {
    return view('pages.contacts.about');
})->name('about');
Route::get('/contacts', function () {
    return view('pages.contacts.contacts');
})->name('contacts');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{id?}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/list-project/{id?}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/product', [ProductController::class, 'index'])->name('product');
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
    return redirect()->back()->with('status','Gửi mail liên hệ thành công!');
  })->name('sendcontact');


Auth::routes();
//admin
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/admin/product', [App\Http\Controllers\ProductTypeController::class, 'adminShow'])->name('admin.product');
Route::get('/admin/product/{id?}', [App\Http\Controllers\ProductController::class, 'adminShowList'])->name('admin.product.list');
Route::get('/admin/product/detail/{id?}', [ProductController::class, 'details'])->name('product.details');
Route::post('/admin/product/update/{id?}', [ProductController::class, 'update'])->name('product.update');
Route::get('/admin/product/delete/{id?}', [ProductController::class, 'delete'])->name('product.delete');
Route::post('/admin/product/create/{id?}', [ProductController::class, 'create'])->name('product.store');

Route::post('/admin/productT/create', [ProductTypeController::class, 'store'])->name('productType.store');
Route::get('/admin/productT/delete/{id?}', [ProductTypeController::class, 'delete'])->name('productT.delete');

Route::get('/admin/projects', [ProjectController::class,'adminindex'] )->name('admin.proj');
Route::get('/admin/project/{id?}', [ProjectController::class, 'adminshow'])->name('admin.proj.show');
Route::post('/admin/project/create/{id?}', [ProjectController::class, 'create'])->name('admin.proj.store');
Route::get('/admin/project/delete/{id?}', [ProjectController::class, 'delete'])->name('admin.proj.delete');
Route::post('/admin/project/update/{id?}', [ProjectController::class, 'update'])->name('admin.proj.update');


Route::get('/admin/services', [ServiceController::class,'adminindex'] )->name('admin.serv');
Route::get('/admin/service/{id?}', [ServiceController::class, 'adminshow'])->name('admin.serv.show');
Route::post('/admin/service/create/{id?}', [ServiceController::class, 'create'])->name('admin.serv.store');
Route::get('/admin/service/delete/{id?}', [ServiceController::class, 'delete'])->name('admin.serv.delete');
Route::post('/admin/service/update/{id?}', [ServiceController::class, 'update'])->name('admin.serv.update');

Route::get('/admin/contacts', [ContactsController::class,'admin_index'] )->name('admin.contact');
Route::get('/admin/contacts/{id?}', [ContactsController::class,'admin_show'] )->name('admin.contact.show');
Route::get('/admin/contacts/delete/{id?}', [ContactsController::class,'delete'] )->name('admin.contact.delete');

