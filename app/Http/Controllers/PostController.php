<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Jobs\UpdatePostStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redis;

class PostController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService){
        $this->postService = $postService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        UpdatePostStatus::dispatch();
        
        try {
            $posts= $this->postService->getAllPost();
            return response()->json([
                'success' => true,
                'message' => 'Failed to fetch posts.',
                'data' => $posts
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch posts.',
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
