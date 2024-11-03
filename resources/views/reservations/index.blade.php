<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" class="form-control" id="datatable-search-input" placeholder="Search" />
                    </div>
                    <table class="table table-hover" id="datatable">
                        <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Country</th>
                            <th class="text-center">Number</th>
{{--                            <th scope="col">Category</th>--}}
                            <th class="text-center">Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $key => $reservation)
                            <tr>
                                <th class="text-center">{{ $key + 1 }}</th>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->country }}</td>
                                <td>{{ $reservation->number }}</td>
{{--                                <td>{{ $reservation->category }}</td>--}}
                                <td>{{ $reservation->date }}</td>
                                <td class="text-center">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showModal{{$reservation->id}}">View</button>
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$reservation->id}}">Edit</button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$reservation->id}}">Delete</button>
                                </td>
                            </tr>

                            <!-- Show Modal -->
                            <div class="modal fade" id="showModal{{$reservation->id}}" tabindex="-1" aria-labelledby="showModalLabel{{$reservation->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg"> <!-- Change to modal-lg for a larger modal -->
                                    <form action="{{ route('all-reservations.update', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="showModalLabel{{$reservation->id}}">Reservation Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="name{{$reservation->id}}" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="name{{$reservation->id}}" name="name" value="{{ $reservation->name }}" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="country{{$reservation->id}}" class="form-label">Country</label>
                                                        <input type="text" class="form-control" id="country{{$reservation->id}}" name="country" value="{{ $reservation->country }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="number{{$reservation->id}}" class="form-label">Number</label>
                                                        <input type="text" class="form-control" id="number{{$reservation->id}}" name="number" value="{{ $reservation->number }}" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="date{{$reservation->id}}" class="form-label">Date</label>
                                                        <input type="date" class="form-control" id="date{{$reservation->id}}" name="date" value="{{ $reservation->date }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="category{{$reservation->id}}" class="form-label">Category</label>
                                                        <input type="text" class="form-control" id="category{{$reservation->id}}" name="category" value="{{ $reservation->category }}" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="email{{$reservation->id}}" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email{{$reservation->id}}" name="email" value="{{ $reservation->email }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal{{$reservation->id}}" tabindex="-1" aria-labelledby="editModalLabel{{$reservation->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ route('all-reservations.update', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{$reservation->id}}">Edit Reservation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="edit-name{{$reservation->id}}" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="edit-name{{$reservation->id}}" name="name" value="{{ $reservation->name }}" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit-country{{$reservation->id}}" class="form-label">Country</label>
                                                        <input type="text" class="form-control" id="edit-country{{$reservation->id}}" name="country" value="{{ $reservation->country }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="edit-number{{$reservation->id}}" class="form-label">Number</label>
                                                        <input type="text" class="form-control" id="edit-number{{$reservation->id}}" name="number" value="{{ $reservation->number }}" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit-date{{$reservation->id}}" class="form-label">Date</label>
                                                        <input type="date" class="form-control" id="edit-date{{$reservation->id}}" name="date" value="{{ $reservation->date }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="edit-category{{$reservation->id}}" class="form-label">Category</label>
                                                        <input type="text" class="form-control" id="edit-category{{$reservation->id}}" name="category" value="{{ $reservation->category }}" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="edit-email{{$reservation->id}}" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="edit-email{{$reservation->id}}" name="email" value="{{ $reservation->email }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{$reservation->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$reservation->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('all-reservations.destroy', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{$reservation->id}}">Confirm Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this reservation?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $reservations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            // Basic table filtering with jQuery
            $('#datatable-search-input').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#datatable tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
</x-app-layout>
