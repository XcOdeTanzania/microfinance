<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreatedEvent;
use App\Events\UserCreatedEvent as EventsUserCreatedEvent;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
}
