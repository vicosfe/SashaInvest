@extends('wrap')
@section('content')
	<main class="newsPage">
		<div class="wrapperCaptionNews">
			<h3 class="captionNews centerBlock">Новости</h3>
		</div>

		<section class="centerBlock">
			<div class="wrapperNews">
				<div class="wrapperNews__content">
					@foreach($news as $post)
						<div class="wrapperNews__content--item">
							<a href="/ru/news/{{$post->id}}">
								<div class="newsItem__img" style="background-image: url({{$post->img}});"></div>
								<div class="newsItem__info">
									<div class="newsItem__info--date"><p>{{ Carbon\Carbon::parse($post->created_at)->format('d-M-Y') }}</p></div>
									<div class="newsItem__info--text"> <p>{!!$post->title!!}</p></div>
								</div>
							</a>
						</div>
					@endforeach
				</div>
			</div>
		</section>
		<section>
			<div class="loadMoreNews">
				<a class="loadMoreNews-js" href="#"  data-page ="{{$page}}">загрузить еще</a>
			</div>
		</section>
		@include('usefulLinks')
	</main>
@stop