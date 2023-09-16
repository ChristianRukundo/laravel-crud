<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use DisableForeignKeys, TruncateTable;
    public function run()
    {

        $this->DisableForeignKeys();
        $this->truncate('users');
        $users = User::factory(10)->create();
        $this->EnableForeignKeys();

    }
}
