@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		<br><br><br><br>
		Hello {{ $user_name }} 
		<br />
		Bienvenue dans votre espace adhérent !

		<div id="map"></div>
	</div>
</div>
@endsection