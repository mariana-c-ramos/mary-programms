//This the swiper that creates the carrossel for the text of my hobbies
var swiperAbout = new Swiper('.swiper-about', {
    direction: 'horizontal',
    slidesPerView: 1,
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
             for(i=0; i<5; i++){
                return '<img src="assets/icons/hobby-' + (index + 1) + '.png" class="' + className + '">';
            }
        },
      },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

//This the swiper for the project photos
var swiperProject = new Swiper('.swiper-project', {
    direction: 'horizontal',
    slidesPerView: 1.5,
    centeredSlides: true,
});

//This the swiper that creates my blog post carrossel
var swiperBlog = new Swiper('.swiper-blog', {
    direction: 'horizontal',
    slidesPerView: 1.5,
    centeredSlides: true
});

//Allows the user to see more on the blog post
function showText2(id_article){
    $('.section__p-blog-text').css('display', 'none');
    $('.article-'+id_article).css('display','block');
}

//Allows the user to see their password
function showPassContent() {
    var pass = document.getElementById("showPass");
    var icon = document.getElementById("iconPass");
    if (pass.type === "password") {
        pass.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        pass.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

//Stops the user from using an already registered email in a new account
function verificaEmail(){
    email_a_pesquisar = $('input[name=email').val()
    console.log(email_a_pesquisar);
    $.post('./components/verificaEmail.php', {email : email_a_pesquisar}, function(data){
        if(data != 'email disponivel'){
            $('.mensagem-email').text('Este email já se encontra em uso!');
        }
    })
};

function limpaMensagem(){
    $('.mensagem-email').text('');
};

function mudaProjecto(){
    $('#rowArea').hide()
    $('#rowProjects').css({
        "display":"flex"
    })
    $('.breadcrumbs__trail-second').html('ux >')
};

function mudaProjectoEspecifico(){
    $('#rowProjects').hide()
    $('#rowProjectsSpecific').css({
        "display":"flex"
    })
    $('.breadcrumbs__trail-third').html('project 1')
};