@extends('client.layouts.main')

@section('content')
    <!-- Blog-Classic -->
    <section class="section-blog-Classic padding-tb-100">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-12 mb-24">

                    @foreach ($posts as $post)
                        <div class="cr-blog-classic" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                            <div class="cr-blog-classic-content">
                                <div class="cr-comment">
                                    <span>By {{ Auth::user()->name }}</span>
                                </div>
                                <h4>{{ $post->title }}</h4>
                                <p>{{ Str::limit($post->content, 50) }}</p>
                                <a href="javascript:void(0)">read more</a>
                            </div>
                            <div class="cr-blog-image">
                                <img src="{{ asset('storage/' . $post->upload_files->file_path) }}" alt="blog-1">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            {{-- <nav aria-label="..." class="cr-pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </section>
@endsection
