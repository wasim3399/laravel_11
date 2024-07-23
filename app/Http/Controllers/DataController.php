<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\PostData;
use App\Enums\PostStatus;
use Carbon\CarbonImmutable;
use App\Models\Post;

class DataController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return csrf_token(); 
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
    public function store(Request $request)
    {


        $data = [
            'title' => 'Hello laravel-data',
            'body' => 'This is an introduction post for the new package',
            'status' => PostStatus::published,
            'author' => null,
        ];
        // dd(PostData::getValidationRules($request->toArray()));
        $postData = PostData::validateAndCreate($data);
dd($postData);
        // Convert PostData to array and create Post model
        Post::create($postData->toArray());
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
