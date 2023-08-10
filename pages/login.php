<!-- Structure for my login area -->
<?php
  if(isset($_SESSION['id_users'])){
    echo 'Olá '.$_SESSION['user_name'].'!';
  } else { ?>

<div class="wrapper">
    <h2 class="section__title">HAVE AN ACCOUNT? <br>LOGIN BELLOW</h2>
    <form method="post" action="components/verificaLogin.php" class="login__form">
        <div class="center">
            <div class="login__input">
                <label for="email">EMAIL</label>
                <input type="email" name="email">
            </div>
            <div class="login__input">
                <label for="pass">PASSWORD</label>
                <div class="login__input-pass">
                <input type="password" name="pass" id="showPass">
                <i class="fa-regular fa-eye" style="color: #ffcc17;" onclick="showPassContent()" id="iconPass"></i>
                </div>
            </div>
            <div class="login__nav">
                <button class="btn">LOGIN</button>
                <a href="index.php?area=register">Don't have an account? Register here!</a>
            </div>
        </div>
    </form>
</div>

<?php
  if(isset($_GET['login']) && $_GET['login'] = 'erro'){
    echo 'Login invalido!';
  }
?>

<?php
  }
?>
