<form method="post" action="index.php?controller=user&task=register">
    <div class = "formulaire2">
        Nom :  <input class = formtextregister type="text" name="name" autofocus/><br />
        Prénom : <input class = formtextregister type="text" name="firstName" /><br />
        Pseudo : <input class = formtextregister type="text" name="pseudo" /><br />
        Date de naissance : <input class = formtextregister type="date" min="1920-01-01" max="2022-01-26" name="birthday"/><br />
        Adresse Email : <input class = formtextregister type="text" name="email" /><br />
        Mot de passe : <input class = formtextregister type="password" name="password" /><br />
        Confirmer mot de passe : <input class = formtextregister type="password" name="confirm" /><br />
        <input class = buttonsub2 type="submit" name="submit" value="S'inscrire"/>
    </div>
</form>
