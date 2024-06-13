<?php

namespace App\App\Users\Interfaces;

interface UserInterface
{
    public function getById($id);
    public function getAll();
    public function getAllFilter($q);
    public function store($request);
    public function update($id, $request);
    public function destroy($id);
}
