@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br><br><br><br>
            communitylife
            <?
            $filename = "francilien.csv";
            $fp = fopen($filename, "r");
            while (!feof($fp))
            {
              $ligne = fgetcsv($fp, 4096, ";");
            }

        </div>
    </div>
</div>
@endsection
