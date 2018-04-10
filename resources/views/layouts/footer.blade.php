<footer class="bg-dark mt-5 p-5 text-white">
    <section class="row">
      <div class="col-md-4 col-sm-12">
        <h3>L'association</h3>
        <br>
        <p>
          Cercle Généalogie de l'Est Parisien<br>
          115 route de soie<br>
          Bâtiment du savoir<br>
          75008 Paris<br>
          France
        </p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h3>Le siège</h3>
        <br>
        <p>
          Le siège du Cercle Généalogie de l'Est Parisien<br>
          1000 route du Président Roosvelt<br>
          Bâtiment du Ministre de la Culture<br>
          75012 Paris<br>
          France
        </p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h3>Nous retrouver</h3>
        <br>
        <p>
		    <a class="footer-icon pt-0 fa fa-at" href="mailto:contact@cgep93.org">Envoyez nous un mail</a><br>
		    <a class="footer-icon fa fa-phone">Appellez-nous au 00.00.00.00.00</a><br>
		    <a class="footer-icon fa fa-search-plus" href="{{ Route('formsearch') }}">Vos demandes de recherches</a><br>
		    <a class="footer-icon fa fa-facebook-f" href="https://www.facebook.com" target="_blank">Facebook</a>
		</p>
		<br>
      </div>
    </section>
    <h3>Plan du site</h3>
	<section class="sitemap row">
		<div class="col-md-4 col-sm-12">
			<h6>L'association</h6>
			<ul>
				<li><a href="{{route('association')}}#statuts">Statuts</a></li>
				<li><a href="{{route('association')}}#membres_ca">Membres du CA</a></li>
				<li><a href="{{route('association')}}#reglement">Règlement intérieur</a></li>
				<li><a href="{{route('association')}}#adhesions">Adhésions</a></li><a href="">
				<li><a href="{{route('association')}}#infos">Infos pratiques</a></li>
				<li><a href="{{route('association')}}#contact">Nous contacter</a></li>
			</ul>
		</div>
		<div class="col-md-4 col-sm-12">
			<h6>Recherches</h6>
			<ul>
				<li><a href="">Généabank</a></li>
				<li><a href="">Bigenet</a></li>
				<li><a href="">Photothèque</a></li>
				<li><a href="">Trucs et astuces</a></li>
				<li><a href="">Département</a></li>
				<li><a href="">Archives</a></li>
				<li><a href="">Liens</a></li>
				<li><a href="">Recherches dans le monde</a></li>
			</ul>
		</div>
		<div class="col-md-4 col-sm-12">
			<h6>Vie associative</h6>
			<ul>
				<li><a href="">Bulletins</a></li>
				<li><a href="">Autres publications</a></li>
				<li><a href="">Génécole</a></li>
				<li><a href="">Évènements</a></li>
			</ul>
			<h6><a href="">Espace membres</a></h6>
		</div>
	</section>
	<div class="col-md-12 mt-5 text-center">
    &copy; Le Cercle Généalogique de l'Est Parisien - <?php echo date("Y");?>, tous droits réservés
  </div>
</footer>
