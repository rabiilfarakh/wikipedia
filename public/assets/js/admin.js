const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

document.querySelector(".theme-toggle").addEventListener("click",() => {
    toggleLocalStorage();
    toggleRootClass();
});

function toggleRootClass(){
    const current = document.documentElement.getAttribute('data-bs-theme');
    const inverted = current == 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-bs-theme',inverted);
}

function toggleLocalStorage(){
    if(isLight()){
        localStorage.removeItem("light");
    }else{
        localStorage.setItem("light","set");
    }
}

function isLight(){
    return localStorage.getItem("light");
}

if(isLight()){
    toggleRootClass();
}

//////////////////////////////////// GESTION DES CATEGORIES///////////////////////////////////////////
// ajouter categorie
document.getElementById('creerC').addEventListener('click', function() {
    document.getElementById('creeCategorie').style.display = "block";
    document.getElementById("table").style.display = "none";
});

document.getElementById('fermerCC').addEventListener('click', function() {
    document.getElementById('creeCategorie').style.display = "none";
    document.getElementById("table").style.display = "block";
});
// modifier categorie
document.getElementById('modifierC').addEventListener('click', function() {
    document.getElementById('modifierCategorie').style.display = "block";
    document.getElementById("table").style.display = "none";

});

document.getElementById('fermerCM').addEventListener('click', function() {
    document.getElementById('modifierCategorie').style.display = "none";
    document.getElementById("table").style.display = "block";
    
});
//supprimer categorie
document.getElementById('supprimerC').addEventListener('click', function() {
    document.getElementById('supprimerCategorie').style.display = "block";
    document.getElementById("table").style.display = "none";

});

document.getElementById('fermerCS').addEventListener('click', function() {
    document.getElementById('supprimerCategorie').style.display = "none";
    document.getElementById("table").style.display = "block";
    
});

//////////////////////////////////// GESTION DES TAGS///////////////////////////////////////////
// ajouter Tag
document.getElementById('creerT').addEventListener('click', function() {
    document.getElementById('creeTag').style.display = "block";
    document.getElementById("table").style.display = "none";
});

document.getElementById('fermerTC').addEventListener('click', function() {
    document.getElementById('creeTag').style.display = "none";
    document.getElementById("table").style.display = "block";
});
// modifier Tag
document.getElementById('modifierT').addEventListener('click', function() {
    document.getElementById('modifierTag').style.display = "block";
    document.getElementById("table").style.display = "none";

});

document.getElementById('fermerTM').addEventListener('click', function() {
    document.getElementById('modifierTag').style.display = "none";
    document.getElementById("table").style.display = "block";
    
});
//supprimer Tag
document.getElementById('supprimerT').addEventListener('click', function() {
    document.getElementById('supprimerTag').style.display = "block";
    document.getElementById("table").style.display = "none";

});

document.getElementById('fermerTS').addEventListener('click', function() {
    document.getElementById('supprimerTag').style.display = "none";
    document.getElementById("table").style.display = "block";
    
});
//archiver wiki
//supprimer Tag
document.getElementById('archiverW').addEventListener('click', function() {
    document.getElementById('archiverWiki').style.display = "block";
    document.getElementById("table").style.display = "none";

});

document.getElementById('fermerWA').addEventListener('click', function() {
    document.getElementById('archiverWiki').style.display = "none";
    document.getElementById("table").style.display = "block";
    
});


