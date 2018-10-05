
<div class="container-fluid text-center my-3">


    <div class="my-1">
        <h3 class="nameTitle shadow-sm" type="button" data-toggle="collapse" data-target="#collapseProfil" aria-expanded="false" aria-controls="collapse">{{Auth::user()->name}}</h3>
    </div>
    <div class="collapse text-left" id="collapseProfil">
            <ul>
                <li>
                    <a class="" href="{{ route('user_show', Auth::user()->id ) }}">Mon profil</a>
                </li>
                <li>
                    <a class="" href="{{ route('user_edit', Auth::user()->id ) }}">Editer mon profil</a>
                </li>
                <li>
                    <a class="" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                </li>
            </ul>
    </div>


    <hr>
    <p>Bienvenue sur le site de l'ADAC, ici tu vas te sentir bien mon gars !</p>
    <hr>
    <a href="{{route('postIndex')}}" class="">Voir tous les posts</a><br>
    <a href="{{route('postFavorites')}}" class="">Voir mes favoris</a><br>
    @if(in_array(Auth::user()->role_id,[1,2]))
    <a href="{{route('postCreate')}}" class="">Créer un post</a><br>
    <a href="{{route('postMyPosts')}}" class="">Voir mes posts</a><br>
    @endif
    <hr>

    <!-- /////////CREER POST// -->
    <a href="{{route('postCreate')}}" class="btn btdesign text-white">Créer un post</a>

    <!-- /////////ADMIN///////// -->
    <hr>
    <div class="my-1">
        <button class="btn btdesign text-white" type="button" data-toggle="collapse" data-target="#collapseUser" aria-expanded="false" aria-controls="collapse">Utilisateurs
        </button>
    </div>
    <div class="collapse text-left" id="collapseUser">
            <ul>
                <li>
                    <a href="{{ route('user_index') }}" class="">Index Utilisateurs</a>
                </li>
                <li>
                    <a href="{{ route('user_create') }}" class="">Créer un Utilisateurs</a>
                </li>
                <li>
                    <a href="{{ route('user_show', Auth::user()->id ) }}" class="">Voir un profil d'utilisateur</a>
                </li>
            </ul>
    </div>

    <div class="my-1">
        <button class="btn btdesign text-white" type="button" data-toggle="collapse" data-target="#collapseCat" aria-expanded="false" aria-controls="collapse">Catégories
        </button>
    </div>
    <div class="collapse text-left" id="collapseCat">
            <ul>
                <li>
                    <a href="{{route('category_index')}}" class="">Index Categories</a>
                </li>
                <li>
                    <a href="{{route('category_create')}}" class="">Créer une Categorie</a>
                </li>
                <li>
                    <a href="{{route('category_show', 1)}}" class="">Voir une Categorie</a>
                </li>
                <li>
                    <a href="{{route('subcategory_index')}}" class="">Index Sous categories</a>
                </li>
                <li>
                    <a href="{{route('subcategory_create')}}" class="">Créer une sous categorie</a>
                </li>
                <li>
                   <a href="{{route('subcategory_show', 1)}}" class="">Voir une Sous categorie</a>
                </li>
            </ul>
    </div>

</div>