<?php


namespace App\Repositories;

use App\Models\User;
use App\RepositoryInterfaces\UsersRepositoryInterface;

class UsersRepository implements UsersRepositoryInterface
{
    public function createUser(array $data)
    {
        return User::create($data);
    }

    public function findUserById($id)
    {
        return User::findOrFail($id);
    }

    public function updateUser($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);

        return $user;
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return $user;
    }

    public function getAllUsers()
    {
        return User::all();
    }

    public function getArchivedUsers()
    {
        return User::onlyTrashed()->get();
    }
}
