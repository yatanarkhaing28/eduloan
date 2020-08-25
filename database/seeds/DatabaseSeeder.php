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
        // $this->call(UserSeeder::class);
        // $this->call(StudentTableSeeder::class);
        // $this->call(EducationTableSeeder::class);
        // $this->call(FinancialTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        // $this->call(PaymentTableSeeder::class);
        // $this->call(LoanTableSeeder::class);

    }
}
