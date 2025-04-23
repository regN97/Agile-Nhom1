@extends('client.layouts.main')

@section('content')
    <!-- Blog-details -->
    <section class="blog-details padding-tb-100">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                <div class="col-lg-12">
                    <div class="cr-blog-details">
                        <div class="cr-blog-details-image">
                            <img src="{{ asset('storage/' . $post->upload_files->file_path) }}" alt="blog-1">
                        </div>
                        <div class="cr-blog-details-content">
                            <div class="cr-admin-date">
                                <span><code>By {{ $user->name }}</code> / Date -
                                    {{ $post->created_at->format('d-m-Y') }}</span>
                            </div>
                            <div class="cr-banner">
                                <h2>{{ $post->title }}</h2>
                            </div>
                            <p class="mb-15 fs-5">{{ $post->content }}</p>
                        </div>
                    </div>
                </div>
    </section>
@endsection
