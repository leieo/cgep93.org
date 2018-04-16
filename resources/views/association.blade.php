@extends('layouts.app')

@section('content')
<div class="container asso_page">
	<header>
		<h1>L'Association</h1>
		<h5>Cercle généalogique de l'Est Parisien</h5>
	</header>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <h2 id="statuts">Statuts</h2>
			<p>Fondée en juin 1987 (Journal officiel n°31 du 5 août 1987). </p>
			<p>Régie par la loi du 1er juillet 1901 (statuts déposés à la Préfecture de la Seine-Saint-Denis sous le numéro 87-5373).</p>
			<p>Affiliée à l'Union Généalogique Francilienne.</p>
			<p>Déclarée à la <a href="https://www.cnil.fr/" target="_blank">CNIL</a> le 16 février 1998 sous le n° 547999 </p>
			<p>L'assemblée générale du 2 mars 2002 a voté pour le changement du nom de l'association qui devient le "Cercle de Généalogie et d'histoire de la Seine-Saint-Denis". Cette modification est portée au règlement intérieur, mais l'appellation CGEP reste inscrite dans les statuts. </p>     

			<h2 id="membres_ca">Membres du CA</h2>      
			<table align="center"> 
				<tr>
					<td>Président</td>
					<td>Sébastien LEQUEUX</td>
				</tr>
				<tr>
					<td>Vice-président</td>
					<td>Thierry AUBIE</td>
				</tr>
				<tr>
					<td>Secrétaire</td>
					<td>Marie LEQUEUX</td>
				</tr>
				<tr>
					<td>Trésorier</td>
					<td>Pierre CHAZAL</td>
				</tr>
				<tr>
					<td>Trésorier adjoint</td>
					<td>Hervé SALMON</td>
				</tr>
				<tr>
					<td>Responsable Bibliothèque</td>
					<td>Geneviève CAMUS</td>
				</tr>
				<tr>
					<td>
						<p>Responsables Informatique,</p>
						<p>Correspondants GénéaBank</p>
					</td>
					<td>
						<p>Annick BERTHO</p>
						<p>Jean-Yves HOUARD</p>
						<p>Jean LECUYER</p>
						<p>Valérie POULOULAT</p>
					</td>
				</tr>
			</table>
			<table align="center">
			<h5>MEMBRES D'HONNEUR</h5>
				<tr>
					<td>
						<p>Présidente fondatrice,</p>
						<p>Présidente d'honneur</p>
					</td>
					<td>Madame Pierrette BRUGERE-PENSIER</td>
				</tr>
				<tr>
					<td>Président d'honneur</td>
					<td>Monsieur † André CAMUS</td>
				</tr>
				<tr>
					<td>Vice-Président d'honneur</td>
					<td>Monsieur Claude THIOLET</td>
				</tr>
			</table>
			<table align="center">
				<tr><td>Madame la directrice des Archives Départementales de la Seine-Saint-Denis</td></tr>
				<tr><td>Madame le Maire de Noisy-le-Sec</td></tr>
				<tr><td>Monsieur Jean-Claude TESTART</td></tr>
				<tr><td>Monsieur Gilbert LECOUTEUX</td></tr>
				<tr><td>Monsieur Jacques TOUPIN</td></tr>
			</table>

			<h2 id="infos">Infos Pratiques</h2>
			<h5>Tarifs d'adhésion à l'association</h5>
			<table align="center"> 
				<tr>
					<td>Adhésion</td>
					<td>><td/>
					<td>38 Euros</td>
				</tr>
				<tr>
					<td align>Adhésion couple</td>
					<td>><td/>
					<td>47 Euros</td>
				</tr>
			</table>
			<br />
			<p>Tarif spécial pour l'étranger hors Union Européenne.<br />
			NOTA : L'adhésion ou la réadhésion comportent la cotisation + l'abonnement au bulletin : les deux sont indissociables.</p>
 
			<h5>Pour nous écrire</h5>
			<p>Les courriers sont à adresser obligatoirement au <a href="{{route('association')}}#footer">siège social</a>.<br /> 
			<!--lien vers le footer (contact)-->
			Toute correspondance appelant une réponse doit être accompagnée d'une enveloppe timbrée libellée et affranchie au tarif en vigueur.</p>

			<h2 id="reglement">Règlement intérieur</h2>

        </div>
    </div>
</div>
@endsection
