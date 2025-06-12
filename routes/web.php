    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ActivityController;
    use App\Http\Controllers\RoomController;

    Route::get('/', function () {
        return view('miranda.index');
    });


    Route::resource('activities', ActivityController::class);
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');

    Route::view('/', 'miranda.index')->name('home');
    // Route::view('/rooms', 'miranda.rooms')->name('rooms');
    Route::view('/about', 'miranda.about')->name('about');
    Route::view('/offers', 'miranda.offers')->name('offers');
    Route::view('/contact', 'miranda.contact')->name('contact');
