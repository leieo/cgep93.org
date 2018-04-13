@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-6">
		<div class="news">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="#">Actualité 1</a>
						<img class="d-block w-100" src="https://static.independent.co.uk/s3fs-public/styles/article_small/public/thumbnails/image/2017/08/22/15/neymar.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<a href="#">Actualité 2</a>
						<img class="d-block w-100" src="https://static.independent.co.uk/s3fs-public/styles/article_small/public/thumbnails/image/2017/08/22/15/neymar.jpg" alt="Second Slide">
					</div>
					<div class="carousel-item">
						<a href="#">Actualité 3</a>
						<img class="d-block w-100" src="https://static.independent.co.uk/s3fs-public/styles/article_small/public/thumbnails/image/2017/08/22/15/neymar.jpg" alt="Third Slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<div class="col-6">
		<div class="calendar">
			@include('events')
		</div>
	</div>
</div>


<div class="container">
		
	<p>Carte départementale de la Seine-Saint-Denis</p>
		
	@include('map')

</div>
@endsection
