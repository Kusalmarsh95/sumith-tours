<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gallery') }}
        </h2>
    </x-slot>
    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
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
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadImageModal">
                            Add New Image
                        </button>

                        <!-- Image Gallery Table -->
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Title</th>
                                <th class="text-center">Thumbnail</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->title }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" width="100">
                                    </td>
                                    <td class="text-center">
                                        <!-- Edit Button (Modal Trigger) -->
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editImageModal-{{ $gallery->id }}">
                                            Edit
                                        </button>

                                        <!-- Delete Button (Modal Trigger) -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteImageModal-{{ $gallery->id }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editImageModal-{{ $gallery->id }}" tabindex="-1" aria-labelledby="editImageModalLabel-{{ $gallery->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editImageModalLabel-{{ $gallery->id }}">Edit Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="{{ $gallery->title }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Select New Image (optional)</label>
                                                        <input type="file" class="form-control" id="image" name="image">
                                                        <small class="text-danger file-size-error" style="display: none;"></small>
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
                                <div class="modal fade" id="deleteImageModal-{{ $gallery->id }}" tabindex="-1" aria-labelledby="deleteImageModalLabel-{{ $gallery->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteImageModalLabel-{{ $gallery->id }}">Delete Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this image titled "{{ $gallery->title }}"?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST">
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
                            {{ $galleries->links() }}
                        </div>
                    </div>

                    <!-- Modal for Image Upload -->
                    <div class="modal fade" id="uploadImageModal" tabindex="-1" aria-labelledby="uploadImageModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="uploadImageModalLabel">Upload New Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data" class="image-upload-form">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Select Image</label>
                                            <input type="file" class="form-control" id="image" name="image" required>
                                            <small class="text-danger file-size-error" style="display: none;"></small>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Upload Image</button>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select both forms by class (you can use a more specific selector if needed)
            document.querySelectorAll('.image-upload-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    const imageInput = this.querySelector('input[type="file"]');
                    const maxSize = 5 * 1024 * 1024; // 5 MB in bytes

                    if (imageInput.files.length > 0 && imageInput.files[0].size > maxSize) {
                        e.preventDefault(); // Prevent form submission
                        const errorContainer = this.querySelector('.file-size-error');
                        errorContainer.textContent = "Image size should not exceed 5 MB.";
                        errorContainer.style.display = 'block';
                    }
                });
            });
        });
    </script>

</x-app-layout>
