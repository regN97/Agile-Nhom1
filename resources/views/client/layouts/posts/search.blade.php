@extends('client.layouts.main')

@section('content')
    <!-- Blog-Classic -->
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-center">
                    <h2>Kết quả tìm kiếm của: "{{ request('search') }}"</h2>
                </div>
            </div>
        </div>
    </section>
    @if (!isset($posts))
        <section class="section-blog-Classic padding-tb-100">
            <div class="container">
                <div class="row mb-minus-24">
                    <div class="col-lg-12 text-center">
                        <h4 class="text-danger">{{ $message }}</h4>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="section-blog-Classic padding-tb-100">
            <div class="container">
                <div class="row mb-minus-24">
                    @foreach ($posts as $post)
                        <div class="col-lg-6 mb-24">
                            <div class="cr-blog-classic" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="cr-blog-classic-content">
                                    <div class="cr-comment">
                                        <span></span>
                                    </div>
                                    <h4>{{ $post->title }}</h4>
                                    <p>{{ Str::limit($post->content, 50) }}</p>
                                    <a href="{{ route('post.show', $post->id) }}">read more</a>
                                </div>
                                <div class="cr-blog-image">
                                    <a href="{{ route('post.show', $post->id) }}">
                                        <img src="{{ asset('storage/' . $post->upload_files->file_path) }}"
                                            alt="{{ $post->title }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
