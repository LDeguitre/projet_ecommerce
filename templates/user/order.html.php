<form method="post" action="index.php?controller=user&task=register">
    <div class="Titre">ADRESSE DE LIVRAISON</div>
    <div class="formulaireship">
        Adresse de livraison : <input class = formtextregister type="text" name="shipping_adress" /><br />
        Ville : <input class = formtextregister type="text" name="city" /><br />
        Pays : <input class = formtextregister type="text" name="country" /><br />
        Code Postal : <input class = formtextregister type="number" name="zip" /><br />
        Etat/Région : <input class = formtextregister type="text" name="state" /><br />
    </div>
    <h1 class="Titre">MOYEN DE PAYEMENT</h1>
    <div class = "formulairecart">
        Numéros de carte bancaire : <input class = formtextregister type="number" name="" /><br />
        Date d'expiration : <input class = formtextregister type="month" name="expiration"/><br />
        Code CVV : <input class = formtextregister type="number" name="CVV" /><br />
    </div>
</form>
<input class = buttonsub2 type="submit" name="submit" value="PAYER"/>