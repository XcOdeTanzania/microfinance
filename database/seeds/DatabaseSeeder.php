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
        $this->call(ContinentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(ClientsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(GuarantorsSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(LoansTableSeeder::class);
        $this->call(SavingsTableSeeder::class);
        $this->call(FinancesTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(ChargesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);

        $this->call(LoanTypeTableSeeder::class);
        $this->call(LoanStatusTableSeeder::class);


        $this->call(LoanSummaryTableSeeder::class);
        $this->call(PrincipalsTableSeeder::class);
        $this->call(InterestsTableSeeder::class);
        $this->call(FeesTableSeeder::class);
        $this->call(PenaltiesTableSeeder::class);
    }
}
