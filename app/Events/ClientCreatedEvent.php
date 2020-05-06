<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ClientCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $client;
    public $user_id;
    public $branch_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($client, $user_id, $branch_id)
    {
        $this->client = $client;
        $this->user_id = $user_id;
        $this->branch_id = $branch_id;
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
