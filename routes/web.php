<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/menu', [ProductController::class, 'index'])->name('menu');

Route::get('/rekomendasi', function () {
    $products = Product::all();
    return view('rekomendasi', compact('products'));
});

Route::get('/pesanan', function () {
    return view('pesanan');
})->name('pesanan');

Route::get('/history', [HistoryController::class, 'index'])->middleware('auth')->name('history');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add/{id}', [CartController::class, 'add']);
Route::post('/cart/remove/{id}', [CartController::class, 'remove']);
Route::post('/cart/decrease/{id}', [CartController::class, 'decrease']);
Route::post('/checkout', [CartController::class, 'checkout'])->middleware('auth');

Route::post('/midtrans/token', function () {

    $serverKey = env('MIDTRANS_SERVER_KEY');

    $payload = [
        "transaction_details" => [
            "order_id" => "ORDER-" . time(),
            "gross_amount" => 50000
        ],

        "credit_card" => [
            "secure" => true
        ],

        "customer_details" => [
            "first_name" => "Health",
            "last_name" => "Cafe",
            "email" => "healthcafe@gmail.com",
            "phone" => "08123456789"
        ]
    ];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.sandbox.midtrans.com/snap/v1/transactions',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode($serverKey . ':')
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
});

require __DIR__ . '/auth.php';
