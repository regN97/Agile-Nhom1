@extends('admin.layouts.main')

@section('content')
    <div class="row cr-category">
        <div class="col-xl-12 col-lg-12">
            <div class="team-sticky-bar">
                <div class="col-md-12">
                    <div class="cr-cat-list cr-card card-default mb-24px">
                        <div class="cr-card-content">
                            <div class="cr-cat-form">
                                <h3>Sửa bài viết</h3>

                                @if (session('error'))
                                    <p class="text-danger">{{ session('error') }}</p>
                                @elseif (session('success'))
                                    <p class="text-success">{{ session('success') }}</p>
                                @endif

                                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <div class="col-12">
                                            <input id="title" name="title"
                                                class="form-control @error('title') is-invalid @enderror" 
                                                type="text" value="{{ old('title', $post->title) }}">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <div class="col-12">
                                            <textarea name="content" id="content" 
                                                class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <div class="col-12">
                                            <select name="category_id" id="category_id" 
                                                class="form-control @error('category_id') is-invalid @enderror">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <div class="col-12">
                                            <input id="image" name="image"
                                                class="form-control @error('image') is-invalid @enderror" 
                                                type="text" value="{{ old('image', $post->image) }}">
                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="col-12">
                                            <select name="status" id="status" 
                                                class="form-control @error('status') is-invalid @enderror">
                                                <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Nháp</option>
                                                <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Đã đăng</option>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <button type="submit" class="cr-btn-primary">Cập nhật</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection