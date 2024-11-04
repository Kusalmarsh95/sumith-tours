@php
    use App\Models\Reservation;
    use App\Models\Review;
    $reservationCount = Reservation::count();
    $avgRating = Review::avg('rating') ?? 0;;
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                            <div class="card bg-warning">
                                <div class="card-body px-3 py-4">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="color-card">
                                            <p class="mb-0 color-card-head"><span class="h4">Reservations</span></p>
                                            <h2 class="text-white">Requested Users - <span class="h5">{{$reservationCount}}</span>
                                            </h2>
                                        </div>
                                        <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                    </div>
                                    <h6 class="text-white">Since 2024</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                            <div class="card bg-info">
                                <div class="card-body px-3 py-4">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="color-card">
                                            <p class="mb-0 color-card-head"><span class="h4">Reviews</span></p>
                                            <h2 class="text-white">Average Rating - <span class="h5">{{ number_format($avgRating,2) }}</span>
                                            </h2>
                                        </div>
                                        <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                    </div>
                                    <h6 class="text-white text-center">---</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
