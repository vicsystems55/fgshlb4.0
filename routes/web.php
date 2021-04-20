<?php
  use App\Http\Controllers\LanguageController;
  //use App\Http\Controllers\StorageFileController;
  use App\Http\Controllers\DocumentUploadController;
 

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


// Route url

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/', function(){
  return redirect('/login');
});



// Route Dashboards
Route::get('/dashboard-analytics', 'DashboardController@dashboardAnalytics');

// Route Components
Route::get('/sk-layout-2-columns', 'StaterkitController@columns_2');
Route::get('/sk-layout-fixed-navbar', 'StaterkitController@fixed_navbar');
Route::get('/sk-layout-floating-navbar', 'StaterkitController@floating_navbar');
Route::get('/sk-layout-fixed', 'StaterkitController@fixed_layout');

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/modern-admin', 'AccessController@home')->middleware('permissions:approve-post');

// Auth::routes();

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);


Route::group(['middleware' => ['auth','superadmin'], 'prefix' => 'superadmin'], function(){

  Route::get('/', 'SuperAdminPageController@index')->name('superadmin');

  Route::get('/roles', 'SuperAdminPageController@roles')->name('super-admin.roles');

  Route::post('/delete_role', 'SuperAdminPageController@delete')->name('superadmin.delete_role');

  Route::get('/roles/{email}', 'SuperAdminPageController@single_role')->name('superadmin.singlerole');

  Route::post('/create_role', 'CreateRolesController@store')->name('super-admin.create_role');

});


Route::group(['middleware' => ['auth','es'], 'prefix' => 'es'], function(){

  Route::get('/', 'ESPageController@index')->name('es');

  Route::get('/registrations', 'ESPageController@all_accounts')->name('es.registrations');

  Route::get('/single_account/{id}', 'ESPageController@single_account')->name('es.single_account');

  Route::get('/applications', 'ESPageController@all_applications')->name('es.applications');

  Route::get('/single_application/{slug}', 'ESPageController@single_application')->name('es.single_application');

  Route::get('/staff', 'ESPageController@index')->name('es.staff');

  Route::get('/notifications', 'ESPageController@index')->name('es.notifications');

  Route::get('/settings', 'ESPageController@settings')->name('es.settings');

  Route::post('/esregistry/approve', 'ESRegistryConfirmation@es_approve')->name('es.approve');

  Route::post('/esregistry/disapprove', 'ESRegistryConfirmation@es_disapprove')->name('es.disapprove');

});


Route::group(['middleware' => ['auth','deskoffice'], 'prefix' => 'deskoffice'], function(){

  Route::get('/', 'DeskOfficePageController@index')->name('deskoffice');

  Route::get('/all_applications', 'DeskOfficePageController@all_applications')->name('desk.all_applications');

 // Route::get('/all_applications/single_application', 'DeskOfficePageController@single_application')->name('dk.single_application');

//  Route::get('/all_applications/single_application/{id}', 'LoanApplicationController@DeskOfficerViewApplicant')->name('dk.single_application');

 Route::get('/all_applications/single_application/{id}', 'DeskOfficePageController@single_application')->name('desk.single_application');

 Route::post('/pushed_shortlisted_success', 'LoanzApplicationController@pushed_shortlisted_box')->name('desk.pushed_shortlisted_success');



  Route::get('/settings', 'DeskOfficePageController@settings')->name('dk.settings');

  Route::get('/trail', 'DeskOfficePageController@index')->name('dk.trail');

  Route::get('/notifications', 'DeskOfficePageController@notifications')->name('dk.notifications');

  Route::get('/search', 'DeskOfficePageController@search')->name('dk.search');

  Route::get('/report', 'DeskOfficePageController@report')->name('dk.report');

  Route::get('/operations', 'DeskOfficePageController@operations')->name('operations');

  Route::get('/operations/roles', 'DeskOfficePageController@roles')->name('operations.roles');

  Route::get('/operations/singlerole', 'DeskOfficePageController@singlerole')->name('operations.singlerole');


});



