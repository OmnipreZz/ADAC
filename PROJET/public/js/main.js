$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$("#menu-toggle1").click(function (e) {
    e.preventDefault();
    $("#wrapper1").toggleClass("toggled1");
});

//////////////////////////////////////////////////////////////////////////////////
//          Pour la création de post et sa gestion des sous catégories          //
//////////////////////////////////////////////////////////////////////////////////

let all_subcategories = [];
let currentCategory;

function setCurrentCategory(value) {
    
    let subcategories_container = document.getElementById('subcategories_container');
    value == 'lol' ? subcategories_container.classList.add('d-none') : subcategories_container.classList.remove('d-none');
    showAndHide_subcategories(value);
}

function showAndHide_subcategories (id) {

    let all_elements = document.getElementsByClassName('childs');
    for ( let element of all_elements) {
        element.classList.add('d-none');
    }

    let tochange_elements = document.getElementsByClassName(`parent_${id}`);
    for ( let element of tochange_elements) {
        element.classList.remove('d-none');
    }
}