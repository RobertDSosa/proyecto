<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\image;
class PostController extends Controller
{

    // public function __construct(){
    //     $this->middleware('can:admin.posts.index')->only('index');
    //     $this->middleware('can:admin.posts.create');
    //     $this->middleware('can:admin.posts.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.posts.destroy');

    // }

    public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(PostRequest $request)
    {
        
        
        $post = Post::create($request->all());

        if($request->file('file')){
          $url = Storage::put('posts', $request->file('file'));

           $post->image()->create([
              'url' => $url
           ]);
        }

        if($request->file('video')){
            $url2 = Storage::put('posts', $request->file('video'));
            $video_name = $request->video_name;
            $post->video()->create([
                'url' => $url2,
                'name' => $video_name
            ]);
        }

        if($request->file('audio')){
            $url3 = Storage::put('posts', $request->file('audio'));
            $audio_name= $request->audio_name;
            $post->audio()->create([
                'url' => $url3,
                'name' => $audio_name
            ]);
        }
        if($request->youtube_link){
            $youtube_link= $request->youtube_link;
            $post->video()->create([
                'youtube_link' => $youtube_link
            ]);
        }

        if($request->tags){
           $post->tags()->attach($request->tags);
        }

    

        return redirect()->route('admin.posts.edit', $post);
    }


    public function edit(Post $post)
    {
        $this->authorize('author', $post);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit',compact('post', 'categories', 'tags'));
    }

  
    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('author', $post);
        $post->update($request->all());
        if($request->file('file')){
            $url = Storage::put('posts', $request->file('file'));

            if($post->image){
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }
        }

        if($request->file('video')){
            $url2 = Storage::put('posts', $request->file('video'));
            $video_name = $request->video_name;
            var_dump($url2);
            var_dump($video_name);

            if($post->video->url){
                Storage::delete($post->video->url);

                $post->video->update([
                    'url' => $url2,
                    'name' => $video_name
                ]);
            }else{
                $post->video()->create([
                    'url' => $url2,
                    'name' => $video_name
                ]);
            }
        }
            if($request->file('audio')){
                $url3 = Storage::put('posts', $request->file('audio'));
                $audio_name = $request->audio_name;
                var_dump($url3);
                var_dump($audio_name);
    
                if($post->audio){
                    Storage::delete($post->audio->url);
    
                    $post->audio->update([
                        'url' => $url3,
                        'name' => $audio_name
                    ]);
                }else{
                    $post->audio()->create([
                        'url' => $url3,
                        'name' => $audio_name
                    ]);
                }
            }
            if($request->youtube_link){
                $youtube_link = $request->youtube_link;

                if($post->video->youtube_link){
                    $post->video->update([
                        'youtube_link' => $youtube_link
                    ]);
                }else{
                    $post->video()->create([
                        'youtube_link' => $youtube_link
                    ]);
                }
            }

        if($request->tags){
            $post->tags()->sync($request->tags);
        }
        
        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se actualizó con éxito');
    }

    public function destroy(Post $post)
    {
        $this->authorize('author', $post);
        $post->delete();
        return redirect()->route('admin.posts.index', $post)->with('info', 'El post se eliminó con éxito');

    }
}
