<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->enum('alasan_cuti',['sakit','menikah','melahirkan','lainnya']);
            $table->enum('divisi',['Kepala Badan','Sekretariat','SUBAG Umum dan kepegawaian','SUBAG Perencanaan','SUBAG Keuangan','Bidang Pajak Daerah','Bidang Pengelolaan Piutang','Bidang Pengkajian Dan pengembangan','Bidang PBB dan BPHTB']);
            $table->string('alamat');
            $table->string('nip');
            $table->string('email');
            $table->string('mulai');
            $table->string('selesai');
            $table->string('status');
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
        Schema::dropIfExists('cuti');
    }
}
