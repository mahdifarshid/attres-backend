<?php

namespace App\Services;

interface ArticleServiceInterface
{
    public function getAll();
    public function find($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
}