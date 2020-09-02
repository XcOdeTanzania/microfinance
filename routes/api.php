<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//user  authentication
Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::post('auth/logout', 'AuthController@logout');
Route::post('auth/refresh/token', 'AuthController@refresh');

Route::group(
    [
        'name' => 'Auth',
        'middleware' => 'auth',
    ],

    function () {
    }
);


// tasks
Route::get('tasks', ['uses' => 'TaskController@allTasks']);
Route::get('task/{taskId}', ['uses' => 'TaskController@getTask']);
Route::put('task/{taskId}', ['uses' => 'TaskController@putTask']);
Route::delete('task/{taskId}', ['uses' => 'TaskController@deleteTask']);


// users
Route::get('users', ['uses' => 'UserController@users']);
Route::get('user/{userId}', ['uses' => 'UserController@user']);


//loans
Route::post('loan', ['uses' => 'LoanController@postLoan']);
Route::get('loans/{status}', ['uses' => 'LoanController@getLoans']);
Route::get('loan/{loanId}', ['uses' => 'LoanController@getLoan']);
Route::put('loan/{loanId}', ['uses' => 'LoanController@putLoan']);
Route::delete('loan/{loanId}', ['uses' => 'LoanController@deleteLoan']);
Route::post('loan/actions/{loanId}/{status}', ['uses' => 'LoanController@approveLoan']);
Route::post('loan/disburse/{loanId}', ['uses' => 'LoanController@disburseLoan']);

//Clients
Route::post('client', ['uses' => 'ClientController@postClient']);
Route::get('clients/{status}', ['uses' => 'ClientController@getClients']);
Route::get('client/{clientId}', ['uses' => 'ClientController@getClient']);
Route::put('client/{clientId}', ['uses' => 'ClientController@putClient']);
Route::delete('client/{clientId}', ['uses' => 'ClientController@deleteClient']);
Route::get('file/{name}', ['uses' => 'ClientController@downloadFile']);
Route::post('client/loan/{clientId}', ['uses' => 'ClientController@createClientLoan']);


//Identification
Route::get('identifications', ['uses' => 'IdentificationController@getIdentifications']);
Route::post('identification/{clientId}', ['uses' => 'IdentificationController@postIdentification']);
Route::get('identification/{identificationId}', ['uses' => 'IdentificationController@getIdentification']);
Route::put('identification/{identificationId}', ['uses' => 'IdentificationController@putIdentification']);
Route::delete('identification/{identificationId}', ['uses' => 'IdentificationController@deleteIdentification']);


//kins
Route::get('kins', ['uses' => 'KinController@getKins']);
Route::post('kin/{clientId}', ['uses' => 'KinController@postKin']);
Route::get('kin/{kinId}', ['uses' => 'KinController@getKin']);
Route::put('kin/{kinId}', ['uses' => 'KinController@putKin']);
Route::delete('kin/{kinId}', ['uses' => 'KinController@deleteKin']);

//businesses
Route::get('businesses', ['uses' => 'BusinessController@getBusinesses']);
Route::post('business/{clientId}', ['uses' => 'BusinessController@postBusiness']);
Route::get('business/{businessId}', ['uses' => 'BusinessController@getBusiness']);
Route::put('business/{businessId}', ['uses' => 'BusinessController@putBusiness']);
Route::delete('business/{businessId}', ['uses' => 'BusinessController@deleteBusiness']);
Route::post('business/loan/{businessId}', ['uses' => 'BusinessController@createBusinessLoan']);

//groups
Route::get('groups', ['uses' => 'GroupController@getGroups']);
Route::post('group/{branchId}', ['uses' => 'GroupController@postGroup']);
Route::get('group/{groupId}', ['uses' => 'GroupController@getGroup']);
Route::put('group/{groupId}', ['uses' => 'GroupController@putGroup']);
Route::delete('group/{groupId}', ['uses' => 'GroupController@deleteGroup']);
Route::post('group/loan/{groupId}', ['uses' => 'GroupController@createGroupLoan']);

//branches
Route::get('branches', ['uses' => 'BranchController@getBranches']);
Route::post('branch/{companyId}', ['uses' => 'BranchController@postBranch']);
Route::get('branch/{branchId}', ['uses' => 'BranchController@getBranch']);
Route::put('branch/{branchId}', ['uses' => 'BranchController@putBranch']);
Route::delete('branch/{branchId}', ['uses' => 'BranchController@deleteBranch']);

//loan Types
Route::get('loanClassifications', ['uses' => 'LoanClassificationController@getLoanClassifications']);
Route::post('loanClassification', ['uses' => 'LoanClassificationController@postLoanClassification']);
Route::get('loanClassification/{loanClassificationId}', ['uses' => 'LoanClassificationController@getLoanClassification']);
Route::put('loanClassification/{loanClassificationId}', ['uses' => 'LoanClassificationController@putLoanClassification']);
Route::delete('loanClassification/{loanClassificationId}', ['uses' => 'LoanClassificationController@deleteLoanClassification']);

//Charges
Route::get('charges', ['uses' => 'ChargeController@getCharges']);
Route::post('charge/{loanId}', ['uses' => 'ChargeController@postCharge']);
Route::get('charge/{chargeId}', ['uses' => 'ChargeController@getCharge']);
Route::put('charge/{chargeId}', ['uses' => 'ChargeController@putCharge']);
Route::delete('charge/{chargeId}', ['uses' => 'ChargeController@deleteCharge']);

