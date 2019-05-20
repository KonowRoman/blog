<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	// Перечень атрибутов, которые разрешено заполнять в таблице БД с использованием этого класса
    protected $fillable = ['content'];
}
