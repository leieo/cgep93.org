<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactez-nous</title>
</head>
<body>
    <h1> Remplissez le formulaire suivant pour nous contacter :</h1>
    <form method="post" action="contact@cgep93.org.">

        <label for="sexe">Vous êtes ...</label> <br>
                <div class="radio">
                        <label>
                            <input type="radio" name="sexe" id="sexe-1" value="homme">
                            Un homme
                        </label>
                </div>

                <div class="radio">
                        <label>
                            <input type="radio" name="sexe" id="sexe-2" value="femme">
                            Une femme
                        </label>
                </div>

                <label>Quel est votre prénom?</label> <br>
                <input type="text"name="prenom" id="prenom" /> <br>

                <label>Quel est votre nom? *</label> <br>
                <input type="text"name="nom" id="nom" required /> <br>
            
                <label>Quel est l'objet de votre message? *</label> <br>
                <input type="text" name="raison-contact" id="raison-contact" required> <br>
            
                <label> Quel est votre email? * </label> <br>
                <input type="email" name="email" id="your-email" required> <br>
            
                <label>Quel est votre message? *</label> <br>
                <textarea cols="30" rows="10" name="message" id="message" required></textarea> <br>

            <button type="submit">Submit</button>
    </form>
        Les champs avec une astérisques (*) sont obligatoires. <br>
        Nous les utiliserons pour communiquer avec vous.
    </body>
</html>