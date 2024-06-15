<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ArticleController;
use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\LikeController;


    Route::apiResource('articles', ArticleController::class);
    Route::apiResource('comments', CommentController::class);
    
    Route::post('likes', [LikeController::class, 'store']);
    Route::delete('likes/{id}', [LikeController::class, 'destroy']);
    

