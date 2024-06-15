<?php


namespace App\Repositories;

use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    protected $model;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->paginate(10);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $article = $this->model->findOrFail($id);
        $article->update($data);
        return $article;
    }

    public function delete($id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}
