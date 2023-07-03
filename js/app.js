const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    slidesPerView: 1.5,
    centeredSlides: true
});

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