$(window).on('scroll',function(){
    if($(window).scrollTop()){
        $('nav').addClass('scroll-nav');
    }else{
        $('nav').removeClass('scroll-nav')
    }
})
function screen_width(){
    console.log(window.screen.width==='765px'?2:4);
}

window.addEventListener('scroll',() =>{
    const counters = document.querySelectorAll('.counter');
    const speed = 500;
    const scroll = document.getElementById('checks').offsetTop - document.getElementById('checks').scrollHeight;
    const scrolled = window.scrollY;
    // console.log(scroll)
    // console.log(scrolled)
    if(Math.ceil(scrolled) >= scroll){
        counters.forEach(counter => {
            const updateCount = () =>{
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target/speed;
                if(count<target){
                    counter.innerHTML = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                }else{
                    count.innerText = target;
                }
            }
            updateCount();
        })
    }
})
$(document).ready(function(){
    $('.latest-updates').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        dots: true,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '50px',
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 1500
            }
        }]
    });
    $('.logos').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        slidesToShow: 4,
        slidesToScroll: 1,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    });
})

function sendEmail(){
    var name=$("#name");
    var email=$("#email");
    var phone=$("#phone");
    var subject=$("#subject");
    var body=$("#body");

    if(isNotEmpty(name) && isNotEmpty(email)&&isNotEmpty(subject)&&isNotEmpty(body)&&isNotEmpty(phone)){
        $.ajax({
            url: 'sendEmail.php',
            method: "POST",
            dataType: 'json',
            data:{
                name: name.val(),
                email:email.val(),
                subject:subject.val(),
                phone:phone.val(),
                body:body.val(),
            },
            success: function(response){
                $('#contact-form')[0].reset();
                $('.send-info').text("message send");
            }
        });
    }
    function isNotEmpty(caller){
        if(caller.val()==""){
            caller.cass("border",'1px solid red');
            return false;
        }else{
            caller.css('border','');
            return true;
        }
    }
}