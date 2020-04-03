<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use JD\Cloudder\Facades\Cloudder;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
 
        return view('articles.index', [
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        // if ( isset ( $request file('image') ) ){

        // $request->file('image')->isValid())

        // }


        $data = $request->all();
    if ($logo = $request->file('image')) {
        $image_name = $logo->getRealPath();
        // Cloudinaryへアップロード
        Cloudder::upload($image_name, null);
       
        
        // 直前にアップロードした画像のユニークIDを取得します。
        $publicId = Cloudder::getPublicId();
        // URLを生成します
        $logoUrl = Cloudder::show($publicId, [
            'width'     => 500,
            'height'    => 500
        ]);
    }

        $article = new Article;
        $auth_id = Auth::id();
        
        $article->user_id = $auth_id;
        $article->title   = $request->title;
        $article->image = $logoUrl;
        $article->img_article = $request->img_article;
        $article->movie_link = $request->movie_link;
        $article->movie_link2 = $request->movie_link2;
        $article->movie_link3 = $request->movie_link3;
        $article->movie_link4 = $request->movie_link4;
        $article->movie_link5 = $request->movie_link5;
        $article->movie_link6 = $request->movie_link6;
        $article->movie_link7 = $request->movie_link7;
        $article->movie_link8 = $request->movie_link8;
        $article->movie_link9 = $request->movie_link9;
        $article->movie_link10 = $request->movie_link10;
        $article->comment = $request->comment;
        $article->method = $request->method;
        $article->phrase = $request->phrase;
        $article->goal = $request->goal;
         
            // if( $request->file('image')){
            //     $filename = $request->file('image')->store('public/image');
            //     $article->image = basename($filename);
            // }

         
        $article->save();



        
        return redirect('articles')->with('message', '記事を追加しました。');
        //return redirect()->route('articles.index', ['id' => $request->article_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article->load('user', 'comments.user');
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $article = Article::find($id);
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request,$id)
    {

        $data = $request->all();
    if ($image = $request->file('image')) {
        $image_pass = $image->getRealPath();
        // Cloudinaryへアップロード
        Cloudder::upload($image_pass, null);
        list($width, $height) = getimagesize($image_pass);
        // 直前にアップロードした画像のユニークIDを取得します。
        $image_id = Cloudder::getPublicId();
        // URLを生成します
        $imageUrl = Cloudder::show($image_id, [
            'width'     => $width,
            'height'    => $height
        ]);
     }
     
        $article = Article::findOrFail($id);
        $auth_id = Auth::id();

        $article->user_id = $auth_id;
        $article->title   = $request->title;
        $article->image = $imageUrl;
        $article->img_article = $request->img_article;
        $article->movie_link = $request->movie_link;
        $article->movie_link2 = $request->movie_link2;
        $article->movie_link3 = $request->movie_link3;
        $article->movie_link4 = $request->movie_link4;
        $article->movie_link5 = $request->movie_link5;
        $article->movie_link6 = $request->movie_link6;
        $article->movie_link7 = $request->movie_link7;
        $article->movie_link8 = $request->movie_link8;
        $article->movie_link9 = $request->movie_link9;
        $article->movie_link10 = $request->movie_link10;
        $article->comment = $request->comment;
        $article->method = $request->method;
        $article->phrase = $request->phrase;
        $article->goal = $request->goal;

        $article->save();

        
        // $article->update($request->validated());
        // dd($article);
        return redirect()->route('articles.index');

        // $rules = [    
        //     'title' => 'required',
        //     'method'=> 'required',
        //     'phrase' => 'required',
        //     'goal'=> 'required',
        // ];

        // $validated = $this->validate($request, $rules);  

        // Article::create($validated);
        // return redirect('articles')>with('message', '編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
 
        $article->delete();
 
        return redirect('articles')->with('message','記事を削除しました。');
    }
}
