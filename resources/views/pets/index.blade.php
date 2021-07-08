@extends('layouts.app', ['title' => 'Mascotas'])

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            @if (isset($success))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $success }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-12 mb-xl-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Mis mascotas</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('pets.create') }}" class="btn btn-sm btn-primary">Nueva mascota</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Raza</th>
                                    <th scope="col">Edad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ( isset($pets) )
                                    @foreach ($pets as $pet)
                                        <tr>
                                            <th scope="row">
                                                <a href="{{ route('pets.show', $pet->tag) }}">
                                                    {{ $pet->name }}
                                                </a>
                                            </th>
                                            <td>
                                                {{ $pet->dog_breed }}
                                            </td>
                                            <td>
                                                {{ $pet->age }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')

@endpush
