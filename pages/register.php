<!-- Structure for my register area -->
<div class="wrapper">
    <h2 class="section__title">DON'T HAVE AN ACCOUNT? <br>REGISTER BELLOW</h2>
    <form method="post" action="components/insereCliente.php" class="login__form">    
        <div class="center">
            <div class="login__input">
                <label for="name">FULL NAME</label>
                <input type="text" name="name" required>
            </div>
            <div class="login__input">
                <label for="email">EMAIL</label>
                <input type="email" name="email" required onfocus="limpaMensagem();" onblur="verificaEmail();">
            </div>
            <p class="mensagem-email" style="color: red;"></p>
            <div class="login__input">
                <label for="pass">PASSWORD</label>
                <div class="login__input-pass">
                <input type="password" name="pass" id="showPass" required>
                <i class="fa-regular fa-eye" style="color: #ffcc17;" onclick="showPassContent()" id="iconPass"></i>
                </div>
            </div>
            <div class="login__nav">
                <button class="btn" id="registerBtn">REGISTER</button>
                <a href="index.php?area=login">Already have an account? Login here!</a>
            </div>
        </div>
    </form>
</div>