<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demande de recherche</title>
</head>
    <body>
        <h1> Remplissez le formulaire suivant pour effectuer une demande de recherche:</h1>
        <form method="post" action="contact@cgep93.org.">
            <label>Etes vous un adérant?</label> <br>
                <div class="radio">
                        <label>
                            <input type="radio" name="membre" id="sexe-oui" value="oui">
                            oui
                        </label>
                </div>
                <div class="radio">
                        <label>
                            <input type="radio" name="membre" id="sexe-non" value="non">
                            non
                        </label>
                </div>
                    <label>Quel est votre prénom?</label> <br>
                    <input type="text"name="prenom" id="prenom" /> <br>

                    <label>Quel est votre nom? *</label> <br>
                    <input type="text"name="nom" id="nom" required /> <br>
                
                    <label>Quel est le nom de l'ancêtre souhaitez vous que nous recherchions?</label> <br>
                    <input type="text" name="nom-ancetre" id="nom-ancetre" required> <br>

                    <label>Quel est le prénom de l'ancêtre souhaitez vous que nous recherchions?</label> <br>
                    <input type="text" name="prenom-ancetre" id="prenom-ancetre"> <br>

                    <label>Où il / elle a -t-il / elle vécu?</label> <br>
                    <input type="text" name="lieu-ancetre" id="lieu-ancetre"> <br>

                    <label>Où il / elle a -t-il / elle né(e)?</label> <br>
                    <input type="text" name="lieu-naissance-ancetre" id="lieu-naissance-ancetre"> <br>

                    <label>Vers quelle année est-t-il/elle né(e)?</label> <br>
                    <input type="text" name="naissance-ancetre" id="naissance-ancetre"> <br>
                
                    <label>Avez-vous d'autres informations à nous communiquer</label> <br>
                    <textarea cols="30" rows="10" name="message" id="message"></textarea> <br>

                <button type="submit">Submit</button>
        </form>
        Les champs avec une astérisques (*) sont obligatoires. <br>
        Nous les utiliserons pour communiquer avec vous.
    </body>
</html>