<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests\UserRequest;
use JD\Cloudder\Facades\Cloudder;
use App\Article;
use App\Like;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $auth_id = Auth::id();

        $user->user_id = $auth_id;
        $user->name   = $request->name;
        $user->img_name = $request->img_name;
        $user->password = $request->password;
        $user->occupation = $request->occupation;
        $user->email = $request->email;
        $user->self_introduction= $request->self_introduction;
        $user->post = $request->post;
        $user->favorite = $request->favorite;
        $user->save();

        
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::where('user_id', Auth::id())->get();
        // $likes = Like::with('user_id',Auth::id())->get();
        // $likes->load('article');
        

    
        // return view('users.show', compact('articles','likes'));
        return view('users.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        if ($request->file('image_profile')) {
            $data = $request->all();
            if ($logo = $request->file('image_profile')) {
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
        }
    

        $user = User::findOrFail($id);

        $user->name   = $request->name;
        $user->img_name = $request->img_name;
        $user->password = $request->password;
        $user->occupation = $request->occupation;
        $user->email = $request->email;
        $user->self_introduction= $request->self_introduction;

        if ($request->file('image_profile')) {
            $user->image_profile = $logoUrl;
        }
        
        
        $user->save();

        
      
        return view('users.edit', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
