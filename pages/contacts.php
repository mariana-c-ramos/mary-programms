<!-- Structure for my contacts section -->
<div class="wrapper">
    <h2 class="section__title">"LOOKS LEGIT -<br>I'LL WORK WITH HER"</h2>
    <form method="post" action="components/submitForm.php" class="login__form">    
        <div class="center">
        <div class="login__input">
                <label for="name">NAME</label>
                <input type="text" name="name" required>
            </div>
            <div class="login__input">
                <label for="email">EMAIL</label>
                <input type="email" name="email" required>
            </div>
            <div class="login__input">
                <label for="topic">TOPIC</label>
                <input type="text" name="topic">
            </div>
            <div class="login__input">
                <label for="message">MESSAGE</label>
                <textarea name="message" id="" cols="30" rows="2"></textarea>
            </div>
            <button type="submit" name="send" class="btn">SUBMIT</button>
        </div>
    </form>
    <div class="socials">
        <img src="assets\icons\social-icon.png" alt="" class="social">
        <img src="assets\icons\social-icon-1.png" alt="" class="social">
        <img src="assets\icons\social-icon-2.png" alt="" class="social">
        <img src="assets\icons\social-icon-3.png" alt="" class="social">
    </div>
</div>