Route::group(['middleware' => ['auth','accounts'], 'prefix' => 'accounts'], function(){

  Route::get('/', 'AccountsOfficePageController@index')->name('accounts');

  Route::get('/notifications', 'AccountsOfficePageController@notifications')->name('accounts.notifications');

  Route::get('/search', 'AccountsOfficePageController@search')->name('accounts.search');

  Route::get('/all_applications', 'AccountsOfficePageController@all_applications')->name('accounts.all_applications');

  Route::get('/single_application/{id}', 'AccountsOfficePageController@single_application')->name('accounts.single_application');

  Route::get('/shortlisted_box', 'AccountsOfficePageController@shortlisted_box')->name('accounts.shortlisted_box');

  Route::get('/approval_box', 'AccountsOfficePageController@approval_box')->name('accounts.approval_box');

  Route::get('/payment_approval_box', 'AccountsOfficePageController@payment_approval_box')->name('accounts.payment_approval_box');

  Route::get('/payment_approval_list', 'AccountsOfficePageController@payment_approval_list')->name('accounts.payment_approval_list');

  Route::post('/pushed_payment_box', 'LoanzApplicationController@pushed_payment_box')->name('accounts.pushed_payment_box');

});


Route::group(['middleware' => ['auth','loans_accounts'], 'prefix' => 'loans_accounts'], function(){

  Route::get('/', 'LoansAccountsPageController@index')->name('loans_accounts');

});


Route::group(['middleware' => ['auth','checking'], 'prefix' => 'checking'], function(){

  Route::get('/', 'CheckingPageController@index')->name('checking');

});

Route::group(['middleware' => ['auth','internal_auditors'], 'prefix' => 'internal_auditors'], function(){

  Route::get('/', 'InternalAuditorsPageController@index')->name('internal_auditors');

});


Route::group(['middleware' => ['auth','cpo'], 'prefix' => 'cpo'], function(){

  Route::get('/', 'CPOPageController@index')->name('cpo');

});

Route::group(['middleware' => ['auth','repayment_unit'], 'prefix' => 'repayment_unit'], function(){

  Route::get('/', 'RepaymentUnitPageController@index')->name('repayment_unit');

});

Route::group(['middleware' => ['auth','ict'], 'prefix' => 'ict'], function(){

  Route::get('/', 'ICTPageController@index')->name('ict');

});


Route::group(['middleware' => ['auth','head_of_operations'], 'prefix' => 'head_operations'], function(){

  Route::get('/', 'HeadOfOperationsPageController@index')->name('head_operations.home');
  Route::get('/notifications', 'HeadOfOperationsPageController@notifications')->name('head_operations.notifications');
  Route::get('/search', 'HeadOfOperationsPageController@search')->name('head_operations.search');
  Route::get('/all_applications', 'HeadOfOperationsPageController@all_applications')->name('hop.all_applications');
  Route::get('/single_application/{id}', 'HeadOfOperationsPageController@single_application')->name('hop.single_application');

  Route::get('/shortlisted_box', 'HeadOfOperationsPageController@shortlisted_box')->name('hop.shortlisted_box');

  Route::get('/approval_box', 'HeadOfOperationsPageController@approval_box')->name('hop.approval_box');

  Route::post('/pushed_approval_success', 'LoanzApplicationController@pushed_approval_box')->name('desk.pushed_approval_success');
  
  // Route::get('/single_applicatio/{slug}', 'HeadOfOperationsPageController@single_application')->name('head_operations.single_application');

});


Route::group(['middleware' => ['auth','es_office'], 'prefix' => 'es_office'], function(){

  Route::get('/', 'ESOfficePageController@index')->name('es_office.home');

  Route::get('/notifications', 'ESOfficePageController@notifications')->name('es_office.notifications');

  Route::get('/search', 'ESOfficePageController@search')->name('es_office.search');

  Route::get('/all_applications', 'ESOfficePageController@all_applications')->name('es_office.all_applications');

  Route::get('/single_application/{id}', 'ESOfficePageController@single_application')->name('es_office.single_application');

  Route::get('/shortlisted_box', 'ESOfficePageController@shortlisted_box')->name('es_office.shortlisted_box');

  Route::get('/approval_box', 'ESOfficePageController@approval_box')->name('es_office.approval_box');

  Route::get('/payment_approval_box', 'ESOfficePageController@payment_approval_box')->name('es_office.payment_approval_box');

  Route::get('/payment_approval_list', 'ESOfficePageController@payment_approval_list')->name('es_office.payment_approval_list');

  Route::post('/pushed_payment_box', 'LoanzApplicationController@pushed_payment_box')->name('es_office.pushed_payment_box');

  

});



