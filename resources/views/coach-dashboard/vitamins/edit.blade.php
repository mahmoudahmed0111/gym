@extends('layouts.coach-dashboard.app')
@section('header__title', __('home.vitamins'))
@section('header__icon', 'bx bx-list-ul')
@section('main')
    <div class="content-wrapper">
        <!-- Content -->


        <div class="p-3 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4 ">
                        <div class="d-flex p-3 px-4 align-items-center justify-content-between w-100">
                            <h5 class="card-header p-0">{{ __('home.Edit') }} {{ __('home.vitamin') }}</h5>
                            <a href="{{ route('coach.food.index') }}" style="width: fit-content">
                                <button type="button" class="btn btn-dark d-flex align-items-center gap-2"> <i
                                        class="fa-solid fa-backward"></i>
                                    {{ __('home.Back') }}
                                </button>
                            </a>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('coach.vitamins.update', $vitamin->id) }}" method="POST" class="row" enctype="multipart/form-data">
                                @method("put")
                                @csrf

                                <div class="col-md-6">
                                    @include('components.input', [
                                        'value' => old('name',$vitamin->name),
                                        'name' => 'name',
                                        'type' => 'text',
                                        'label' => 'Name',
                                        'placeholder' => 'Vitamin Name',
                                    ])
                                </div>
                                <div class="col-md-6">
                                    @include('components.input', [
                                        'value' => old('amount',$vitamin->desc),
                                        'name' => 'desc',
                                        'type' => 'text',
                                        'label' => 'desc',
                                        'placeholder' => 'description',
                                        ])
                                </div>
                                <div class="col-md-6">
                                    @include('components.input', [
                                        'value' => old('fat',$vitamin->price),
                                        'name' => 'price',
                                        'type' => 'text',
                                        'label' => 'price',
                                        'placeholder' => 'price',
                                        ])
                                </div>
                                    @include('components.input', [
                                        'value' => old('img'),
                                        'name' => 'img',
                                        'type' => 'file',
                                        'label' => 'Image',
                                        'placeholder' => '',
                                    ])
                                <div class="d-flex align-items justify-content-end">
                                    @include('components.button', [
                                        'type' => 'submit',
                                        'name' => 'edit',
                                    ])
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts-dashboard')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        $('#search_input').on('keyup', function() {
            table.search(this.value).draw();
        });
        $(document).ready(function() {
            // When the header checkbox is clicked
            $('#check__box').click(function() {
                // Check if it's checked or not
                var isChecked = $(this).prop('checked');

                // Iterate through each row in the table
                $('#myTable tbody tr').each(function() {
                    // Set the checkbox in each row to the same state as the header checkbox
                    $(this).find('.form-check-input.row__check').prop('checked', isChecked);
                });
            });
        });
    </script>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
