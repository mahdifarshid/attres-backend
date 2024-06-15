<?php

namespace App\Http\Controllers\api;

use App\Services\ArticleServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleServiceInterface $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        return $this->articleService->getAll();
    }

    public function store(Request $request)
    {
        $article = $this->articleService->create($request->all());
        // Notify admin
        // Mail::to('admin@example.com')->send(new ArticleCreated($article));
        return response()->json($article, 201);
    }

    public function show($id)
    {
        return $this->articleService->find($id);
    }

    public function update(Request $request, $id)
    {
        $article = $this->articleService->update($request->all(), $id);
        return response()->json($article, 200);
    }

    public function destroy($id)
    {
        $this->articleService->delete($id);
        return response()->json(null, 204);
    }
}
