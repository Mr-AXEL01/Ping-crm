<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::group(["middleware" => "auth"], function () {
    Route::get("/", function (){
     return Inertia::render("Home");
    })->name("home");
});

Route::get("/login", [LoginController::class, 'create'])->name("login");
Route::post("/login", [LoginController::class, 'store']);


Route::get('/users/Index', function () {
    return Inertia::render('Users', [
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id'   => $user->id,
                'name' => $user->name,
            ]),
        'filters' => Request::only(['search'])
    ]);
});


Route::get('/users/create', function () {
    return Inertia::render('Users/create');
});
