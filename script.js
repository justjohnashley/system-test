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

/* circulation */
document.addEventListener("DOMContentLoaded", function() {
    var offcanvasElement = document.getElementById('librecs');
    var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
    
    var searchForm = document.getElementById('searchForm');
    
    offcanvasElement.addEventListener('show.bs.offcanvas', function () {
        var mainContent = document.querySelector('.main');
        mainContent.style.marginRight = '400px';
    });
    
    offcanvasElement.addEventListener('hidden.bs.offcanvas', function () {
        var mainContent = document.querySelector('.main');
        mainContent.style.marginRight = '0';
    });
    
    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        var searchInput = searchForm.querySelector('input[type="search"]');
        var searchQuery = searchInput.value.trim();
        
        if (searchQuery) {
            var redirectUrl = 'circulation2.html?searchQuery=' + encodeURIComponent(searchQuery);
            window.location.href = redirectUrl;
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    var params = new URLSearchParams(window.location.search);
    var searchQuery = params.get('searchQuery'); 

    if (searchQuery) {
        var myOffcanvasElement = document.getElementById('librecs');
        if (myOffcanvasElement) {
            var myOffcanvas = new bootstrap.Offcanvas(myOffcanvasElement);
            myOffcanvas.show(); 

            var searchDisplayElement = document.querySelector('#librecs .card-body');
            if (searchDisplayElement) {
                searchDisplayElement.innerHTML += '<p>Search query: ' + decodeURIComponent(searchQuery) + '</p>';
            }
        }
    }
});