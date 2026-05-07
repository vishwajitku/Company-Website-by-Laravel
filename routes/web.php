<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// --------------------------------------ADMIN------------------------------------------------------ 
Route::get('/admin/logout' , [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::post('/admin/login' , [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/verification' , [AdminController::class, 'ShowVerification'])->name('custom.verification.form');
Route::post('/verification/go' , [AdminController::class, 'VerificationVerify'])->name('custom.verification.verify');


// <---profile 
Route::middleware('auth')->group(function(){
    Route::get('/admin/profile' , [AdminController::class , 'AdminProfile'])->name('admin.profile');
    Route::post('/profile/store' , [AdminController::class , 'ProfileStore'])->name('profile.store');
    Route::post('admin/password/update' , [AdminController::class , 'PasswordUpdate'])->name('admin.password.update');
});

// <------ review  

Route::middleware('auth')->group(function(){
    Route::get('/all/reviews', [ReviewController::class , 'AllReview'])->name('all.review');
    Route::get('/add/reviews', [ReviewController::class , 'AddReview'])->name('add.review');
    Route::post('/review/store', [ReviewController::class , 'StoreReview'])->name('store.review');
    Route::get('/review/edit/{id}', [ReviewController::class , 'EditReview'])->name('edit.review');
    Route::post('/review/edit/store/{id}', [ReviewController::class , 'EditReviewStore'])->name('edit.review.store');
    Route::get('/review/delete/{id}', [ReviewController::class , 'DeleteReview'])->name('delete.review');
});

// <------- hero slider 
Route::middleware('auth')->group(function(){
    Route::get('/slider/view', [SliderController::class , 'SliderView'])->name('slider.view');
    Route::post('/slider/view/store', [SliderController::class , 'SliderViewStore'])->name('slider.view.store');
    Route::post('/edit-slider/{id}', [SliderController::class , 'UpdateSlider']);
});


// <--------  features setup  

Route::middleware('auth')->group(function(){
   Route::get('/features/all' , [HomeController::class , 'FeaturesAll'])->name('features.all');
   Route::get('/features/add' , [HomeController::class , 'FeaturesAdd'])->name('features.add');
   Route::post('/features/store' , [HomeController::class , 'StoreFeatures'])->name('store.features');
   Route::get('/features/edit/{id}' , [HomeController::class , 'EditFeatures'])->name('edit.feature');
   Route::post('/features/edit/store/{id}' , [HomeController::class , 'EditStoreFeatures'])->name('edit.store.features');
   Route::get('/features/delete/{id}' , [HomeController::class , 'DeleteFeature'])->name('delete.feature');
});

// <-------------- clarifies 
Route::middleware('auth')->group(function(){
   Route::get('/clarifies/add' , [HomeController::class , 'ClarifiesAdd'])->name('clarifies.add');
   Route::post('/clarifies/store' , [HomeController::class , 'StoreClarifie'])->name('store.clarifie');
});


// <-------------- clarifies 
Route::middleware('auth')->group(function(){
   Route::get('/financial/add' , [HomeController::class , 'FinancialAdd'])->name('financial.add');
   Route::post('/financial/store' , [HomeController::class , 'StoreFinancial'])->name('store.financial');
});


// <-------------- usablity 
Route::middleware('auth')->group(function(){
   Route::get('/usability/view' , [HomeController::class , 'UsabilityView'])->name('usability.view');
   Route::post('/usability/store' , [HomeController::class , 'StoreUsability'])->name('store.usability');
});


// <-------------- FAQ  
Route::middleware('auth')->group(function(){
   Route::get('/faq/view' , [HomeController::class , 'FaqView'])->name('faq.view');
   Route::get('/faq/add' , [HomeController::class , 'FaqAdd'])->name('faq.add');
   Route::post('/faq/store' , [HomeController::class , 'FaqStore'])->name('faq.store');
   Route::get('/faq/edit/{id}' , [HomeController::class , 'FaqEdit'])->name('edit.faq');
   Route::post('/faq/edit/store/{id}' , [HomeController::class , 'FaqEditStore'])->name('faq.edit.store');
   Route::get('/faq/delete/{id}' , [HomeController::class , 'FaqDelete'])->name('delete.faq');
});


// <-------------- FAQ  
Route::middleware('auth')->group(function(){
   Route::get('/ourapp/view' , [HomeController::class , 'OurappView'])->name('ourapp.view');
   Route::post('/ourapp/store' , [HomeController::class , 'OurappViewStore'])->name('ourapp.view.store');
});

// <---------------- TEMAS 
Route::middleware('auth')->group(function(){
   Route::get('/member/view' , [HomeController::class , 'MembersView'])->name('members.view');
   Route::get('/member/add' , [HomeController::class , 'MembersAdd'])->name('members.add');
   Route::post('/member/store' , [HomeController::class , 'MemberStore'])->name('store.member');
   Route::get('/member/edit/{id}' , [HomeController::class , 'MemberEdit'])->name('edit.member');
   Route::post('/member/edit/store/{id}' , [HomeController::class , 'MemberEditStore'])->name('member.edit.store');
   Route::get('/member/delete/{id}' , [HomeController::class , 'MemberDelete'])->name('delete.member');
});


// <---------------- ABout us 
Route::middleware('auth')->group(function(){
   Route::get('/about/view' , [HomeController::class , 'AboutusView'])->name('aboutus.view');
   Route::post('/about/view/store' , [HomeController::class , 'AboutusViewStore'])->name('aboutus.view.store');
 });

// <---------------- Blog - category  
Route::middleware('auth')->group(function(){
   Route::get('/category/view' , [HomeController::class , 'CategoryView'])->name('category.view');
   Route::post('/categiry/add/store' , [HomeController::class , 'CategoryAddStore'])->name('category.add.store');
   Route::get('/category/edit/{id}' , [HomeController::class , 'CategoryEdit']);
   Route::post('/category/edit/store' , [HomeController::class , 'CategoryEditSotre'])->name('category.edit.store');
   Route::get('/category/delete/{id}' , [HomeController::class , 'CategoryDelete'])->name('delete.category');
 });


//  ,-------------------- Blog - post 
Route::middleware('auth')->group(function(){
   Route::get('/post/view' , [HomeController::class , 'PostView'])->name('post.view');
   Route::get('/post/add' , [HomeController::class , 'PostAdd'])->name('post.add');
   Route::post('/post/add/store' , [HomeController::class , 'PostAddStore'])->name('post.add.store');
   Route::get('/post/edit/{id}' , [HomeController::class , 'PostEdit'])->name('edit.post');
   Route::post('/post/edit/store/{id}' , [HomeController::class , 'PostEditStore'])->name('post.edit.store');
   Route::get('/post/delete{id}' , [HomeController::class , 'PostDelete'])->name('delete.post');
 });


//  ,-------------------- Contact - 
Route::middleware('auth')->group(function(){
   Route::get('/message/view' , [HomeController::class , 'MessageView'])->name('message.view');
   Route::get('/message/delete/{id}' , [HomeController::class , 'MessageDelete'])->name('delete.contact');
 });















// <-------------------------------------------- frontend ---------------------------------------------------------
   Route::get('/teams' , [FrontendController::class , 'Teams'])->name('teams');
   Route::get('/about-us' , [FrontendController::class , 'AboutUs'])->name('about_us');
   Route::get('/privacy/terms' , [FrontendController::class , 'PrivacyTerms'])->name('privacy-terms');
   Route::get('/blog' , [FrontendController::class , 'Blog'])->name('blog');
   Route::get('/blog/details/{slug}/{id}' , [FrontendController::class , 'BlogDetails']);
   Route::get('/blog/category/{id}', [FrontendController::class, 'BlogCategory']);
   Route::get('/contact-us', [FrontendController::class, 'ContactUs'])->name('contact_us');
   Route::post('/contact/message', [FrontendController::class, 'ContactMessage'])->name('contact.message');