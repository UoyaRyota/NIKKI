<div class="col-md-4 mb-3">
    <div class="card index-card" style="height: 385px;">
        <a href="{{route('articles.show',$article->id)}}" class="no-underline hover:no-underline">
            <img class="card-img-top object-cover" src="{{ isset($article->image) ? $article->image: 'https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604589833/wjenq69lvgivzbdeqkld.jpg' }}" alt="画像の登録はありません">
            <div class="card-body bg-white pb-0">
                <h5 class="card-title font-extrabold text-left pb-2">{{ $article->title }}</h5>
            </div>
        </a>
        <a href="{{ route('users.show', $article->user_id) }}" class="d-flex justify-content-end align-items-center pr-4">
            <img src="{{ isset($user->image_profile) ? $user->image_profile : 'https://res.cloudinary.com/uoyaryotanikki/image/upload/v1604589833/wjenq69lvgivzbdeqkld.jpg' }}" alt="" class="index-prof">
            <p class="card-text">{{ empty($article->user->name)? 'Guest' : $article->user->name }}</p>
        </a>
    </div>
</div>
