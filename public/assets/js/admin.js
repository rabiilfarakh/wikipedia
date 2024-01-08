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

///////////////////////////////////////////////////////////////////////////////

document.getElementById('creerC').addEventListener('click', function() {
    document.getElementById('creeCategorie').style.display = "block";
    document.getElementById("table").style.display = "none";
});

document.getElementById('fermerCC').addEventListener('click', function() {
    document.getElementById('creeCategorie').style.display = "none";
    document.getElementById("table").style.display = "block";
});

document.getElementById('modifierC').addEventListener('click', function() {
    document.getElementById('modifierCategorie').style.display = "block";
    document.getElementById("table").style.display = "none";

});

document.getElementById('fermerCM').addEventListener('click', function() {
    document.getElementById('modifierCategorie').style.display = "none";
    document.getElementById("table").style.display = "block";
    
});


modifierCategorie