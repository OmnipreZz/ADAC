<div class="container-fluid">
@if (isset($categories)) 


    @if (isset($categories))   
    @foreach ($categories as $cat)
        <div class="my-1">
            <button class="btn btdesign text-white" type="button" data-toggle="collapse" data-target="#collapse{{$cat->id}}" aria-expanded="false" aria-controls="collapse">{{$cat->name}}</button>
        </div>
        <div class="collapse text-left" id="collapse{{$cat->id}}">
            <ul>
                @foreach ($cat->subcategories()->get() as $subcat)
                    <li>
                        <a href="{{ route('posts_from', $subcat->id) }}">{{$subcat->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
    @else
        La variable $categories n'a pas étée passée à cette page
    @endif

    <hr>

    <div class="my-1">
        <form method="POST" action="{{ route('postSearch') }}" aria-label="">
                        @csrf

                        <div class="form-group">

                                <input id="word" type="text" class="form-control" name="word" required autofocus placeholder="Saisir un mot clé">

                        </div>

                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Chercher
                                </button>
                        </div>
    </div>

@endif
</div>