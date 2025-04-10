@extends('admin.layouts.main')

@section('content')
    <div class="row cr-category">
        <div class="col-xl-12 col-lg-12">
            <div class="team-sticky-bar">
                <div class="col-md-12">
                    <div class="cr-cat-list cr-card card-default mb-24px">
                        <div class="cr-card-content">
                            <div class="cr-cat-form">
                                <h3>Chỉnh sửa danh mục</h3>

                                @if (session('error'))
                                    <p class="text-danger">{{ session('error') }}</p>
                                @elseif (session('success'))
                                    <p class="text-success">{{ session('success') }}</p>
                                @endif

                                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">                                
                                    @csrf
                                    @method('patch')

                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <div class="col-12">
                                            <input id="name" name="name" value="{{ $category->name }}"
                                                class="form-control @error('name') is-invalid @enderror" type="text">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <div class="col-12">
                                            <textarea name="description" id="description" class="form-control">{{ $category->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <button type="submit" class="cr-btn-primary">Submit</button>
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
