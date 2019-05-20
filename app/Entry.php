<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	// Разрешаем заполнять след. атрибуты в таблице БД
    protected $fillable = [
    	'title',
    	'content',
    	'user_id',
    ];
}
