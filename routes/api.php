<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

// mặc định apiResource sẽ trỏ tới 5 hàm mặc định trong controller api
// Nếu muốn tạo ra các phương thức mới trong controller api
// thì ta phải tạo thêm các route khác để trỏ riêng tới phương thức đó
Route::apiResource('posts', PostController::class);

?>