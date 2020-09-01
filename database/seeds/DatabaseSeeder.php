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
        $this->call(GroupsTableSeeder::class);
        $this->call(LoansTableSeeder::class);
        $this->call(SavingsTableSeeder::class);
        $this->call(FinancesTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(ChargesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(TasksTableSeeder::class);


        $this->call(LoanTypeTableSeeder::class);
        $this->call(LoanStatusTableSeeder::class);


        $this->call(LoanSummaryTableSeeder::class);
        $this->call(PrincipalsTableSeeder::class);
        $this->call(InterestsTableSeeder::class);
        $this->call(FeesTableSeeder::class);
        $this->call(PenaltiesTableSeeder::class);
        $this->call(RepaymentsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(CollateralsTableSeeder::class);
        $this->call(StandingInstructionsTableSeeder::class);
        $this->call(AuditsTableSeeder::class);
        $this->call(GroupMemberAllocationTableSeeder::class);
        $this->call(SurveysTableSeeder::class);
        $this->call(IdentificationTableSeeder::class);
        $this->call(KinsTableSeeder::class);
        $this->call(BusinessesTableSeeder::class);
        $this->call(LoansTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);

        $this->call(GuarantorsTableSeeder::class);
        $this->call(GuardsTableSeeder::class);

        $this->call(AccountsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

    }
}
