/* Fonts and Icons */
    WebFont.load({
		google: {"families":["Open+Sans:300,400,600,700"]},
		custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
		active: function() {
			sessionStorage.fonts = true;
		}
	});


const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("collapsed")
});

document.querySelector(".theme-toggle").addEventListener("click",() =>{
    toggleLocalStorage();
    toggleRootClass();

});

function toggleRootClass(){
    const current = document.documentElement.getAttribute('data-bs-theme');
    const inverted = current == 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-bs-theme', inverted);
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

if (isLight()){
    toggleRootClass();
}

