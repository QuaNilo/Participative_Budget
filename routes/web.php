<?php

use App\Http\Controllers\CalendarPage;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\CitizenPending;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadMediaController;
use App\Http\Controllers\EditionsFE;
use App\Http\Controllers\FAQ;
use App\Http\Controllers\Helper;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ProposalFEController;
use App\Http\Controllers\RulesPage;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFEController;
use App\Livewire\ProposalCreateForm;
use App\Livewire\ProposalEdit;
use App\Livewire\ShowMap;
use App\Livewire\UsersProfile;
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

Route::get('/', [SiteController::class, 'index'])->name('home');

/* NÂO meti isto porque usei um middleware para fazer a validação do recaptcha ver se faz sentido usar em todo o lado isto
Route::post(\Laravel\Fortify\RoutePath::for('password.email', '/forgot-password'), [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'store'])
    ->middleware(['guest:'.config('fortify.guard')])
    ->name('password.email');*/

Route::get('/warning', [Helper::class, 'display_warning'])->name('display_warning');
Route::get('/warning/cc', [Helper::class, 'display_warning_cc'])->name('display_warning_cc');
Route::get('/warning/address', [Helper::class, 'display_warning_address'])->name('display_warning_address');

Route::get('/profile', [UserFEController::class, 'index'])->name('users_dashboard');
Route::get('/mapa/{id?}', [MapController::class, 'index'])->name('mapa');

Route::get('/editions', [EditionsFE::class, 'index'])->name('editions-fe');


Route::get('/edition/{id}', [ProposalFEController::class, 'show_frontend'])->name('propostas');
Route::post('propostas-store', [ProposalCreateForm::class, 'store'])->name('propostasFE-store');
Route::get('/propostas/create/{id}', [ProposalFEController::class, 'show_frontend_create'])->name('proposal-create');
Route::get('/edition/proposta/{id}', [ProposalFEController::class, 'show_proposal'])->name('proposta-detail');
Route::delete('/edition/proposta/remove-vote/{id}', [ProposalFEController::class, 'remove_vote'])->name('proposta-remove-vote');

Route::get('/FEproposals/{FEproposal}', [ProposalFEController::class, 'edit'])->name('FEproposals.edit');
Route::delete('/FEproposals/{FEproposal}', [ProposalFEController::class, 'destroy'])->name('FEproposals.destroy');

Route::get('/calendario', [CalendarPage::class, 'show'])->name('calendar-page');
Route::get('/regras', [RulesPage::class, 'show'])->name('rules-page');
Route::get('/FAQ', [FAQ::class, 'show'])->name('faq-page');


Route::get('/contact-us', [ContactController::class,'create'])->name('contacts.create');
Route::get('/cookies-policy', [HomeController::class,'cookies'])->name('home.cookies');
Route::get('/privacy-policy', [HomeController::class,'privacyPolicy'])->name('home.privacy_policy');
Route::get('/privacy-policy-1', [HomeController::class,'privacyPolicy'])->name('policy.show');
Route::get('/terms-of-service', [HomeController::class,'termsOfService'])->name('home.terms_of_service');
Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::post('download-single-file/{proposal}', [DownloadMediaController::class, 'download_zip'])->name('download-single-file');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin.access'
])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('citizens', App\Http\Controllers\CitizenController::class);
    Route::resource('chats', App\Http\Controllers\ChatController::class);
    Route::resource('votes', App\Http\Controllers\VoteController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);


    Route::patch('/user/profile', [App\Http\Controllers\UserController::class, 'updateMe'])->name('users.update_me');
    Route::resource('users', App\Http\Controllers\UserController::class);

    Route::impersonate();

    Route::resource('settings', App\Http\Controllers\SettingController::class);
    Route::get('translations/{groupKey?}', '\Barryvdh\TranslationManager\Controller@getIndex')->where('groupKey', '.*')->name('translations.index');
    Route::resource('demos', App\Http\Controllers\DemoController::class);
    Route::resource('proposals', App\Http\Controllers\ProposalController::class);
    Route::resource('editions', App\Http\Controllers\EditionController::class);
    Route::resource('calendar-dynamics', App\Http\Controllers\CalendarDynamicController::class);
    Route::resource('chapters', App\Http\Controllers\ChapterController::class);

    Route::resource('citizens', App\Http\Controllers\CitizenController::class);
    Route::post('/citizens/{citizen}/approve-cc/', [CitizenController::class, 'approveCc'])->name('citizens.approve_cc');
    Route::post('/citizens/{citizen}/approve-address/', [CitizenController::class, 'approveAddress'])->name('citizens.approve_address');
    Route::post('/citizens/{citizen}/reject-cc/', [CitizenController::class, 'rejectCc'])->name('citizens.reject_cc');
    Route::post('/citizens/{citizen}/reject-address/', [CitizenController::class, 'rejectAddress'])->name('citizens.reject_address');

    Route::resource('articles', App\Http\Controllers\ArticleController::class);
    Route::resource('regulations', App\Http\Controllers\RegulationController::class);
});