//Guarator
Route::get('guarantors', ['uses' => 'GuarantorController@getGuarantors']);
Route::post('guarantor/{loanId}', ['uses' => 'GuarantorController@postGuarantor']);
Route::get('guarantor/{guarantorId}', ['uses' => 'GuarantorController@getGuarantor']);
Route::put('guarantor/{guarantorId}', ['uses' => 'GuarantorController@putGuarantor']);
Route::delete('guarantor/{guarantorId}', ['uses' => 'GuarantorController@deleteGuarantor']);

//Collateral
Route::get('collaterals', ['uses' => 'CollateralController@getCollaterals']);
Route::post('collateral/{loanId}', ['uses' => 'CollateralController@postCollateral']);
Route::get('collateral/{collateralId}', ['uses' => 'CollateralController@getCollateral']);
Route::put('collateral/{collateralId}', ['uses' => 'CollateralController@putCollateral']);
Route::delete('collateral/{collateralId}', ['uses' => 'CollateralController@deleteCollateral']);

//LoanStatus
Route::get('loanStatus', ['uses' => 'LoanStatusController@getAllLoanStatus']);
Route::post('loanStatus', ['uses' => 'LoanStatusController@postLoanStatus']);
Route::get('loanStatus/{loanStatusId}', ['uses' => 'LoanStatusController@getLoanStatus']);
Route::put('loanStatus/{loanStatusId}', ['uses' => 'LoanStatusController@putLoanStatus']);
Route::delete('loanStatus/{loanStatusId}', ['uses' => 'LoanStatusController@deleteLoanStatus']);

//Schedules
Route::get('schedules', ['uses' => 'ScheduleController@getSchedules']);
Route::get('schedules/{loanId}', ['uses' => 'ScheduleController@getSingleLoanSchedules']);
Route::get('schedule/{scheduleId}', ['uses' => 'ScheduleController@getSchedule']);
Route::put('schedule/{scheduleId}', ['uses' => 'ScheduleController@putSchedule']);
Route::delete('schedule/{scheduleId}', ['uses' => 'ScheduleController@deleteSchedule']);


//reports
Route::get('reports/{type}', ['uses' => 'ReportController@getReports']);


//Guards
Route::get('guards', ['uses' => 'GuardController@getGuards']);
Route::post('role/guard', ['uses' => 'GuardController@addGuardToRole']);


//Roles
Route::get('roles', ['uses' => 'RoleController@getRoles']);
Route::post('user/role', ['uses' => 'RoleController@addRoleToUser']);


// rentAccounts
Route::get('rentAccounts', ['uses' => 'RentAccountController@allRentAccounts']);
Route::post('rentAccount', ['uses' => 'RentAccountController@postRentAccount']);
Route::get('rentAccount/{rentAccountId}', ['uses' => 'RentAccountController@getRentAccount']);
Route::put('rentAccount/{rentAccountId}', ['uses' => 'RentAccountController@putRentAccount']);
Route::delete('rentAccount/{rentAccountId}', ['uses' => 'RentAccountController@deleteRentAccount']);



//accounts
Route::get('accounts', ['uses' => 'AccountController@getAccounts']);
Route::post('account/{branchId}', ['uses' => 'AccountController@postAccount']);
Route::get('account/{accountId}', ['uses' => 'AccountController@getAccount']);
Route::put('account/{accountId}', ['uses' => 'AccountController@putAccount']);
Route::delete('account/{accountId}', ['uses' => 'AccountController@deleteAccount']);

//reconciliations
Route::get('reconciliations', ['uses' => 'ReconciliationController@getReconciliations']);
Route::post('reconciliation/{loanId}', ['uses' => 'ReconciliationController@postReconciliation']);
Route::get('reconciliation/{reconciliationId}', ['uses' => 'ReconciliationController@getReconciliation']);
Route::put('reconciliation/{reconciliationId}', ['uses' => 'ReconciliationController@putReconciliation']);
Route::delete('reconciliation/{reconciliationId}', ['uses' => 'ReconciliationController@deleteReconciliation']);


///products
Route::get('products', ['uses' => 'ProductController@getProducts']);
Route::post('product', ['uses' => 'ProductController@postProduct']);
Route::get('product/{productId}', ['uses' => 'ProductController@getProduct']);
Route::put('product/{productId}', ['uses' => 'ProductController@putProduct']);
Route::delete('product/{productId}', ['uses' => 'ProductController@deleteProduct']);

///grouploans
Route::get('groupLoans', ['uses' => 'GroupLoanController@getGroupLoans']);
Route::post('groupLoan', ['uses' => 'GroupLoanController@postGroupLoan']);
Route::get('groupLoan/{groupLoanId}', ['uses' => 'GroupLoanController@getGroupLoan']);
Route::put('groupLoan/{groupLoanId}', ['uses' => 'GroupLoanController@putGroupLoan']);
Route::delete('groupLoan/{groupLoanId}', ['uses' => 'GroupLoanController@deleteGroupLoan']);


///repaymentsummaries
Route::get('repaymentSummaries', ['uses' => 'RepaymentSummaryController@getRepaymentSummaries']);
Route::post('repaymentSummary', ['uses' => 'RepaymentSummaryController@postRepaymentSummary']);
Route::get('repaymentSummary/{repaymentSummaryId}', ['uses' => 'RepaymentSummaryController@getRepaymentSummary']);
Route::put('repaymentSummary/{repaymentSummaryId}', ['uses' => 'RepaymentSummaryController@putRepaymentSummary']);
Route::delete('repaymentSummary/{repaymentSummaryId}', ['uses' => 'RepaymentSummaryController@deleteRepaymentSummary']);
