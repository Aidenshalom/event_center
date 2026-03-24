    
    //Faq page
    var accord = document.getElementsByClassName("accordion");
    var i;

    for(i = 0; i < accord.length; i++)
    {
        accord[i].addEventListener("click", function () {
        this.classList.toggle("faq-active");
        this.parentElement.classList.toggle("faq-active");

        var panel = this.nextElementSibling;

        if(panel.style.display === "block")
        {
            panel.style.display = "none";
        }else{
            panel.style.display = "block";
        }
        });
    };
    
    // Dark mode
    var darkMode = localStorage.getItem('darkMode');
    var btn = document.getElementById("toggle-btn");
    var btnText = document.getElementById("btnText");
    var btnIcon = document.getElementById("btnIcon");

    const saveDarkMode = () => {
        document.body.classList.add("dark-theme");
        btnIcon.src = "images/sun.png";
        btnText.innerHTML = "light";

        localStorage.setItem('darkMode', 'enabled');
    }

    const saveLightMode = () => {
        document.body.classList.remove("dark-theme");
        btnIcon.src = "images/moon.png";
        btnText.innerHTML = "dark";

        localStorage.setItem('darkMode', 'disabled');
    }

    if(darkMode === 'enabled')
    {
        saveDarkMode();
    }

    btn.addEventListener('click', function () {
        darkMode = localStorage.getItem("darkMode");
        if(darkMode !== 'enabled'){
            saveDarkMode();
        }else{
            saveLightMode();
        }
    });

    // Date
var date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;





