<?php

use App\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Category::create([
            'url'=>'Alimentation',
            'title' => 'Alimentation',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa harum provident necessitatibus suscipit doloremque corporis quidem iste ab nesciunt ex aut quas eaque in itaque tempora, accusantium cupiditate unde.',
        ]);
        Category::create([
            'url'=>'Batiment',
            'title' => 'Batiment',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa harum provident necessitatibus suscipit doloremque corporis quidem iste ab nesciunt ex aut quas eaque in itaque tempora, accusantium cupiditate unde.',
        ]);
        Category::create([
            'url'=>'Fabrication',
            'title' => 'Fabrication',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa harum provident necessitatibus suscipit doloremque corporis quidem iste ab nesciunt ex aut quas eaque in itaque tempora, accusantium cupiditate unde.',
        ]);
        Category::create([
            'url'=>'Service',
            'title' => 'Service',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa harum provident necessitatibus suscipit doloremque corporis quidem iste ab nesciunt ex aut quas eaque in itaque tempora, accusantium cupiditate unde.',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
