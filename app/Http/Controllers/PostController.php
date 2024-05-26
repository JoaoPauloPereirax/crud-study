<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;//Este item teve de ser adicionado, corrigindo o bug

class PostController extends Controller
{
    public function create(Request $request ){
        $new_post = [
            'title'=> 'Minha primeira postagem',
            'content' => 'Algum texto',
            'author' => 'João Paulo'
        ];

        //FORMA MAIS CONVENCIONAL DE CRIAR UM RESGISTRO NO BANCO
        /*
        $post = new Post($new_post);
        $post->save();
        */
        $post = new Post();
        $post->title = 'Minha segunda postagem';
        $post->content = 'Algum texto';
        $post->author = 'Professor';
        $post->save();
        dd($post);
    }
    public function read(Request $r){
        $post = new Post();
        //$posts = $post->where();
        $posts = $post->find(1);//retorna o dado de id=1
        return $posts;
    }
    public function all(Request $r){
        $posts = Post::all();//Para todos os posts
        //É EXATAMENTE IGUAL A
        /*
        $post = new Post();
        $posts = $post->all();//Para todos os posts
        */
        return $posts;
    }
}
