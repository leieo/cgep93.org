<form method="post" action="contact@cgep93.org.">
    <label>Vous êtes ...</label> <br>
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
          <input type="text"name="prenom" id="prenom" />

          <label>Quel est votre nom? *</label> <br>
          <input type="text"name="nom" id="nom" required />
      
          <label>Quel est le nom de l'ancêtre souhaitez vous que nous recherchions?</label> <br>
          <input type="text" name="nom-ancetre" id="nom-ancetre" required>

          <label>Quel est le prénom de l'ancêtre souhaitez vous que nous recherchions?</label> <br>
          <input type="text" name="prenom-ancetre" id="prenom-ancetre">

          <label>Où il / elle a -t-il / elle vécu?</label> <br>
          <input type="text" name="lieu-ancetre" id="lieu-ancetre">

          <label>Où il / elle a -t-il / elle né(e)?</label> <br>
          <input type="text" name="lieu-naissance-ancetre" id="lieu-naissance-ancetre">

          <label>Vers quelle année est-t-il/elle né(e)?</label> <br>
          <input type="text" name="naissance-ancetre" id="naissance-ancetre">
      
          <label>Avez-vous d'autres informations à nous communiquer *</label> <br>
          <textarea cols="30" rows="10" name="message" id="message" required></textarea>

        <button type="submit">Submit</button>
    </form>

    Les champs avec une astérisques (*) sont obligatoires. <br>
    Nous les utiliserons pour communiquer avec vous.