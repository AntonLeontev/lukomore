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
                        <button class="hero__btn button" type="button" data-popup data-form="Уточнить наличие мест">Уточнить наличие мест
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
                <div class="tabs" x-data="tabs">
                    <nav class="tabs__navigation">
                        <button type="button" class="tabs__title" :class="{ '_tab-active': sort === 'created_at' }" @click="sort = 'created_at'">
							По дате
						</button>
                        <button type="button" class="tabs__title" :class="{ '_tab-active': sort === 'author' }" @click="sort = 'author'">
							По автору
						</button>
                        <button type="button" class="tabs__title" :class="{ '_tab-active': sort === 'views' }" @click="sort = 'views'">
							По количеству просмотров
						</button>
                    </nav>
                    <div class="tabs__content">
                        <div class="tabs__body" x-show="sort === 'created_at'" x-data="{
									posts: [],
									page: 1,

									getNextPage() {
										axios.get(`/blog?page=${++this.page}`)
											.then((response) => {
												this.posts.push(...response.data.data)
											})
									},
								}">
                            <div class="blog-wrapper">
                                <div class="blog-wrapper__body swiper">
                                    <div class="blog-wrapper__wrapper swiper-wrapper">
                                        @foreach ($posts as $post)
                                            <div class="blog-wrapper__slide swiper-slide">
                                                <div class="blog-content">
                                                    <a class="stretched-link"
                                                        href="{{ route('posts.show', $post->slug) }}"></a>
                                                    <div class="blog-content__img -ibg">
                                                        <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}">
                                                    </div>
                                                    <div class="blog-content__body">
                                                        <h3 class="blog-content__title title title_h3">{{ $post->title }}
                                                        </h3>
                                                        <div class="blog-content__text text text_l">
                                                            {{ $post->preview_text }}
                                                        </div>
                                                    </div>
                                                    <div class="blog-content__footer footer-blog">
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}"
                                                                alt="Image">
                                                            {{ $post->author }}
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}"
                                                                alt="Image">
                                                            {{ $post->created_at->format('d.m.Y') }}
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}"
                                                                alt="Image">
                                                            {{ $post->views }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										@endforeach
										<template x-for="post in posts">
											<div class="blog-wrapper__slide swiper-slide">
                                                <div class="blog-content">
                                                    <a class="stretched-link"
                                                        :href="route('posts.show', post.slug)"></a>
                                                    <div class="blog-content__img -ibg">
                                                        <img :src="'/storage/'+post.thumbnail" :alt="post.title">
                                                    </div>
                                                    <div class="blog-content__body">
                                                        <h3 class="blog-content__title title title_h3" x-text="post.title"></h3>
                                                        <div class="blog-content__text text text_l" x-html="post.preview_text"></div>
                                                    </div>
                                                    <div class="blog-content__footer footer-blog">
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}"
                                                                alt="Image">
															<span x-text="post.author"></span>
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}"
                                                                alt="Image">
															<span x-text="convertIsoToDMY(post.created_at)"></span>
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}"
                                                                alt="Image">
															<span x-text="post.views"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</template>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
							@if ($posts->lastPage() > 1)
								<div class="tabs__body-action" x-show="page < {{ $posts->lastPage() }}">
									<button class="button" type="button" @click="getNextPage">Смотреть еще</button>
								</div>
							@endif
                        </div>
                        <div class="tabs__body" x-show="sort === 'author'" x-cloak x-data="{
							posts: [],
							page: 1,

							init() {
								axios.get(`/blog?sort=author`)
									.then((response) => {
										this.posts = response.data.data
									})
							},
							getNextPage() {
								axios.get(`/blog?sort=author&page=${++this.page}`)
									.then((response) => {
										this.posts.push(...response.data.data)
									})
							},
						}">
                            <div class="blog-wrapper">
                                <div class="blog-wrapper__body swiper">
                                    <div class="blog-wrapper__wrapper swiper-wrapper">
                                        <template x-for="post in posts">
											<div class="blog-wrapper__slide swiper-slide">
                                                <div class="blog-content">
                                                    <a class="stretched-link"
                                                        :href="route('posts.show', post.slug)"></a>
                                                    <div class="blog-content__img -ibg">
                                                        <img :src="'/storage/'+post.thumbnail" :alt="post.title">
                                                    </div>
                                                    <div class="blog-content__body">
                                                        <h3 class="blog-content__title title title_h3" x-text="post.title"></h3>
                                                        <div class="blog-content__text text text_l" x-text="post.preview_text"></div>
                                                    </div>
                                                    <div class="blog-content__footer footer-blog">
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}"
                                                                alt="Image">
															<span x-text="post.author"></span>
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}"
                                                                alt="Image">
															<span x-text="convertIsoToDMY(post.created_at)"></span>
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}"
                                                                alt="Image">
															<span x-text="post.views"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</template>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            @if ($posts->lastPage() > 1)
								<div class="tabs__body-action" x-show="page < {{ $posts->lastPage() }}">
									<button class="button" type="button" @click="getNextPage">Смотреть еще</button>
								</div>
							@endif
                        </div>
                        <div class="tabs__body" x-show="sort === 'views'" x-cloak x-data="{
							posts: [],
							page: 1,

							init() {
								axios.get(`/blog?sort=views`)
									.then((response) => {
										this.posts = response.data.data
									})
							},
							getNextPage() {
								axios.get(`/blog?sort=views&page=${++this.page}`)
									.then((response) => {
										this.posts.push(...response.data.data)
									})
							},
						}">
                            <div class="blog-wrapper">
                                <div class="blog-wrapper__body swiper">
                                    <div class="blog-wrapper__wrapper swiper-wrapper">
                                        <template x-for="post in posts">
											<div class="blog-wrapper__slide swiper-slide">
                                                <div class="blog-content">
                                                    <a class="stretched-link"
                                                        :href="route('posts.show', post.slug)"></a>
                                                    <div class="blog-content__img -ibg">
                                                        <img :src="'/storage/'+post.thumbnail" :alt="post.title">
                                                    </div>
                                                    <div class="blog-content__body">
                                                        <h3 class="blog-content__title title title_h3" x-text="post.title"></h3>
                                                        <div class="blog-content__text text text_l" x-text="post.preview_text"></div>
                                                    </div>
                                                    <div class="blog-content__footer footer-blog">
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/pen.svg') }}"
                                                                alt="Image">
															<span x-text="post.author"></span>
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/calendar.svg') }}"
                                                                alt="Image">
															<span x-text="convertIsoToDMY(post.created_at)"></span>
                                                        </div>
                                                        <div class="footer-blog__item">
                                                            <img src="{{ Vite::asset('resources/img/icons/eye.svg') }}"
                                                                alt="Image">
															<span x-text="post.views"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</template>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            @if ($posts->lastPage() > 1)
								<div class="tabs__body-action" x-show="page < {{ $posts->lastPage() }}">
									<button class="button" type="button" @click="getNextPage">Смотреть еще</button>
								</div>
							@endif
                        </div>
                    </div>
                </div>

				<script>
					document.addEventListener('alpine:init', () => {
						Alpine.data('tabs', () => ({
							sort: 'created_at', 

							convertIsoToDMY(isoString) {
								const date = new Date(isoString);
								const day = date.getDate().toString().padStart(2, '0');
								const month = (date.getMonth() + 1).toString().padStart(2, '0');
								const year = date.getFullYear();

								return `${day}.${month}.${year}`;
							}
						}))
					})
				</script>

            </div>
        </section>

        @include('partials.bottom-section')

        @include('partials.contacts')
    </main>
@endsection
