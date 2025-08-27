<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(
        UserRepositoryInterface $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    //
    public function index()
    {
        return view('users.index');
    }

    public function store(StoreUser $user)
    {
        $this->userRepository->create($user->validated());

        return to_route('users.index')->with('success', 'User created successfully.');
    }
}
