<?php
// !API User post class controller
namespace App\Http\Controllers;

use App\Models\post;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware as ControllersMiddleware;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller implements HasMiddleware
{
    // !Add sanctum middleware to controler functions
    public static function middleware()
    {
        return [new ControllersMiddleware('auth:sanctum', except: ['index', 'show'])];
    }

    // TODO: return all posts
    public function index()
    {
        return post::all();
    }

    // TODO: create new post
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);
        $post =  $request->user()->post()->create($data);
        return  $post;
    }

    // TODO: return selected post
    public function show(post $post)
    {
        return $post;
    }

    // TODO: update post
    public function update(Request $request, post $post)
    {
        // !Add security policy
        Gate::authorize('modify', $post);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);
        $post->update($data);
        return $post;
    }

    // TODO: delete post
    public function destroy(post $post)
    {
        // !Add security policy
        Gate::authorize('modify', $post);
        $post->delete();
        return ['message' => 'The post deleted successfully'];
    }
}
