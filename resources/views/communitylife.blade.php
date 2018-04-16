@extends('layouts.app')

@section('content')
<div class="container vie_asso">
    <header>
        <h1>Vie associative</h1>
        <h5>Cercle généalogique de l'Est Parisien</h5>
    </header>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <h2 id="bulletin">Bulletin - Le Francilien du Levant</h2>
            <p><u>Le Francilien du Levant</u> est le bulletin du CGEP, dont le n°1 fut publié en 1988. Les premiers numéros furent édités par une célèbre marque suédoise. Aujourd'hui, le tirage est réalisé par la mairie de Noisy-le-Sec.</p>
            <p>Retrouvez <a href="{{route('bulletin')}}">ici</a> les sommaires de tous les numéros depuis l'origine du CGEP.</p>

            <h2 id="publications">Autres Publications</h2>
            <p>Dans cette section, vous pouvez consulter nos travaux.
            <h5>Les études</h5>
            <ul>
                <li><a href="https://cgep93.org/expatries_du_93.php" target="_blank">Les expatriés du 93</a></li>
                <li><a href="https://cgep93.org/seigneurs.php" target="_blank">Les Seigneurs de Seine-Saint-Denis</a></li>
                <li><a href="https://cgep93.org/noisy_le_sec.php" target="_blank">Le Seigneur de Noisy-le-Sec</a></li>
                <li><a href="https://cgep93.org/bureau_doc.php" target="_blank">La famille Bureau</a></li>
                <li><a href="https://cgep93.org/spifame_doc.php" target="_blank">La famille Spifame</a></li>
                <li><a href="https://cgep93.org/troussevache_doc.php" target="_blank">La famille Troussevache</a></li>
                <li><a href="https://cgep93.org/danquechin_doc.php" target="_blank">La famile Danquechin</a></li>
                <li><a href="https://cgep93.org/mongrolle_doc.php" target="_blank">La famille Mongrolle</a></li>
                <li><a href="https://cgep93.org/cloches_de_stains_doc.php" target="_blank">Les cloches de Stains</a></li>
            </ul>

            <h2 id="genecole">Génécole</h2>
            <p>Le CGEP, qui s'emploie à faire connaître la généalogie, propose des ateliers à l'école destinés aux enfants. <a href="{{route('contact')}}">Contactez-nous</a> pour en savoir plus.</p>

            <h2 id="events">Événements</h2>
            <h5>Événements à venir</h5>
            <br />
            <p>Les prochains événements organisés par l'association sont visibles dans notre calendrier.</p>
            <br />
                <div class="container">
                    <div class="row">

                            <iframe src="https://calendar.google.com/calendar/embed?src=cgep93web%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

                    </div>
                </div>
            <h5>Événements passés</h5>
            <ul>
                <li><a href="https://cgep93.org/Im_AG_2009/index.php" target="_blank">AG de 2009</a></li>
                <li><a href="https://cgep93.org/Im_AG_2006/index.htm" target="_blank">AG de 2006</a></li>
                <li><a href="https://cgep93.org/Im_AG_2005/index.htm" target="_blank">AG de 2005</a></li>
                <li><a href="https://cgep93.org/Im_AG_2003/index.htm" target="_blank">AG de 2003</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
