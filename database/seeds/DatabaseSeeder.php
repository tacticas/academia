<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'servers',
            'roles',
            'descriptions',
            'leagues',
            'users',
            'types',
            'reviews'
        ]);

       
        // $this->call(UsersTableSeeder::class);
        $this->call(ServerSeeder::class);
        $this->call(LeagueSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DescriptionSeeder::class);
        $this->call(ReviewSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
