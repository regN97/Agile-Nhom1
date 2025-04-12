@extends('admin.layouts.main')

@section('content')
    <div class="row cr-category">
        <div class="col-xl-12 col-lg-12">
            <div class="team-sticky-bar">
                <div class="col-md-12">
                    <div class="cr-cat-list cr-card card-default mb-24px">
                        <div class="cr-card-content">
                            <div class="cr-cat-form">
                                <h3>Thêm bài viết</h3>

                                @if (session('error'))
                                    <p class="text-danger">{{ session('error') }}</p>
                                @elseif (session('success'))
                                    <p class="text-success">{{ session('success') }}</p>
                                @endif

                                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Tiêu đề</label>
                                        <div class="col-12">
                                            <input id="title" name="title"
                                                class="form-control @error('title') is-invalid @enderror" type="text"
                                                value="{{ old('title') }}">
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
                                            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
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
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif>
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
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Trạng thái</label>
                                        <div class="col-12">
                                            <select name="status" id="status" class="form-control">
                                                <option value="draft">Bản nháp</option>
                                                <option value="published">Đã xuất bản</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 d-flex gap-2">
                                            <button type="submit" class="cr-btn-primary">Thêm mới</button>
                                            <a href="{{ route('admin.posts.index') }}" class="cr-btn-secondary">Cancel</a>
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
