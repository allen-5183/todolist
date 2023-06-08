<?php

use App\Http\Controllers\TodoController;

// use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     // return view('welcome');
//     //第一個參數是 View 名稱
//     //第二個參數是是要傳送的資料，是一個陣列 ['todos'=> $todos]
//     $todos = Todo::orderBy('created_at', 'DESC')->get();
//     return view('welcome', ['todos' => $todos]);
// })->name("todo.index");

Route::get('/', [TodoController::class, 'list'])->name('todo.index');

Route::post(
    '/todo', function (Request $request) {

        //建立新的 Todo Model 物件，並且新增屬性 body
        $newTodo = new Todo();
        $newTodo->body = $request->todo_body;
        //使用 Model 提供的 save() 方法,將資料存至資料庫上
        $newTodo->save();

        return redirect('/');

    }
)->name("todo.store");
