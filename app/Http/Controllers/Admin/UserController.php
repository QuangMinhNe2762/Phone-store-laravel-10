<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserFormRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('Admin.Users.user', ['users' => $users, 'title' => 'Users List']);
    }

    public function create()
    {
        return view('Admin.Users.create', ['title' => 'Create User']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserFormRequest $request)
    {
        if ($this->userService->createUser($request->input())) {
            return redirect()->route('users.index')->with('success', 'User created successfully');
        }
        return redirect()->back()->with('error', 'User creation failed');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->userService->showUser($id);
        if ($user == null) {
            return redirect()->route('users.index')->with('error', 'Who deleted it :))))');
        }
        return view('Admin.Users.show', ['user' => $user, 'title' => 'User Detail']);
    }


    public function edit(string $id)
    {
        $user = $this->userService->editUser($id);
        if ($user == null) {
            return redirect()->route('users.index')->with('error', 'Who deleted it :))))');
        }
        return view('Admin.Users.edit', ['user' => $user, 'title' => 'Edit User']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role_as' => 'required',
            'phone' => 'required|max:11',
            'address' => 'required',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email has taken',
            'role_as.required' => 'Role is required',
            'phone.required' => 'Phone is required',
            'phone.max' => 'Phone length is 11',
            'address.required' => 'Address is required',
        ]);
        if ($this->userService->updateUser($request->input(), $id)) {
            return redirect()->route('users.index')->with('success', 'User edited successfully');
        }
        return redirect()->back()->with('error', 'User edition failed');
    }

    public function destroy(string $id)
    {
        if (auth()->user()->id == $id) {
            return redirect()->route('users.index')->with('error', 'You can not delete yourself');
        }
        if ($id == 1) {
            return redirect()->route('users.index')->with('error', 'You smart man :)))');
        }
        if ($this->userService->deleteUser($id)) {
            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        }
        return redirect()->route('users.index')->with('error', 'User deletion failed');
    }
    public function search($search)
    {
        $users = $this->userService->searchUser($search);
        if (count($users) > 0) {
            // return view('Admin.Users.user', ['users' => $users, 'title' => 'Users List']);
            return response()->json([
                'users' => $users,
                'error' => false,
                'check' => "user",
                'pagination' => $users->links()->toHtml(),
            ]);
        }
        return response()->json([
            'error' => true,
        ]);
    }
}
