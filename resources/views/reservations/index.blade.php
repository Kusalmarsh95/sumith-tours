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
{{--                        <label class="form-label" for="datatable-search-input">Search</label>--}}
                    </div>
                    <table class="table table-hover" id="datatable">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Country</th>
                            <th scope="col">Number</th>
                            <th scope="col">Category</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $key => $reservation)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th> <!-- To show index number -->
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->country }}</td>
                                <td>{{ $reservation->number }}</td>
                                <td>{{ $reservation->category }}</td>
                                <td>{{ $reservation->date }}</td>
                                <td>
                                    <!-- Add your action buttons here -->
                                    <button class="btn btn-primary">View</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
