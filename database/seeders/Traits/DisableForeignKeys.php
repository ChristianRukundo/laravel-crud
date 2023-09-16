<?php
namespace Database\Seeders\Traits;
use Illuminate\Support\Facades\DB;

trait DisableForeignKeys{
    public function DisableForeignKeys () {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
    }
    public function EnableForeignKeys () {
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
