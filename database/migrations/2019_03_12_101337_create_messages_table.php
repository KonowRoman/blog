<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content'); // Создали атрибут под текст сообщения

           /* // НАЧАЛО БЛОКА ИЗМЕНЕНИЙ
            $table->bigInteger('user_id')  // Атрибут user_id
                  ->unsigned();                 // беззнакового целого типа
            //$table->engine = 'InnoDB';        // Тип таблицы
            //$table->index('manufacturer_id'); // Индексация user_id
            $table->foreign('user_id')  // Создание внешнего ключа,
                  ->references('id')            // ссылающегося на атрибут id
                  ->on('users')         // в таблице users,
                  ->onDelete('CASCADE')         // разрешающего удалять
                                                // производителя
                                                // вместе с сопоставленными продуктами
                  ->onUpdate('RESTRICT')        // и запрещающим изменение id
                                                // в users
            ;
            // КОНЕЦ БЛОКА ИЗМЕНЕНИЙ*/

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
