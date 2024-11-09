<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Itinerary') }}
        </h2>
    </x-slot>
    <!-- Display success message -->
    @if(session('success'))
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <!-- Add New Image Button (Modal Trigger) -->
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
                            Add New
                        </button>

                        <!-- Image itinerary Table -->
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Year</th>
                                <th class="text-center">Month</th>
                                <th class="text-center">Tour Name</th>
                                <th class="text-center">Number of Days</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($itineraries as $itinerary)
                                <tr>
                                    <td>{{ $itinerary->year }}</td>
                                    <td>{{ $itinerary->month }}</td>
                                    <td width="600px">{{ $itinerary->tour_name }}</td>
                                    <td>{{ $itinerary->days }}</td>
                                    <td class="text-center">
                                        <!-- Edit Button (Modal Trigger) -->
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editImageModal-{{ $itinerary->id }}">
                                            Edit
                                        </button>

                                        <!-- Delete Button (Modal Trigger) -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteImageModal-{{ $itinerary->id }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editImageModal-{{ $itinerary->id }}" tabindex="-1" aria-labelledby="editImageModalLabel-{{ $itinerary->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-date" id="editImageModalLabel-{{ $itinerary->id }}">Edit Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('itineraries.update', $itinerary->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="date" class="form-label">Date</label>
                                                        <input type="date" class="form-control" id="date" name="date" value="{{ $itinerary->date }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea name="description" id="description" class="form-control" rows="5" required>{{ $itinerary->description }}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteImageModal-{{ $itinerary->id }}" tabindex="-1" aria-labelledby="deleteImageModalLabel-{{ $itinerary->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-date" id="deleteImageModalLabel-{{ $itinerary->id }}">Delete Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this image dated "{{ $itinerary->date }}"?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('itineraries.destroy', $itinerary->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $itineraries->links() }}
                        </div>
                    </div>

                    <!-- Modal for add new -->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-date" id="addModalLabel">Add New Detail</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('itineraries.store') }}" method="POST" enctype="multipart/form-data" class="image-upload-form">
                                        @csrf

                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="year" class="form-label">Year</label>
                                                <input type="number" class="form-control" id="year" name="year" value="{{ old('year') }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="month" class="form-label">Month</label>
                                                <input type="number" class="form-control" id="month" name="month" value="{{ old('month') }}" required>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-12">
                                                <label for="tour_name" class="form-label">Tour Name</label>
                                                <input type="text" class="form-control" id="tour_name" name="tour_name" value="{{ old('tour_name') }}" required>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="members" class="form-label">Members</label>
                                                <input type="text" class="form-control" id="members" name="members" value="{{ old('members') }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="days" class="form-label">Days</label>
                                                <input type="number" class="form-control" id="days" name="days" value="{{ old('days') }}" required>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="start_from" class="form-label">Start Location</label>
                                                <input type="text" class="form-control" id="start_from" name="start_from" value="{{ old('start_from') }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="venues" class="form-label">Number of Venus</label>
                                                <input type="number" class="form-control" id="venues" name="venues" value="{{ old('venues') }}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
