<?php

namespace App\Services\Interfaces;

interface CategoryServiceInterface
{
    public function create($data = []);
    public function update($data = []);

    public function getAll();
    public function findById($id);
    public function destroy($id);
}
