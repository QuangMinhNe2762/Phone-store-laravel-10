<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserService
{
    public function getAllUsers()
    {
        return User::orderby('id', 'desc')->paginate(5);
    }
    public function createUser($data)
    {
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role_as' => $data['role_as'],
            ]);
            $user->details()->create([
                'phone' => $data['phone'],
                'address' => $data['address'],
            ]);
            return true;
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return false;
        }
    }
    public function editUser($id)
    {
        $user = User::find($id);
        if ($user) {
            return $user;
        }
        return null;
    }
    public function updateUser($data, $id)
    {
        try {
            $user = User::find($id);
            if ($user) {
                $user->fill([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'role_as' => $data['role_as']
                ]);
                $user->save();
                $user->details->fill([
                    'phone' => $data['phone'],
                    'address' => $data['address'],
                ]);
                $user->details->save();
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            log::info($th->getMessage());
            return false;
        }
    }
    public function showUser($id)
    {
        $user = User::find($id);
        if ($user) {
            return $user;
        }
        return null;
    }
    public function searchUser($search)
    {
        if ($search == 'all') {
            return User::orderby('id', 'desc')->paginate(5);
        }
        $users = User::where('id', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->paginate(5);
        if (count($users) > 0) {
            return $users;
        } else {
            if (strcmp($search, 'admin') == 0) {
                $users = User::where('role_as', 1)->paginate(5);
                return $users;
            } elseif (strcmp($search, 'user') == 0) {
                $users = User::where('role_as', 0)->paginate(5);
                return $users;
            } else {
                return null;
            }
        }
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return true;
        }
        return false;
    }
}
