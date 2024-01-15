<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsStoreRequest $request)
    {
        //
        $image = $request->file('image')->store('public/images/news');
        News::create([
            'title' => $request->name,
            'image_cover' => $request->image_cover,
            'content' => $request->content,
            'pub_date' => $request->pub_date,
        ]);

        return to_route('admin.news.index')->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $new)
    {
        //
        return view('public.news');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $new)
    {
        //
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsStoreRequest $request, News $new)
    {
        //
        $new->update($request->validated());
        return to_route('admin.news.index')->with('success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $new)
    {
        //
        $new->delete();
        return to_route('admin.news.index')->with('success', 'News deleted successfully');
    }
}
