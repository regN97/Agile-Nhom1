@extends('client.layouts.main')

@section('content')
    <!-- Blog-Classic -->
    <section class="section-blog-Classic padding-tb-100">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-12 mb-24">
                    
                    <div class="cr-blog-classic" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-blog-classic-content">
                            <div class="cr-comment">
                                <span>By Admin <code> / 07 commen</code></span>
                            </div>
                            <h4>Best guide to Shopping for Organic ingredients.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste alias odit cupiditate harum
                                magnam tenetur inventore dicta voluptatum perferendis voluptate!</p>
                            <a href="javascript:void(0)">read more</a>
                        </div>
                        <div class="cr-blog-image">
                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="blog-1">
                        </div>
                    </div>

                </div>
            </div>
            <nav aria-label="..." class="cr-pagination">
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
            </nav>
        </div>
    </section>
@endsection