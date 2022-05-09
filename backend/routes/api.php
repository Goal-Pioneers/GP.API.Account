<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AccountController;

    $mw_sanctum =  'auth:sanctum';


    // Account
        // Login
    Route::post( '/1.0.0/account/login', 
        [AccountController::class, 'login']
    );

        // Register / Create
    Route::post( '/1.0.0/account/create', 
        [AccountController::class, 'create']
    );

    Route::middleware( $mw_sanctum )->get( '/1.0.0/account/me', 
        [AccountController::class, 'me']
    );

        // Logout
    Route::middleware( $mw_sanctum )->get( '/1.0.0/account/logout', 
        [AccountController::class, 'logout']
    );

        // Update
    Route::middleware( $mw_sanctum )->put( '/1.0.0/account/update', 
        [AccountController::class, 'update']
    );

        // Delete
    Route::middleware( $mw_sanctum )->delete( '/1.0.0/account/delete', 
        [AccountController::class, 'delete']
    );





?>