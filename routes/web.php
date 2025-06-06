    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ActivityController;
    use App\Http\Controllers\RoomController;
    
    Route::get('/', function () {
        return view('miranda.index');
    });
    

    Route::resource('rooms', ActivityController::class);
    Route::resource('rooms', RoomController::class);
