<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisteredCustomerController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\InventoryManagerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route for Registered User Home Page
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route for Product Detail Page
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');

// Route for Inventory List Page
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.list');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/admin-create-staff', function () {
    return view('admin-create-staff');
})->name('admin.createStaff');

Route::get('/admin-search-staff', function () {
    return view('admin-search-staff');
})->name('admin.searchStaff');

Route::get('/admin-sales-data', function () {
    return view('admin-sales-data');
})->name('admin.viewSales');

Route::get('/admin-invoice-details', function () {
    return view('admin-invoice-details');
})->name('admin.viewInvoices');

Route::get('/admin-inventory-data', [AdminDashboardController::class, 'viewInventory'])->name('admin.viewInventory');

Route::get('/admin-dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

//Registered customer sign-up

Route::get('/customer-sign-up', function () {
    return view('customer-sign-up');
})->name('customer-sign-up');

Route::post('/customer-sign-up', [RegisteredCustomerController::class, 'customerSignUp'])->name('customerSignUp');

// Route::post('/user/sign-up', [RegisteredCustomerController::class, 'userSignUp'])->name('user.signUp');--old page
//Manage profile page
Route::get('/customer-manage-profile', function () {
    return view('customer-manage-profile');
})->name('customer-manage-profile');

Route::post('/customer-manage-profile', [RegisteredCustomerController::class, 'customerSignUp'])->name('customerManageProfile');

//Login Page

// Route::get('/login', function () {
//     return view('login'); // login view-------old page
// })->name('login');

Route::get('/customer-login', function () {
    return view('customer-login');
})->name('customer-login');

Route::post('/customer-login', [RegisteredCustomerController::class, 'customerLogin'])->name('customerLogin');

Route::post('/customer-logout', [RegisteredCustomerController::class, 'customerLogout'])->name('customerLogout');



Route::get('/inventory-manager-dashboard', [InventoryManagerController::class, 'dashboard'])->name('inventory-manager-dashboard');

Route::post('/staff/save', [StaffController::class, 'saveStaff'])->name('saveStaff');

Route::get('/admin-search-staff', [StaffController::class, 'viewStaff'])->name('admin.viewStaff');
Route::get('/admin-search-staff/search', [StaffController::class, 'searchStaff'])->name('admin.searchStaff');

Route::get('/admin-inventory-data/search', [ProductController::class, 'searchProduct'])->name('admin.searchProduct');

Route::get('/admin-invoice-details', [OrderController::class, 'viewInvoices'])->name('admin.viewInvoices');

Route::get('/customers/{customer}', [RegisteredCustomerController::class, 'show'])->name('customers.show');

// Products
Route::resource('products', ProductController::class);

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Inventory Manager View
Route::get('/inventory-manager-data', [InventoryManagerController::class, 'index'])->name('inventory.manager.data');
Route::get('/inventory-manager-dashboard', [InventoryManagerController::class, 'dashboard'])->name('inventory.manager.dashboard');

// Search route for Inventory Manager
Route::get('/inventory-manager-searchProduct', [InventoryManagerController::class, 'searchProduct'])->name('inventory.manager.searchProduct');




// Orders
Route::get('orders/pending', [OrderController::class, 'pending'])->name('orders.pending');
Route::put('orders/{order}/process', [OrderController::class, 'process'])->name('orders.process');
