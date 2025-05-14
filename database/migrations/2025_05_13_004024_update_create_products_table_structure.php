<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCreateProductsTableStructure extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Hapus kolom lama
            $table->dropColumn(['title', 'price', 'product_code', 'description']);

            // Tambah kolom baru
            $table->string('meeting_location')->nullable();
            $table->string('meeting_title')->nullable();
            $table->dateTime('meeting_time')->nullable();
            $table->string('organized_by')->nullable();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Kembalikan kolom lama
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->string('product_code')->nullable();
            $table->text('description')->nullable();

            // Hapus kolom baru
            $table->dropColumn(['meeting_location', 'meeting_title', 'meeting_time', 'organized_by']);
        });
    }
}

