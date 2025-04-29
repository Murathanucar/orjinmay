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

                        <h3 class="mb-0">Üniversiteler</h3>



                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">

                            <ol class="breadcrumb align-items-center mb-0 lh-1">

                                <li class="breadcrumb-item">

                                    <a href="#" class="d-flex align-items-center text-decoration-none">

                                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>

                                        <span class="text-secondary fw-medium hover">Dashboard</span>

                                    </a>

                                </li>

                                <li class="breadcrumb-item active" aria-current="page">

                                    <span class="fw-medium">Tables</span>

                                </li>

                                <li class="breadcrumb-item active" aria-current="page">

                                    <span class="fw-medium">Data Table</span>

                                </li>

                            </ol>

                        </nav>

                    </div>



                    <div class="card bg-white border-0 rounded-3 mb-4">

                        <div class="card-body p-4">



                            <div class="default-table-area all-products">

                                <div class="table-responsive">

                                    <table class="table align-middle" id="myTable">

                                        <thead>

                                            <tr>

                                                <th scope="col">University ID</th>

                                                <th scope="col">Name</th>

                                                <th scope="col">Action</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            @forelse ($universities as $university)

                                                <tr>

                                                    <td class="text-body">{{ $university->id }}</td>

                                                    <td class="text-secondary">{{ $university->name }}</td>

                                                    <td>

                                                        <div class="d-flex align-items-center gap-1">

                                                        

                                                            {{-- Düzenleme Butonu --}}

                                                            <a href="{{ route('admin.university.turkey.edit', $university->id) }}" class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">

                                                                <i class="material-symbols-outlined fs-16 text-body">edit</i>

                                                            </a>

                                                        

                                                            {{-- Silme Butonu --}}

                                                            {{-- <form action="{{ route('admin.university.delete', $university->id) }}" method="POST" style="display: inline;">

                                                                @csrf

                                                                @method('DELETE')

                                                                <button type="submit" class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">

                                                                    <i class="material-symbols-outlined fs-16 text-danger">delete</i>

                                                                </button>

                                                            </form> --}}

                                                        </div>

                                                        

                                                    </td> 

                                                </tr>

                                                @empty

                                                <tr>

                                                    <td colspan="4">No universities found.</td>

                                                </tr>

                                            @endforelse

                                        </tbody>

                                    </table>

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

