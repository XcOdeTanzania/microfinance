<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreatedRentEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $rent;
    public $loan_id;
    public $pay_balance;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($rent, $loan_id, $pay_balance)
    {
        $this->rent = $rent;
        $this->loan_id = $loan_id;
        $this->pay_balance = $pay_balance;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
