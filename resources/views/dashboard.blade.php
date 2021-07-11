@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Mis mascotas</h5>
                                <span class="h2 font-weight-bold mb-0">
                                    @if ( $pets )
                                        {{ $pets->count() }}
                                    @else
                                        0
                                    @endif
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                    <i class="fas fa-paw"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-right"></i> Ir a: </span>
                            <span class="text-nowrap"><a href="{{ route('pets.index') }}">Mis mascotas</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Mis Datos</h5>
                                <span class="h2 font-weight-bold mb-0">
                                    @if ( $owner )
                                        Tienes registrados datos, no olvides mantener <a href="{{ route('owner.edit', auth()->user()->owner->id ) }}" > actualizados tus datos</a>
                                    @else
                                        Aún no tienes datos de contacto
                                    @endif
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-right"></i> Ir a: </span>
                            <span class="text-nowrap"><a href="{{ route('profile.edit') }}">Mi perfil</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
