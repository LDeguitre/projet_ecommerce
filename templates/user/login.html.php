
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="login">

        <form method="post" action="index.php?controller=user&task=login">
            <label for="chk" aria-hidden="true">S'identifier</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pwd" placeholder="Password" required="">
            <button type="submit" name="submit">Connexion</button>
        </form>

    </div>

    <div class="signup">

        <form method="post" action="index.php?controller=user&task=register">
            <label for="chk" aria-hidden="true">Inscription</label>
            <input type="text" name="name" placeholder="Nom"autofocus required=""/>
            <input type="text" name="firstName" placeholder="Prénom" required=""/>
            <input class = formtextregister type="date" min="1920-01-01" max="2022-01-26" name="birthday" required=""/>
            <input type="text" name="txt" placeholder="Pseudo" required=""/>
            <input type="email" name="email" placeholder="Email" required=""/>
            <input type="password" name="pwd" placeholder="Mot de passe" required=""/>
            <input type="password" name="confirm" placeholder="Confirmer mot de passe" required=""/>
            <button type="submit" name="submit">Inscription</button>
        </form>

    </div>
</div>