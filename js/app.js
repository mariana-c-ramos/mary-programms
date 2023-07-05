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

var swiperBlog = new Swiper('.swiper-blog', {
    direction: 'horizontal',
    slidesPerView: 1.5,
    centeredSlides: true
});


function showText2(id_article){
    $('.section__p-blog-text').css('display', 'none');
    $('.article-'+id_article).css('display','block');
}

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

$('#aboutIconPlants').on('click', function(){

})