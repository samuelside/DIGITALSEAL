 <?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\CEVController;
use App\Http\Controllers\UsagerController;
use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;



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

//-----------routes_Admin----------------------//

Route::prefix('admin')->group(function(){
Route::get('/login', [AdminController::class, 'Index'])->name('login_admin');
Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
Route::get('/logout', [AdminController::class, 'Dashboard'])->name('admin.logout')->middleware('admin');
Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');

Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');


});



//----------End routes_Admin-------------------//

//----------routes usager---------//


Route::prefix('usager')->group(function(){
    Route::get('/login', [UsagerController::class, 'show'])->name('login_user');
    Route::post('/login/owner', [UsagerController::class, 'Login'])->name('usager.login');
    Route::get('/dashboard', [UsagerController::class, 'Dashboard'])->name('usager.dashboard')->middleware('usager');
    Route::get('/logout', [UsagerController::class, 'Dashboard'])->name('usager.logout')->middleware('usager');
    Route::get('/register', [UsagerController::class, 'UsagerRegister'])->name('usager.register');
    Route::post('/register/create', [UsagerController::class, 'UsagerRegisterCreate'])->name('usager.register.create');


    });





//--------fin des routes--------///

//-----------routes Utilisateur--------//

Route::prefix('utilisateur')->group(function(){
    Route::get('/login', [UtilisateurController::class, 'Index'])->name('login_from');
    Route::post('/login/owner', [UtilisateurController::class, 'Login'])->name('utilisateur.login');
    Route::get('/dashboard', [UtilisateurController::class, 'Dashboard'])->name('utilisateur.dashboard')->middleware('utilisateur');
    Route::get('/logout', [UtilisateurController::class, 'Dashboard'])->name('utilisateur.logout')->middleware('utilisateur');
    Route::get('/register', [UtilisateurController::class, 'UtilisateurRegister'])->name('utilisateur.register');

    Route::post('/register/create', [UtilisateurController::class, 'UtilisateurRegisterCreate'])->name('utilisateur.register.create');
    Route::get('/consult',[UtilisateurController::class, 'consult'])->name('consult1');

    });






//---------End routes Utilisateur---------///

//-----demande de cev-----//
Route::get('/for', [CEVController::class, 'show'])->name('demand_CEV')->middleware('admin');
Route::post('/Doc', [CEVController::class, 'create'])->name('CEV_Doc')->middleware('admin');

Route::get('/register', [CertificateController::class, 'show_page'])->name('certificate_show');
Route::post('/register/create', [CertificateController::class, 'create_certificate'])->name('certificate_create');

//------fin de demande cev routes ---//

Route::post('/create', [CertificateController::class, 'create_certificate'])->name('liste');
Route::get('/show', [CertificateController::class, 'show_page'])->name('certificat');
Route::get('/show/one', [CertificateController::class, 'verified_page'])->name('certificat_test');
Route::post('/verified', [CertificateController::class, 'verified_certificate'])->name('certificat_verif');
Route::get('/liste', [CertificateController::class, 'show_liste'])->name('liste_certificat');
Route::post('/verified', [CEVController::class, 'verified'])->name('verifions');
Route::get('/verifions',[CEVController::class,'show_page_verification'])->name('verif');



Route::get('/', function () {
    return view('PageAcceuil');
})->name('home');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
