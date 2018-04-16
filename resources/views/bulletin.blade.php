@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Bulletin</h1>
			<p>Vous trouverez ci-dessous les sommaires de toutes nos revues depuis l'origine du CGEP.</p>

            <?
            $filename = "francilien.csv";
            $fp = fopen($filename, "r");
            while (!feof($fp))
            {
              $ligne = fgetcsv($fp, 4096, ";");
            }
            ?>

        </div>
    </div>
</div>
@endsection
