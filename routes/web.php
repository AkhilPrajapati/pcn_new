<?php

use App\Http\Controllers\Backend\AdminChairmanController;
use App\Http\Controllers\Backend\AdminDashboardController;
use App\Http\Controllers\Backend\AdminEditorController;
use App\Http\Controllers\Backend\AdminFiscalYearController;
use App\Http\Controllers\Backend\AdminMediaController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AdminRejectionController;
use App\Http\Controllers\Backend\AdminRenewController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Frontend\ChairmanController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\EditorController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JournalistController;
use App\Http\Controllers\Frontend\StaffController;
use App\Http\Controllers\Frontend\MediaController;
use App\Http\Controllers\Frontend\MyAuthController;
use App\Http\Controllers\Frontend\RenewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home']);
Route::get('/testing', [HomeController::class, 'testing']);



// START OF USER AUTH ROUTES
Route::middleware('auth', 'verified')->group(function(){
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::post('api/fetch-districts', [MediaController::class, 'fetchDistrict']);
Route::post('api/fetch-municipalities', [MediaController::class, 'fetchMunicipality']);
Route::post('api/fetch-wards', [MediaController::class, 'fetchWard']);


Route::get('/media', [MediaController::class, 'index'])->name('media_index');
Route::get('/media/create', [MediaController::class, 'create'])->name('media_create');
Route::post('/media/store', [MediaController::class, 'store'])->name('media_store');
Route::get('/media/edit/{id}', [MediaController::class, 'edit'])->name('media_edit');
Route::post('/media/update/{id}', [MediaController::class, 'update'])->name('media_update');
Route::get('/media/show/{id}', [MediaController::class, 'show'])->name('media_show');

Route::get('/journalist', [JournalistController::class, 'index'])->name('journalist');
Route::get('/journalist/create', [JournalistController::class, 'create'])->name('journalist_create');
Route::post('/journalist/store', [JournalistController::class, 'store'])->name('journalist_store');
Route::get('/journalist/edit/{id}', [JournalistController::class, 'edit'])->name('journalist_edit');
Route::post('/journalist/update/{id}', [JournalistController::class, 'update'])->name('journalist_update');
Route::post('/journalist/delete/{id}', [JournalistController::class, 'delete'])->name('journalist_delete');

Route::get('/staff', [StaffController::class, 'index'])->name('staff_index');
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff_create');
Route::post('/staff/store', [StaffController::class, 'store'])->name('staff_store');
Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('staff_edit');
Route::post('/staff/update/{id}', [StaffController::class, 'update'])->name('staff_update');
Route::get('/staff/delete/{id}', [StaffController::class, 'delete'])->name('staff_delete');

Route::get('/editor/create', [EditorController::class, 'create'])->name('editor_create');
Route::post('/editor/store', [EditorController::class, 'store'])->name('editor_store');
Route::get('/editor/edit/{id}', [EditorController::class, 'edit'])->name('editor_edit');
Route::post('/editor/update/{id}', [EditorController::class, 'update'])->name('editor_update');
Route::get('/editor/show/{id}', [EditorController::class, 'show'])->name('editor_show');

Route::get('/chairman/create', [ChairmanController::class, 'create'])->name('chairman_create');
Route::post('/chairman/store', [ChairmanController::class, 'store'])->name('chairman_store');
Route::get('/chairman/edit/{id}', [ChairmanController::class, 'edit'])->name('chairman_edit');
Route::post('/chairman/update/{id}', [ChairmanController::class, 'update'])->name('chairman_update');
Route::get('/chairman/show/{id}', [ChairmanController::class, 'show'])->name('chairman_show');


Route::get('/renew', [RenewController::class, 'index'])->name('renew_index');
Route::get('/renew/create/{id}', [RenewController::class, 'create'])->name('renew_create');
Route::post('/renew/store', [RenewController::class, 'store'])->name('renew_store');
Route::get('/renew/edit/{id}', [RenewController::class, 'edit'])->name('renew_edit');
Route::post('/renew/update/{id}', [RenewController::class, 'update'])->name('renew_update');








});//END OF USER AUTH ROUTES





