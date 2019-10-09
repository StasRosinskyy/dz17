<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;

class TagController
{

    public function index(){
        return view('/admin/tags/tag_list', ['tags' => \App\Tag::all()]);
    }
    public function create(){
        return view('/admin/tags/tag_create');
    }
    public function store(Request $request){
        $tag = new Tag;
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();
        return redirect()->route('tags.index');
    }
    public function show(\App\Tag $tag){

    }
    public function edit(\App\Tag $tag){

    }
    public function update(\App\Tag $tag){
    }
    public function destroy(\App\Tag $tag){
        $tag->delete();
        return redirect()->route('tags.index');

    }

}
