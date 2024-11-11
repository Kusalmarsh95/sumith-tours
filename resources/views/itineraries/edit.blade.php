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
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="card-title text-center">Edit Tour Details</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('itineraries.update', $itinerary->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="year" class="form-label">Year</label>
                                    <input type="number" class="form-control" id="year" name="year" value="{{ $itinerary->year }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="month" class="form-label">Month</label>
                                    <input type="number" class="form-control" id="month" name="month" value="{{ $itinerary->month }}" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <label for="tour_name" class="form-label">Tour Name</label>
                                    <input type="text" class="form-control" id="tour_name" name="tour_name" value="{{ $itinerary->tour_name }}" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="members" class="form-label">Members</label>
                                    <input type="text" class="form-control" id="members" name="members" value="{{  $itinerary->members }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="days" class="form-label">Days</label>
                                    <input type="number" class="form-control" id="days" name="days" value="{{  $itinerary->days }}" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="start_from" class="form-label">Start Location</label>
                                    <input type="text" class="form-control" id="start_from" name="start_from" value="{{  $itinerary->start_from }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="venues" class="form-label">Number of Venus</label>
                                    <input type="number" class="form-control" id="venues" name="venues" value="{{ $itinerary->venues }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-sm btn-success mt-2 mb-2" id="addCategory">Add More Details</button>
                            </div>
                            <div id="details">
                                @foreach($itinerary->details as $detail)
                                    <div class="row mt-1">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="Date" class="form-control date" name="date[]" value="{{ $detail->date }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <textarea rows="3" class="form-control description" name="description[]">{{ $detail->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="button" class="btn btn-sm btn-outline-danger remove-row"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="text-center mt-2">
                                <a type="button" href="{{ route('itineraries.index') }}" class="btn btn-secondary" >Back</a>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            function addCategoryRow() {
                var newRow = `
            <div class="row mt-1">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="Date" class="form-control date" name="date[]" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <textarea rows="3" class="form-control description" name="description[]" required></textarea>
                    </div>
                </div>
                <div class="col-md-1">
                     <button type="button" class="btn btn-sm btn-outline-danger remove-row"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>

`;
                $('#details').append(newRow);
            }

            // Event listener for "Add New" button click
            $('#addCategory').click(function (e) {
                e.preventDefault(); // Prevent the default form submission
                addCategoryRow(); // Add a new category row
            });

            $('#details').on('click', '.remove-row', function () {
                $(this).closest('.row').remove();
            });

        });
    </script>

</x-app-layout>
