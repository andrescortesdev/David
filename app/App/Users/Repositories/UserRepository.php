<?php

namespace App\App\Users\Repositories;

use App\App\Users\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getById($id)
    {
        return $this->user->find($id);
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function getAllFilter($q)
    {
        return $this->user->paginate();
    }

    public function store($request)
    {

        return $this->user->create($request->all());
    }

    public function update($id, $request)
    {
        return $this->user->find($id)->update($request->all());
    }

    public function destroy($id)
    {
        return $this->user->find($id)->delete();
    }
}
