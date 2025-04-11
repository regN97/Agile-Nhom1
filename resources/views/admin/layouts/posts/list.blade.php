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
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Uploaded By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($posts as $key => $post)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td>{{ $post->categories->name }}</td>
                                        <td>
                                        @if ($post->image !==  null)
                                        <img width="100" src="{{ asset('storage/' . $post->image) }}" alt="">
                                       
                                        @endif
                                        
                                            @if($post->upload_files && $post->upload_files->file_path)
                                                <img src="{{ asset('storage/'.$post->upload_files->file_path) }}" style="max-width: 100px; height: auto;" alt="image">
                                             
                                          @endif
                                        </td>
                                        <td>{{ $post->users->name }}</td>
                                        <td>{{ $post->status }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static">
                                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                                                <form action="{{ route('admin.posts.delete', $post->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
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