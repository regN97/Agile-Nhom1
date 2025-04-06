<!-- sidebar -->
<div class="cr-sidebar-overlay"></div>
<div class="cr-sidebar" data-mode="light">
    <div class="cr-sb-logo">
        <a href="{{route('admin.dashboard')}}" class="sb-full"><img src="{{ asset('admin/assets/img/logo/full-logo.png') }}"
                alt="logo"></a>
        <a href="{{route('admin.dashboard')}}" class="sb-collapse"><img src="{{ asset('admin/assets/img/logo/collapse-logo.png') }}"
                alt="logo"></a>
    </div>
    <div class="cr-sb-wrapper">
        <div class="cr-sb-content">
            <ul class="cr-sb-list">
                <li class="cr-sb-item sb-drop-item">
                    <a href="javascript:void(0)" class="cr-drop-toggle">
                        <i class="ri-dashboard-3-line"></i><span class="condense">Dashboard<i
                                class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                    <ul class="cr-sb-drop condense">
                        <li class="cr-sb-item sb-subdrop-item">
                            <a href="javascript:void(0)" class="cr-sub-drop-toggle">
                                <i class="ri-shield-user-line"></i><span class="condense">Categories<i
                                        class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                            <ul class="cr-sb-subdrop condense">
                                <li><a href="{{ route('admin.categories.index') }}" class="cr-page-link subdrop"><i
                                            class="ri-checkbox-blank-circle-line"></i>List Category</a></li>
                                <li><a href="{{ route('admin.categories.create') }}" class="cr-page-link subdrop"><i
                                            class="ri-checkbox-blank-circle-line"></i>Create Category</a></li>
                            </ul>
                        </li>
                        <li class="cr-sb-item sb-subdrop-item">
                            <a href="javascript:void(0)" class="cr-sub-drop-toggle">
                                <i class="ri-shield-user-line"></i><span class="condense">Posts<i
                                        class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                            <ul class="cr-sb-subdrop condense">
                                <li><a href="{{ route('admin.posts.index') }}" class="cr-page-link subdrop"><i
                                            class="ri-checkbox-blank-circle-line"></i>List Post</a></li>
                                <li><a href="{{ route('admin.posts.create') }}" class="cr-page-link subdrop"><i
                                            class="ri-checkbox-blank-circle-line"></i>Create Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
