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
                            <th scope="col">Review</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reviews as $key => $review)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th> <!-- To show index number -->
                                <td>{{ $review->customer_name }}</td>
                                <td>{{ $review->country }}</td>
                                <td>{{ $review->review }}</td>
                                <td>{{ $review->rating }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editReviewModal-{{ $review->id }}">
                                        Edit
                                    </button>

                                    <!-- Delete Button (Modal Trigger) -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteReviewModal-{{ $review->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <!-- Edit Modal -->
                            <div class="modal fade" id="editReviewModal-{{ $review->id }}" tabindex="-1" aria-labelledby="editReviewModalLabel-{{ $review->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editReviewModalLabel-{{ $review->id }}">Edit Reviews</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('all-reviews.update', $review->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="customer_name" value="{{ $review->customer_name }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="country" class="form-label">Country</label>
                                                    <input type="text" name="country" class="form-control" value="{{ $review->country }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="review" class="form-label">Comment</label>
                                                    <input type="text" name="review" class="form-control" value="{{ $review->review }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Rating</label>
                                                    <div class="d-flex justify-content-center mt-1">
                                                        <div class="rating">
                                                            @for ($i = 5; $i >= 1; $i--)
                                                                <input type="radio" name="rating" id="rating-{{ $i }}-{{ $review->id }}" value="{{ $i }}" {{ $review->rating == $i ? 'checked' : '' }}>
                                                                <label for="rating-{{ $i }}-{{ $review->id }}">☆</label>
                                                            @endfor
                                                        </div>
                                                    </div>
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
                            <div class="modal fade" id="deleteReviewModal-{{ $review->id }}" tabindex="-1" aria-labelledby="deleteReviewModalLabel-{{ $review->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteReviewModalLabel-{{ $review->id }}">Delete Review</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this review?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('all-reviews.destroy', $review->id) }}" method="POST">
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
                    <div class="d-flex justify-content-center mt-4">
                        {{ $reviews->links() }}
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
