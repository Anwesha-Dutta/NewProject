$('.owl-carousel1').owlCarousel({
    loop:true,
    margin:25,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


$('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.owl-carousel3').owlCarousel({
    loop:false,
    margin:25,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

function show_cart()
{
    document.getElementById("cart").classList.add("active");
}

function hide_cart()
{
    document.getElementById("cart").classList.remove("active");
}


// // function toggle_cart(){
//     document.getElementById("cart").classList.toggle("active");
// }

function show_content()
{
    // document.getElementById("bar").classList.add("active");
    document.getElementById("bar").style.display="block";
}

function hide_content()
{
    // document.getElementById("bar").classList.remove("active");
    document.getElementById("bar").style.display="none";
}