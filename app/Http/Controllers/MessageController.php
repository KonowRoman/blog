<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Выбираем все комментарии из БД
        $messages = Message::orderBy('id')->get();

        // Обрабатываем и выводим шаблон
        return view('messages.index',['messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                // Создаём пустой объект комментария
        $message = new Message();

// Выводим шаблон
        return view(
            //Имя шаблона
            'messages.create',
            // Шаблон расположен в recources/views/comments/create.blade.php)
            [
                'message'=>$message
            ]
        );
       // return 'Здесь будет форма для добавления комментария';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Извлекаем из запроса значение поля content, указанного на поле
        $attributes = $request->only(['content']);
        // Создаём кортеж в таблице messages, используя значения с формы
        Message::create($attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
