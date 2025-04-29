<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trezo - Laravel Admin Dashboard Template</title>
        <!-- Styles -->
        @include('admin.partials.styles')
    </head>
    <body class="boxed-size">
        @include('admin.partials.preloader')
        @include('admin.partials.sidebar')

        <div class="container-fluid">
			<div class="main-content d-flex flex-column">
				<!-- Start Header Area -->
				@include('admin.partials.header')
				<!-- End Header Area -->

				<div class="main-content-container overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                        <h3 class="mb-0">User</h3>

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb align-items-center mb-0 lh-1">
                                <li class="breadcrumb-item">
                                    <a href="#" class="d-flex align-items-center text-decoration-none">
                                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                        <span class="text-secondary fw-medium hover">Dashboard</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">Project Management</span>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">User</span>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                                <form class="position-relative table-src-form me-0">
                                    <input type="text" class="form-control" placeholder="Search here">
                                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                                </form>
                                <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <span class="py-sm-1 d-block">
                                        <i class="ri-add-line d-none d-sm-inline-block"></i>
                                        <span>Add New User</span>
                                    </span>
                                </button>
                            </div>

                            <div class="default-table-area default-table-width">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input position-relative top-1" type="checkbox" value="" id="flexCheckDefault7">
                                                        <label class="position-relative top-4 ms-1" for="flexCheckDefault7">ID</label>
                                                    </div>
                                                </th>
                                                <th scope="col">User</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td class="text-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                            <label class="position-relative top-2 ms-1" for="flexCheckDefault12">{{ $user->id }}</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="agents" class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="admin/assets/images/user-43.jpg" class="wh-34 rounded-circle" alt="user">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 position-relative top-1">
                                                                <h6 class="mb-0 fs-14 fw-medium">{{ $user->name }}</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-1">
                                                            <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                                <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                            </button>
                                                            <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                                <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                            </button>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap">
                                    <span class="fs-12 fw-medium">Showing 10 of 30 Results</span>
    
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination mb-0 justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link icon" href="user" aria-label="Previous">
                                                    <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="user">1</a></li>
                                            <li class="page-item"><a class="page-link" href="user">2</a></li>
                                            <li class="page-item"><a class="page-link" href="user">3</a></li>
                                            <li class="page-item"><a class="page-link" href="user">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link icon" href="user" aria-label="Next">
                                                    <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="flex-grow-1"></div>

				<!-- Start Footer Area -->
				@include('admin.partials.footer')
				<!-- End Footer Area -->
			</div>
		</div>

        
        @include('admin.partials.theme_settings')
        @include('admin.partials.scripts')
    </body>
</html>
