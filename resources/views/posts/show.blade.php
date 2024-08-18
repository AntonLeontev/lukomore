@extends('layouts.app')

@section('title', $post->meta_title)
@section('description', $post->meta_description)

@section('content')
    <main class="page">
        <section class="template section-bottom">
            <div class="template__container">
                <div class="template__item">
                    <h1 class="title">{{ $post->title }}</h1>
                    <div class="template__img -ibg">
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                    </div>
                    <div class="text-block text text_l post-text">
                        {!! $post->text !!}
                    </div>
                </div>
                <div class="template__item">
                    <div class="template__block">
                        <div class="template__statistic statistic-template">
                            <div class="statistic-template__item">
                                <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}" alt="Image">
                                {{ $post->author }}
                            </div>
                            <div class="statistic-template__item">
                                <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}" alt="Image">
                                {{ $post->created_at->format('d.m.Y') }}
                            </div>
                            <div class="statistic-template__item">
                                <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}" alt="Image">
                                {{ $post->views }}
                            </div>
                        </div>
                    </div>
                </div>
				@if ($relatedPosts->isNotEmpty())
					<div class="template__item">
						<h2 class="title">Статьи, которые могут вас заинтересовать</h2>
						<div class="template__body swiper">
							<div class="template__wrapper swiper-wrapper">
								@foreach ($relatedPosts as $post)
									<div class="template__slide swiper-slide">
										<div class="blog-content">
											<a class="stretched-link" href="{{ $post->slug }}"></a>
											<div class="blog-content__img -ibg">
												<img src="{{ '/storage/'.$post->thumbnail }}" alt="Image">
											</div>
											<div class="blog-content__body">
												<h3 class="blog-content__title title title_h3">{{ $post->title }}</h3>
												<div class="blog-content__text text text_l">
													{{ $post->preview_text }}
												</div>
											</div>
											<div class="blog-content__footer footer-blog">
												<div class="footer-blog__item">
													<img src="{{ Vite::asset('resources/img/icons/pen.svg') }}" alt="Image">
													{{ $post->author }}
												</div>
												<div class="footer-blog__item">
													<img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}" alt="Image">
													{{ $post->created_at->format('d.m.Y') }}
												</div>
												<div class="footer-blog__item">
													<img src="{{ Vite::asset('resources/img/icons/eye.svg') }}" alt="Image">
													{{ $post->views }}
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							<div class="swiper-pagination"></div>
							<div class="swiper-controls">
								<button type="button" class="swiper-button swiper-button-prev">
									<img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
								</button>
								<button type="button" class="swiper-button swiper-button-next">
									<img src="{{ Vite::asset('resources/img/icons/ar-slider.svg') }}" alt="Image">
								</button>
							</div>
						</div>
					</div>
				@endif
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
