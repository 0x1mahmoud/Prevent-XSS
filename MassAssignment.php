<?php

use App\Models\User;

User::where('email', $email)->get();