Route::group(['middleware' => ['auth','user'], 'prefix' => 'user'], function(){

  Route::get('/', 'UsersPageController@index')->name('user');
  Route::get('/notifications', 'UsersPageController@notifications')->name('user.notifications');
  Route::get('/profile', 'UsersPageController@profile')->name('user.profile')->middleware(['application_stage']);
  Route::get('/profile2', 'UsersPageController@profile2')->name('user.profile2');

  Route::get('/profile3', 'UsersPageController@profile3')->name('user.profile3');

  
  Route::get('/profile/ministry', 'UsersPageController@ministry')->name('user.ministry');
  
  Route::get('/profile/agency', 'UsersPageController@agency')->name('user.agency');
  Route::get('/profile/military', 'UsersPageController@military')->name('user.military');

  Route::get('/profile/military', 'UsersPageController@military')->name('user.military');

  Route::post('/registry_submit', 'ApplicationStageController@stage1')->name('user.registry_submit');

  Route::post('/loanz_submission', 'LoanzApplicationController@store')->name('user.loanz_submission');

  Route::get('/profile3', 'UsersPageController@profile3')->name('user.profile3')->middleware(['application_stage']);
  Route::get('/view_profile', 'UsersPageController@view_profile')->name('user.view_profile');
  Route::get('/view_profile_And_Submit', 'UsersPageController@view_profile_And_Submit')->name('user.view_profile_And_Submit');
  Route::get('/uploads', 'UsersPageController@profile3')->name('user.uploads')->middleware(['application_stage']);
  Route::get('/userloans', 'UsersPageController@userloans')->name('user.userloans')->middleware(['application_stage']);
  Route::get('/userloans/loan_application', 'UsersPageController@loan_application')->name('user.loan_application')->middleware(['application_stage']);

  //get for loan application routes

});

Route::post('update_bio_data', 'PersonalInfoController@bioData')->name('update_bioData')->middleware('auth');

Route::get('edit_bio', 'PersonalInfoController@edit_bio')->name('edit_bio')->middleware('auth');

Route::get('edit_appoint/{name}', 'PersonalInfoController@edit_appoint')->name('edit_appoint')->middleware('auth');



Route::get('select_category/{name}', 'PersonalInfoController@select_category')->name('select_category')->middleware('auth');

Route::post('update_appoint_data', 'PersonalInfoController@appointData')->name('update_appointData')->middleware('auth');

Route::post('/upload_doccc/{type}','DocumentUploadController@up_doccc')->name('upload_docc')->middleware('auth');

Route::post('/edit_doccc/{type}','DocumentUploadController@edit_doccc')->name('edit_docc')->middleware('auth');

Route::post('upload_passport', 'DocumentUploadController@upload_passport')->name('upload_passport')->middleware('auth');

Route::post('edit_passport', 'DocumentUploadController@edit_passport')->name('edit_passport')->middleware('auth');

Route::post('upload_apletter', 'DocumentUploadController@upload_apletter')->name('upload_apletter')->middleware('auth');

Route::post('upload_payslip', 'DocumentUploadController@upload_payslip')->name('upload_payslip')->middleware('auth');

Route::post('upload_gazzette', 'DocumentUploadController@upload_gazzette')->name('upload_gazzette')->middleware('auth');

Route::post('upload_surety', 'DocumentUploadController@upload_surety')->name('upload_surety')->middleware('auth');

Route::post('upload_reason', 'DocumentUploadController@upload_reason')->name('upload_reason')->middleware('auth');

// NEW UPLOAD CODES


Route::post('uploadPhoto', 'DocumentUploadController@uploadPhoto')->name('uploadPhoto')->middleware('auth');

Route::post('uploadAppointment', 'DocumentUploadController@uploadAppointment')->name('uploadAppointment')->middleware('auth');

Route::post('updateLoanType', 'LoanApplicationController@updateLoanType')->name('updateLoanType')->middleware('auth');

Route::get('updateLoanType', 'LoanApplicationController@showLoan1blade')->name('updateLoanType')->middleware('auth');
//showLoan1blade

Auth::routes();

Route::get('pages-logout', 'RoutingController@logout')->name('log_me_out');



