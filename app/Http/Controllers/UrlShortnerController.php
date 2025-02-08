<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\UrlShortnerService;
use App\Http\Requests\UrlShortnerRequest;
use Illuminate\Http\Request;

class UrlShortnerController extends Controller
{
    protected $urlShortner;
    public function __construct(UrlShortnerService $urlShortner){
        $this->urlShortner = $urlShortner;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data= $this->urlShortner->getAllshortUrl();
            return response()->json([
                'success' => true,
                'message' => 'All Short url',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch Url.',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UrlShortnerRequest $request)
    {
        try {
            $data= $this->urlShortner->create($request->validated());
            return response()->json([
                'success' => true,
                'code' => 201,
                'message' => 'Short url Create.',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch posts.',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        try {
            $data= $this->urlShortner->show($request->id);
            return response()->json([
                'success' => true,
                'code' => 201,
                'message' => 'Short url Create.',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch posts.',
                'error' => $th->getMessage()
            ], 500);
        }
    }
    public function shortUrlshow($shortUrl)
    {
        try {
            $data= $this->urlShortner->shortUrlshow($shortUrl);
            return response()->json([
                'success' => true,
                'code' => 201,
                'message' => 'Short url Create.',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch posts.',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UrlShortner $urlShortner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UrlShortnerRequest $request)
    {
        try {
            $data= $this->urlShortner->update($request->validated(), $request->id);
            return response()->json([
                'success' => true,
                'code' => 201,
                'message' => 'Short url Updated.',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to Updated.',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $data= $this->urlShortner->destroy($request->id);
            return response()->json([
                'success' => true,
                'code' => 201,
                'message' => 'Short url Create.',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch posts.',
                'error' => $th->getMessage()
            ], 500);
        }
    }
}
