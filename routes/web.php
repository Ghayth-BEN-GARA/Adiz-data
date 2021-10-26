<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', [SiteController::class, 'ouvrirIndex']);
    Route::match(['get', 'post'],'botman', [SiteController::class, 'chatBot']);
    Route::get('/login', [SiteController::class, 'ouvrirLogin']);
    Route::get('/forget-password', [SiteController::class, 'ouvrirForget']);
    Route::get('/signup', [SiteController::class, 'ouvrirSignup']);
    Route::get('/forum', [SiteController::class, 'ouvrirForum']);
    Route::get('/membre', [SiteController::class, 'ouvrirMembre']);
?>
