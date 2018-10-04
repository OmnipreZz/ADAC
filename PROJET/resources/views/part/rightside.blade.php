

    <h3>{{Auth::user()->name}}</h3>
    <a href="{{route('postIndex')}}" class="">Voir tous les posts</a><br>
    <a href="{{route('postFavorites')}}" class="">Voir mes favoris</a><br>
    @if(in_array(Auth::user()->role_id,[1,2]))
    <a href="{{route('postCreate')}}" class="">Créer un post</a><br>
    <a href="{{route('postMyPosts')}}" class="">Voir mes posts</a><br>
    @endif
    <hr>

    <h5>Posts</h5>
    <a href="{{route('postCreate')}}" class="">Créer un post</a><br>
    <hr>
                        
    <h5>Utilisateurs</h5>
    <a href="{{ route('user_index') }}" class="">Index Utilisateurs</a><br>
    <a href="{{ route('user_create') }}" class="">Créer un Utilisateurs</a><br>
    <a href="{{ route('user_show', Auth::user()->id ) }}" class="">Voir un profil d'utilisateur</a><br>
    <hr>
                    
    <h5>Categories</h5>
    <a href="{{route('category_index')}}" class="">Index Categories</a><br>
    <a href="{{route('category_create')}}" class="">Créer une Categorie</a><br>
    <a href="{{route('category_show', 1)}}" class="">Voir une Categorie</a><br>
    <hr>
                        
    <h5>Sous catégories</h5>
    <a href="{{route('subcategory_index')}}" class="">Index Sous categories</a><br>
    <a href="{{route('subcategory_create')}}" class="">Créer une sous categorie</a><br>
    <a href="{{route('subcategory_show', 1)}}" class="">Voir une Sous categorie</a><br>
    <hr>