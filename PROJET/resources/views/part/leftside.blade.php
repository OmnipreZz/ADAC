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
                        <a href="">{{$subcat->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
    @else
        La variable $categories n'a pas étée passée à cette page
    @endif

</div>