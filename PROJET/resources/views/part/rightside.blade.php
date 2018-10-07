
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
    <a href="{{route('postIndex')}}" class="btn btdesign text-white mb-1">Voir tous les posts</a><br>
    <a href="{{route('postFavorites')}}" class="btn btdesign text-white mb-1">Voir mes favoris</a><br>
    @if(in_array(Auth::user()->role_id,[1,2]))
    <hr>
    <a href="{{route('postCreate')}}" class="btn btdesign text-white mb-1">Créer un post</a><br>
    <a href="{{route('postMyPosts')}}" class="btn btdesign text-white mb-1">Voir mes posts</a><br>
    @endif

    <!-- /////////ADMIN///////// -->
    @if(Auth::user()->role_id==1)
    <hr>
    <div class="my-1">
        <button class="btn btdesign text-white" type="button" data-toggle="collapse" data-target="#collapseUser" aria-expanded="false" aria-controls="collapse">Utilisateurs
        </button>
    </div>
    <div class="collapse text-left" id="collapseUser">
            <ul>
                <li>
                    <a href="{{ route('user_index') }}" class="">Tous les utilisateurs</a>
                </li>
                <li>
                    <a href="{{ route('user_create') }}" class="">Créer un utilisateur</a>
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
                    <a href="{{route('category_index')}}" class="">Voir les catégories</a>
                </li>
                <li>
                    <a href="{{route('category_create')}}" class="">Créer une catégorie</a>
                </li>
                <li>
                    <a href="{{route('subcategory_index')}}" class="">Voir les sous-categories</a>
                </li>
                <li>
                    <a href="{{route('subcategory_create')}}" class="">Créer une sous-catégorie</a>
                </li>
            </ul>
    </div>
    @endif

</div>