@extends('layouts.app')

@section('title', 'Полезные статьи')

@section('content')
    <main class="page page_blog">
        <section class="hero">
            <div class="hero__container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 class="hero__title title">
                            Полезные статьи
                        </h1>
                        <button class="hero__btn button" type="button" data-goto=".feedback">Уточнить наличие мест
                        </button>
                    </div>
                    <div class="hero__img hero-img _no-before">
                        <div class="hero-img__main">
                            <div class="hero-img__img -ibg--contain">
                                <img src="{{ Vite::asset('resources/img/pages/hero-img_blog.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog section-padding">
            <div class="blog__container">
                <div class="tabs">
                    <nav class="tabs__navigation">
                        <button type="button" class="tabs__title _tab-active">По дате</button>
                        <button type="button" class="tabs__title">По автору</button>
                        <button type="button" class="tabs__title">По количеству просмотров</button>
                    </nav>
                    <div class="tabs__content">
                        <div class="tabs__body">
                            <div class="blog-wrapper">
                                <div class="blog-wrapper__body swiper">
                                    <div class="blog-wrapper__wrapper swiper-wrapper">
										@foreach ($posts as $post)
											<div class="blog-wrapper__slide swiper-slide">
												<div class="blog-content">
													<a class="stretched-link" href="{{ route('posts.show', $post->slug) }}"></a>
													<div class="blog-content__img -ibg">
														<img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}">
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
                                </div>
                            </div>
                            <div class="tabs__body-action">
                                <button class="button" type="button">Смотреть еще</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
