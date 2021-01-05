AOS.init();

/* ---------- NAV BURGER ---------- */

$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

$('.nav-item').on('click',function(){
    $('.nav-item.active').removeClass('active')
    $(this).addClass('active')
});

/* ---------- ACCUEIL ---------- */

var parallax = document.querySelectorAll(".parallax")[0];
var anims = parallax.querySelectorAll(".anim");
document.onmousemove = function(e){
// console.log(e);
var x = e.pageX - parallax.offsetLeft;
var y = e.pageY - parallax.offsetTop;
var w = parallax.clientWidth;
var h = parallax.clientHeight;
var moveX = x/(w/2)-1;
var moveY = y/(h/2)-1;
moveX = Math.min(1,Math.max(-1,moveX));
moveY = Math.min(1,Math.max(-1,moveY));

anims.forEach(function(anim,k){
    var iX = anim.getAttribute("data-movex");
    var iY = anim.getAttribute("data-movey");
    anim.style.transform = "translate("+(moveX*iX)+"%, "+(moveY*iY)+"%)";
});
}

/* ---------- COMPETENCES ---------- */

var app = new Vue({
    el: '#app',
    data: {
        competences : []                   
    },
    mounted () {
        fetch('https://epse.wellens.cc/examen/webdev2/competence.json').then(function(response) {
            return response.json();
        }).then((data) => {
            console.log(data)
            this.competences = data
        })
    },
    
    computed: {
        filter1: function () {
        return this.competences.slice(0, 6)
        },
        filter2: function () {
        return this.competences.slice(6, 8)
        },
        filter3: function () {
        return this.competences.slice(8, 13)
        },
    }
})

/* ---------- CV ---------- */

btn1.addEventListener("click", () => {
    if(getComputedStyle(info1).display != "none"){
      info1.style.display = "none";
    } else {
      info1.style.display = "block";
    }
})
btn2.addEventListener("click", () => {
    if(getComputedStyle(info2).display != "none"){
      info2.style.display = "none";
    } else {
      info2.style.display = "block";
    }
})
btn3.addEventListener("click", () => {
    if(getComputedStyle(info3).display != "none"){
      info3.style.display = "none";
    } else {
      info3.style.display = "block";
    }
})
btn4.addEventListener("click", () => {
    if(getComputedStyle(info4).display != "none"){
      info4.style.display = "none";
    } else {
      info4.style.display = "block";
    }
})
btn5.addEventListener("click", () => {
    if(getComputedStyle(info5).display != "none"){
      info5.style.display = "none";
    } else {
      info5.style.display = "block";
    }
})
btn6.addEventListener("click", () => {
    if(getComputedStyle(info6).display != "none"){
      info6.style.display = "none";
    } else {
      info6.style.display = "block";
    }
})
btn7.addEventListener("click", () => {
    if(getComputedStyle(info7).display != "none"){
      info7.style.display = "none";
    } else {
      info7.style.display = "block";
    }
})

/* ---------- PROJET ---------- */

var gallery = $('.gallery');
    gallery.owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        autoplay: true,
        autoplayTimeout:5000,
        responsive:{
            0:{items:1},
            600:{items:1},            
            960:{items:1},
            1200:{items:1}
        }
    });

    $(".imgSmall").click(function(){		                                        
        $("#imgBig").attr("src",$(this).attr('src'));
        $("#overlay").show();
        $("#overlayContent").show();
    });

    $("#imgBig").click(function(){
        $("#imgBig").attr("src", "");
        $("#overlay").hide();
        $("#overlayContent").hide();
    });

/* ---------- VEILLE TECHNOLOGIQUE ---------- */

/* ---------- CONTACT ---------- */

new Vue({
    el: "#contact",
    data: {
        object: {
            "Nom ": "Blondiaux",
            "Prénom ": "Romuald",
            "Adresse ": "Rue du Curé 13",
            "CP + Ville ": "7850 Enghien",
            "Téléphone ": "0488/44.40.45",
        }
    }
})
    
