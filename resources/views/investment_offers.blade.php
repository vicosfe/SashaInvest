@extends('wrap')
@section('content')
<main>
	<section>
		<div class="wrapperCaptioninvestOffer">
			<h3 class="captioninvestOffer centerBlock">Инвестиционный проект по строительству <br> агроиндустриального парка.</h3>
		</div>
		<div class="wrapperinvestOffer centerBlock">
			<div class="wrapperinvestOffer__content">
				<div class="wrapperinvestOffer__content--targetProj">
					<h4>ЦЕЛЬ ПРОЕКТА</h4>
					<p>Создание в пригороде Махачкалы агроиндустриального кластера, объединяющего производственную и логистическую инфраструктуру, позволяющую в одном месте осуществлять консолидацию и переработку продовольственного сырья, упаковку, хранение и распределение готовой продукции.</p>
				</div>
				<div class="wrapperinvestOffer__content--descriptionProj">
					<h4>Краткое описание проекта</h4>
					<p>Проектом предусмотрено строительство в поселке Богатыревка города Махачкалы агроиндустриального парка с централизованной внутренней системой управления и обслуживания на подготовленной площадке с подведенными до границ участка коммуникациями. В структуру агроиндустриального парка привлекаются резиденты со следующими проектами: современный тепличный комплекс площадью 3 га консервный мини - завод с системой шоковой заморозки овощей и фруктов фабрика инфрасушки овощей и фруктов холодильные вентилируемые склады для хранения и фасовки овощей и фруктов рассадный центр на площади 0,5 га производство зеленого фуража круглый год - 300 тонн мини - молочный модульный цех 5000 кг/сутки.</p>
				</div>
				<div class="wrapperinvestOffer__content--conditionsProj">
					<h4>Условия реализации проекта</h4>
					<p>Для реализации инвестиционного проекта предлагается земельный участок площадью 10 га. с подведенной и удобной инфраструктурой, в том числе автомобильной дорогой с выездом на федеральную трассу М-29. Имеется возможность привлечения федеральных и региональных субсидий для реализации проекта.</p>
				</div>
				<div class="wrapperinvestOffer__content--priceProj">
					<h4>ОРИЕНТИРОВАЧНАЯ СТОИМОСТЬ ПРОЕКТА</h4>
					<p>500МЛН.РУБ</p>
				</div>
				<div class="wrapperinvestOffer__content--button">
					<a href="#">СТАТЬ ИНВЕСТОРОМ</a>
				</div>
			</div>
			<div class="wrapperMediaInvestOffer">
				<div class="media">
					<div class="media__left" style="background-image: url(/public/images/news3.png);">

					</div>
					<div class="media__right">
						<!-- Swiper -->
						<div class="swiper-container gallery-thumbs">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="swiper-slide-item" style="background-image: url(/public/images/carousel1.png);"></div>
									<div class="swiper-slide-item" style="background-image: url(/public/images/news3.png);"></div>
									<div class="swiper-slide-item" style="background-image: url(/public/images/news4.png);"></div>
									<div class="swiper-slide-item" style="background-image: url(/public/images/news5.png);"></div>
								</div>
								<div class="swiper-slide">
									<div class="swiper-slide-item" style="background-image: url(/public/images/carousel1.png);"></div>
									<div class="swiper-slide-item" style="background-image: url(/public/images/news3.png);"></div>
									<div class="swiper-slide-item" style="background-image: url(/public/images/news4.png);"></div>
									<div class="swiper-slide-item" style="background-image: url(/public/images/news5.png);"></div>
								</div>

							</div>
							<!-- Add Pagination -->
							<!-- 	<div class="swiper-pagination"></div> -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>

					</div>
				</div>

			</div>	
		</div>
	</section>
	@include('usefulLinks')
</main>

@stop