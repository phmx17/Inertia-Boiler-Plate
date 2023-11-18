<?php

use App\Models\User;
use Illuminate\Http\Request; // use this to get $request instance
//use Illuminate\Support\Facades\Request; // use this to access static functions of Request class
use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // optional; can use global helper inertia()

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

// vue pages are case sensitive with vite !

Route::get('/', function () {
//    return Inertia::render('Welcome');
    return inertia('Home'); // vue pages are case sensitive with vite !
})->name(('Home')); // can't use names with <Link> component

Route::get('/users', function(Request $request) {

    return inertia('Users/Index', [
        'users' => User::query()
        ->when($request->input('search'), function($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString()
        ->through(fn($user) =>[
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ]),
        'filters' => $request->only(['search'])
    ]);

    // bundle up an ass array
//    return inertia('Users', [
//        'users' => User::all()->map(fn($user) => [
//            'name' => $user->name,
//            'email' => $user->email,
//            'id' => $user->id,
//        ])
//    ]);
})->name('users.index');    // required for return to_route() later

Route::get('/users/create', function(){
    return inertia('Users/Create');
});

// create new user
Route::post('/users/create', function(Request $request ){
    // try - catch block to send errors is not required. This is the quick and nasty version that works just fine.
    $attributes = $request->validate([
        'name' => ['required', 'min:2', 'max:50'],
        'email' => ['required', 'max:50', 'email', 'unique:users'],
        'password' => ['required', 'min:6', 'max:50'],
    ]);

    User::create($attributes);

    return redirect()
        ->route('users.index')
        ->with(['success' => 'Success adding new User.']);

});

// this is for layout testing
Route::get('/margin', fn() => inertia('Margin'));

Route::get('/settings', function() {

    return inertia('Settings', [
        'title' => 'Settings',
        'frameworks' => ['Laravel 10', 'Vue 3', 'Inertia'],
        'time' => now()->toTimeString(),
    ]);
});

Route::post('/logout', function() {
    dd(request('name'));
});




