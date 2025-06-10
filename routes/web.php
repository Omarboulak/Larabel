    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ActivityController;
    use App\Http\Controllers\RoomController;

    Route::get('/', function () {
        return view('miranda.index');
    });


    Route::resource('rooms', ActivityController::class);
    Route::resource('rooms', RoomController::class);

    Route::view('/', 'miranda.index')->name('home');
    Route::view('/rooms', 'miranda.rooms')->name('rooms');
    Route::view('/about', 'miranda.about')->name('about');
    Route::view('/offers', 'miranda.offers')->name('offers');
    Route::view('/contact', 'miranda.contact')->name('contact');
