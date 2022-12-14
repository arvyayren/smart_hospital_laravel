<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_obat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pasien')->default(0);
            $table->date('waktu');
            $table->text('alamat');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->text('list_pesanan');
            $table->bigInteger('total_biaya');
            $table->text('ket');
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
        Schema::dropIfExists('pesan_obat');
    }
}
