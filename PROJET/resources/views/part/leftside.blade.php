
@if (isset($categories)) 

    @foreach ($categories as $cat)
        <!-- <a href="{{route('category_show', $cat->id)}}">{{$cat->name}}</a> -->
        <div class="my-1">
            <button class="btn btdesign text-white" type="button" data-toggle="collapse" data-target="#collapse{{$cat->id}}" aria-expanded="false" aria-controls="collapse">{{$cat->name}}
            </button>
                <!-- bouton instruments -->
        </div>
        <div class="collapse text-left" id="collapse{{$cat->id}}">
            <ul>
                <li>
                    <a>guitare</a>
                </li>
                <li>
                    <a>basse</a>
                </li>
                <li>
                    <a>piano</a>
                </li>
                <li>
                    <a>synthe</a>
                </li>
            </ul>
        </div>
    @endforeach
    @else
    La variable $categories n'a pas étée passée à cette page
@endif