// START OF ADMIN AUTH ROUTES
Route::middleware('auth', 'role:admin')->group(function(){
Route::get('/admin/dashboard', [AdminDashboardController::class, 'admin_dashboard'])->name('admin_dashboard');

Route::get('/admin/media', [AdminMediaController::class, 'index'])->name('admin_media_index');
Route::get('/admin/media/create', [AdminMediaController::class, 'create'])->name('admin_media_create');
Route::post('/admin/media/store', [AdminMediaController::class, 'store'])->name('admin_media_store');
Route::get('/admin/media/approve/{id}', [AdminMediaController::class, 'approve'])->name('admin_media_approve');
Route::post('/admin/media/approve-update/{id}', [AdminMediaController::class, 'approve_update'])->name('admin_media_approve_update');
Route::get('/admin/media/show/{id}', [AdminMediaController::class, 'show'])->name('admin_media_show');


Route::get('/admin/rejection', [AdminRejectionController::class, 'index'])->name('admin_rejection_index');
Route::get('/admin/rejection/create/{id}', [AdminRejectionController::class, 'create'])->name('admin_rejection_create');
Route::post('/admin/rejection/store', [AdminRejectionController::class, 'store'])->name('admin_rejection_store');
Route::get('/admin/rejection/delete/{id}', [AdminRejectionController::class, 'delete'])->name('admin_rejection_delete');

Route::get('admin/faq', [FaqController::class, 'index'])->name('admin_faq_index');
Route::get('admin/faq/create', [FaqController::class, 'create'])->name('admin_faq_create');
Route::post('admin/faq/store', [FaqController::class, 'store'])->name('admin_faq_store');
Route::get('admin/faq/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
Route::post('admin/faq/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
Route::get('admin/faq/delete/{id}', [FaqController::class, 'delete'])->name('admin_faq_delete');

Route::get('/admin/editor', [AdminEditorController::class, 'index'])->name('admin_editor_index');
Route::get('/admin/editor/edit/{id}', [AdminEditorController::class, 'edit'])->name('admin_editor_edit');
Route::post('/admin/editor/update/{id}', [AdminEditorController::class, 'update'])->name('admin_editor_update');
Route::get('/admin/editor/show/{id}', [AdminEditorController::class, 'show'])->name('admin_editor_show');

Route::get('/admin/chairman', [AdminChairmanController::class, 'index'])->name('admin_chairman_index');
Route::get('/admin/chairman/edit/{id}', [AdminChairmanController::class, 'edit'])->name('admin_chairman_edit');
Route::post('/admin/chairman/update/{id}', [AdminChairmanController::class, 'update'])->name('admin_chairman_update');

Route::get('/admin/fiscal-year', [AdminFiscalYearController::class, 'index'])->name('admin_fiscal_year_index');
Route::get('/admin/fiscal-year/create', [AdminFiscalYearController::class, 'create'])->name('admin_fiscal_year_create');
Route::post('/admin/fiscal-year/store', [AdminFiscalYearController::class, 'store'])->name('admin_fiscal_year_store');
Route::get('/admin/fiscal-year/edit/{id}', [AdminFiscalYearController::class, 'edit'])->name('admin_fiscal_year_edit');
Route::post('/admin/fiscal-year/update/{id}', [AdminFiscalYearController::class, 'update'])->name('admin_fiscal_year_update');




Route::get('/admin/renew', [AdminRenewController::class, 'index'])->name('admin_renew_index');
Route::get('/admin/renew/edit/{id}', [AdminRenewController::class, 'edit'])->name('admin_renew_edit');
Route::post('/admin/renew/update', [AdminRenewController::class, 'update'])->name('admin_renew_update');

Route::get('/admin/renew/edit/approve/{id}', [AdminRenewController::class, 'edit_approve'])->name('admin_renew_edit_approve');
Route::post('/admin/renew/update/approve/{id}', [AdminRenewController::class, 'update_approve'])->name('admin_renew_update_approve');
Route::post('/admin/renew/update/rejection/{id}', [AdminRenewController::class, 'update_rejection'])->name('admin_renew_update_rejection');





});//END OF ADMIN AUTH ROUTES


Route::middleware('auth')->group(function () {
    Route::get('/profile', [MyAuthController::class, 'profile_edit'])->name('profile_edit');
    Route::post('/profile', [MyAuthController::class, 'profile_update'])->name('profile_update');

    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
