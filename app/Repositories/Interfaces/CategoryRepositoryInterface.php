<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{

    public function create($data = []);
    public function update($data = []);
    public function getAll();
    public function findById($id);
    public function destroy($id);
}
