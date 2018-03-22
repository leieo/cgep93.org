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
          <input type="text"name="prenom" id="prenom" />

          <label>Quel est votre nom? *</label> <br>
          <input type="text"name="nom" id="nom" required />
      
          <label>Quel est l'objet de votre message? *</label> <br>
          <input type="text" name="raison-contact" id="raison-contact" required>
      
          <label> Quel est votre email? * </label> <br>
          <input type="email" name="email" id="your-email" required>
      
          <label>Quel est votre message? *</label> <br>
          <textarea cols="30" rows="10" name="message" id="message" required></textarea>

        <button type="submit">Submit</button>
    </form>

    Les champs avec une astérisques (*) sont obligatoires. <br>
    Nous les utiliserons pour communiquer avec vous.