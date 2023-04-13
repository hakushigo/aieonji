<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('subject'); // subject of the text
            $table->text('content'); // content of the note
            $table->string('authorkey'); // author key is a special key that let you to deactivate a letter or even delete it
            $table->string('password')->nullable()->default(null); // password is default to null, if null then the letter does not require password
            $table->enum('NoteStatus', ['active', 'inactive'])->default('active'); // wether the note is still active (a.k.a open to public) or even idk
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
        Schema::dropIfExists('table__notes');
    }
};
