<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    public function show(Tag $tag)
    {
        return view('admin.tag.show', compact('tag'));
    }

    public function update(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);

        return view('admin.tag.show', compact('tag'));
    }

    public function delete(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag.index');
    }
}
