@extends('admin.layouts.main')

@section('content')
    <div class="row cr-category">
        <div class="col-xl-12 col-lg-12">
            <div class="team-sticky-bar">
                <div class="col-md-12">
                    <div class="cr-cat-list cr-card card-default mb-24px">
                        <div class="cr-card-content">
                            <div class="cr-cat-form">
                                <h3>Chỉnh sửa bài viết</h3>

                                @if (session('error'))
                                    <p class="text-danger">{{ session('error') }}</p>
                                @elseif (session('success'))
                                    <p class="text-success">{{ session('success') }}</p>
                                @endif

                                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    
                                    <div class="form-group">
                                        <label for="title">Tiêu đề</label>
                                        <div class="col-12">
                                            <input id="title" name="title"
                                                class="form-control @error('title') is-invalid @enderror" type="text"
                                                value="{{ old('title', $post->title) }}">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Nội dung</label>
                                        <div class="col-12">
                                            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Danh mục</label>
                                        <div class="col-12">
                                            <select name="category_id" id="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" 
                                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Hình ảnh</label>
                                        <div class="col-12">
                                            <input type="file" name="image" id="image" class="form-control">
                                            @if($post->image)
                                                <p><img src="{{ asset('storage/'.$post->image) }}" width="100" alt="image"></p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Trạng thái</label>
                                        <div class="col-12">
                                            <select name="status" id="status" class="form-control">
                                                <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Bản nháp</option>
                                                <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Đã xuất bản</option>
                                            </select>
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
