<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Models\Members;


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

Route::get('/welcome', [ProductController::class,'create' ])->name('welcome');

Route::get('/', function () {
    return view('home');
});

Route::post('/store', [ProductController::class,'store' ])->name('store');


Route::get('/admin', [AdminController::class,'index']);




// Route::get('/paydetail', function () {
//     return view('paydetail');
// });



// Route::post('/paydetail', function (Request $request) {
//     $email = $request->input('email');
//     $password = $request->input('password');

//     // Check if email and password match the admin credentials
//     if ($email == 'manage@gmail.com' && $password == 'Manage1234!') {
//         // Redirect to the admin page
//         return redirect('/manage')->withSuccess('Manage Your Payment Information');

//     }
//     else {
//         // Check credentials from the database
//         $user = Members::where('emailaddress', $email)->first();

//         if ($user) {
//             if (Hash::check($password, $user->password)) {

//                 return redirect('/dashboard')->with('success','See Your Payment Details');
//             }
//             else {
//                 return redirect('/paydetail')->with('error', 'Invalid password');
//             }
//         }
//         else {
//             return redirect('/paydetail')->with('error', 'User not found');
//         }
//     }

//     return redirect('/paydetail')->with('error', 'Invalid credentials');

// })->name('paydetail');

Route::get('/paydetail', [AuthController::class, 'showpaydetailForm'])->name('paydetail');
Route::post('/paydetail', [AuthController::class, 'paydetail']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('/manage', [AuthController::class, 'manage'])->name('manage');



Route::get('/update/{id}', [AuthController::class, 'update'])->name('update');


Route::put('/update/{id}', [AuthController::class, 'edit'])->name('edit');









Route::get('/adminlogin', function () {
    return view('adminlogin');
});


Route::post('/adminlogin', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Check if email and password match the admin credentials
    if ($email == 'admin@gmail.com' && $password == 'Test1234!') {
        // Redirect to the admin page
        return redirect('/admin')->withSuccess('Welcome To admin panel !!');
    }

    // Handle other login logic if needed

    // If credentials don't match, redirect back to login with an error message
    return redirect('/adminlogin')->with('error', 'Invalid credentials');
})->name('adminlogin');


Route::get('{id}/details', [ProductController::class,'details' ])->name('details');




Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/sign', [AuthController::class, 'showsignForm'])->name('sign');
Route::post('/sign', [AuthController::class, 'sign']);


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout',[AuthController::class, 'logout'] )->name('logout');


