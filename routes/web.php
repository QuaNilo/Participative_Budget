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
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Helper;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ProposalFEController;
use App\Http\Controllers\RulesPage;
use App\Http\Controllers\SettingController;
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

Route::get('/warning/{message}', [Helper::class, 'display_warning'])->name('display_warning');

Route::get('/perfil/dashboard', [UserFEController::class, 'show_dashboard'])->name('users_dashboard_show_dashboard');
Route::get('/perfil/propostas', [UserFEController::class, 'show_proposals'])->name('users_dashboard_show_proposals');
Route::get('/perfil/votos', [UserFEController::class, 'show_votes'])->name('users_dashboard_show_votes');
Route::get('/perfil/detalhes', [UserFEController::class, 'show_details'])->name('users_dashboard_show_details');
Route::get('/perfil/password', [UserFEController::class, 'show_password'])->name('users_dashboard_show_password');
Route::get('/mapa/{edition?}', [MapController::class, 'index'])->name('mapa');

Route::get('/edicoes', [EditionsFE::class, 'index'])->name('editions-fe');

Route::get('/edicao/{id?}', [ProposalFEController::class, 'show_frontend'])->name('propostas');
Route::post('propostas-store', [ProposalCreateForm::class, 'store'])->name('propostasFE-store');
Route::get('/propostas/create/{id}', [ProposalFEController::class, 'show_frontend_create'])->name('proposal-create');
Route::middleware(['track.views'])->get('/edition/proposta/{proposal_id}', [ProposalFEController::class, 'show_proposal'])->name('proposta-detail');
Route::delete('/edition/proposta/remove-vote/{id}', [ProposalFEController::class, 'remove_vote'])->name('proposta-remove-vote');

Route::get('/FEproposals/{FEproposal}', [ProposalFEController::class, 'edit'])->name('FEproposals.edit');
Route::delete('/FEproposals/{FEproposal}', [ProposalFEController::class, 'destroy'])->name('FEproposals.destroy');

Route::get('/calendario', [CalendarPage::class, 'show'])->name('calendar-page');
Route::get('/regras', [RulesPage::class, 'show'])->name('rules-page');
Route::get('/faq', [\App\Http\Controllers\FaqController::class, 'FEShow'])->name('faq-page');


Route::get('/contact-us', [ContactController::class,'show'])->name('contact-us');
Route::get('/cookies-policy', [HomeController::class,'cookies'])->name('home.cookies');
Route::get('/privacy-policy', [HomeController::class,'privacyPolicy'])->name('home.privacy_policy');
Route::get('/terms-of-service', [HomeController::class,'termsOfService'])->name('home.terms_of_service');

Route::post('download-files/proposal/{proposal}', [DownloadMediaController::class, 'download_zip_proposal'])->name('download-files-proposal');
Route::post('download-files/citizen/{citizen}', [DownloadMediaController::class, 'download_zip_citizen'])->name('download-files-citizen');
Route::post('change-language/{language}', [SettingController::class, 'change_language'])->name('setting.change_language');


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
    Route::post('editions/{edition}', [App\Http\Controllers\EditionController::class, 'cancel'])->name('editions.cancel');
    Route::resource('calendar-dynamics', App\Http\Controllers\CalendarDynamicController::class);

    Route::resource('chapters', App\Http\Controllers\ChapterController::class);
    Route::resource('citizens', App\Http\Controllers\CitizenController::class);
    Route::post('/citizens/pending/', [CitizenController::class, 'indexPending'])->name('citizens.index-pending');
    Route::post('/citizens/{citizen}/approve-cc/', [CitizenController::class, 'approveCc'])->name('citizens.approve_cc');
    Route::post('/citizens/{citizen}/reject-cc/', [CitizenController::class, 'rejectCc'])->name('citizens.reject_cc');
    Route::post('/citizens/{citizen}/verify-wizard', [CitizenController::class, 'showVerifyWizard'])->name('citizens.verify-wizard');

    Route::resource('articles', App\Http\Controllers\ArticleController::class);
    Route::resource('regulations', App\Http\Controllers\RegulationController::class);
    Route::resource('faq-themes', App\Http\Controllers\FaqThemeController::class);
    Route::resource('homes', App\Http\Controllers\HomeController::class);
    Route::resource('faqs', App\Http\Controllers\FaqController::class);
    Route::resource('home-bullet-points', App\Http\Controllers\HomeBulletPointsController::class);
    Route::resource('home-infos', App\Http\Controllers\HomeInfoController::class);
});






