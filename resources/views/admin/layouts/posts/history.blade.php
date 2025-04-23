@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="cr-card card-default product-list">
                <div class="cr-card-content ">
                    <div class="table-responsive">
                        @if (session('success'))
                            <p class="text-success">{{ session('success') }}</p>
                        @endif
                        <table id="product_list" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Uploaded By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($posts as $key => $post)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ Str::limit($post->title, 50) }}</td>
                                        <td>{{ $post->categories->name }}</td>
                                        <td>{{ date('d-m-Y H:i:s', strtotime($post->created_at)) }}</td>
                                        <td>{{ $post->users->name }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static">
                                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                                <form action="{{ route('admin.posts.delete', $post->id) }}" method="POST"
                                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Xóa</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection