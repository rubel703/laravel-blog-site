<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-warning"><i class="fa fa-hashtag me-2"></i>Dashboard</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('/') }}/assets/backend-assets/img/my img.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-success">Hossain Rubel</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('admin.category.create') }}" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Add Category</a>
            <a href="{{ route('manage.category') }}" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-1"></i>Managed Category</a>
            <a href="{{ route('blogs.create') }}" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-1"></i>Add Blog</a>
            <a href="{{ route('blogs.index') }}" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-1"></i>Manage Blog</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
        </div>
    </nav>
</div>
