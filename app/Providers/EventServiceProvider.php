<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\ClientCreatedEvent' => [
            'App\Listeners\ClientPendingApprovalTaskListener',
        ],
        'App\Events\GroupCreatedEvent' => [
            'App\Listeners\GroupPendingApprovalTaskListener',
        ],
        'App\Events\BusinessCreatedEvent' => [
            'App\Listeners\BusinessPendingApprovalTaskListener',
        ],
        'App\Events\CreateLoanEvent' => [
            'App\Listeners\CreateLoanListener',
        ],
        'App\Events\LoanCreatedEvent' => [
            'App\Listeners\LoanPendingFirstApprovalTaskListener',
        ],
        'App\Events\DisburseLoanEvent' => [
            'App\Listeners\DisburseLoanListener',
        ],
        'App\Events\DisbursedLoanEvent' => [
            'App\Listeners\CreateRentAccountListener',
            'App\Listeners\CreateLoanPaymentScheduleListener',
            'App\Listeners\UpdateAccountListener',
        ],
        'App\Events\CreatedRentEvent' => [
            'App\Listeners\CreateBusinessCheckingAccountListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