Route::get('/choose', 'ChooseRoleController@index');



Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


Route::view('/payment_success', 'pages.user.purchase_success');

// routes to display files
Route::get('image/{filename}', [DocumentUploadController::class,'getPubliclyStorgeFile'])->name('image.displayImage');

Route::get('appointment/{filename}', [DocumentUploadController::class,'getPubliclyStorgeFileAppointment'])->name('appointment.displayImage');

Route::get('/userloans/step1', 'LoanApplicationController@step1')->name('loan.step1');

Route::get('/userloans/step2', 'LoanApplicationController@step2')->name('loan.step3');

Route::get('/userloans/step3', 'LoanApplicationController@step3')->name('loan.step3');

//upload loan documents

Route::post('uploadLoanDocumentsStep1', 'DocumentUploadController@uploadLoanDocumentsStep1')->name('uploadLoanDocumentsStep1')->middleware('auth');

Route::post('uploadLoanDeclration', 'DocumentUploadController@uploadLoanDeclration')->name('uploadLoanDeclration')->middleware('auth');

Route::post('uploadCertificate', 'DocumentUploadController@uploadCertificate')->name('uploadCertificate')->middleware('auth');
// route to get all loan documents
Route::get('getLoanDocuments/{filename}', [DocumentUploadController::class,'getPubliclyStorgeFileLoanDocuments'])->name('loan.displayImage');


Route::view('/spinner', 'pages.user.under_processing');


Route::view('/loan_success', 'pages.user.loan_success')->name('loan_success');

Route::view('/payment_approval_success', 'pages.user.payment_approval_success')->name('payment_approval_success');



Route::view('/all_forms', 'pages.user.all_forms');

Route::view('/print_out', 'pages.user.print_out');


Route::get('/userloansapply/step1', 'LoanApplicationController@stepApplyforLoan')->name('loan.applyloan')->middleware(['auth', 'application_stage']);

Route::get('/userloans/step1', 'LoanApplicationController@step1')->name('loan.step1')->middleware(['auth', 'application_stage']);

Route::get('/userloans/step2', 'LoanApplicationController@step2')->name('loan.step3')->middleware(['auth', 'application_stage']);

Route::get('/userloans/step3', 'LoanApplicationController@step3')->name('loan.step3')->middleware(['auth', 'application_stage']);

Route::get('/submitApplication', 'LoanApplicationController@submitApplication')->name('loan.submit')->middleware(['auth', 'application_stage']);

// new route second step loan 2
Route::get('/userloans/secondupload', 'LoanApplicationController@uploadstep2')->name('user.loanstep2')->middleware(['auth', 'application_stage']);


Route::post('updateLoanType', 'LoanApplicationController@updateLoanType')->name('updateLoanType')->middleware('auth');

Route::get('updateLoanType', 'LoanApplicationController@PreviousButtonForupdateLoanType')->name('updateLoanType')->middleware(['auth', 'application_stage']);


// new routes
Route::get('ReturnAllLoanFromMinistry', 'UsersPageController@ReturnAllLoanFromMinistry')->name('ReturnAllLoanFromMinistry')->middleware('auth');

Route::get('ReturnAllLoanFromMortgage', 'UsersPageController@ReturnAllLoanFromMortgage')->name('ReturnAllLoanFromMortgage')->middleware('auth');
Route::get('ReturnAllShorlistedFromMortguage', 'UsersPageController@ReturnMortgageShortListed')->name('ReturnMortgageShortListed')->middleware('auth');
Route::post('moveToShortListBox', 'LoanApplicationController@moveToShortListBox')->name('moveToShortListBox')->middleware('auth');


Route::get('ReturnAllShortListedLoans', 'UsersPageController@ReturnAllShortListedLoans')->name('ReturnAllShortListedLoans')->middleware('auth');

Route::get('/all_applications/single_application/{id}', 'LoanApplicationController@DeskOfficerViewApplicant_head')->name('dk.single_application_head');


Route::post('moveToApprovalBox', 'LoanApplicationController@moveToApprovalBox')->name('moveToApprovalBox')->middleware('auth');

Route::get('ReturnAllLoansForApproval', 'UsersPageController@ReturnAllLoansForApproval')->name('ReturnAllLoansForApproval')->middleware('auth');