@extends('layouts.app', ['title' => __('Datos de Contacto')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hola') . ' '. auth()->user()->name,
        'description' => 'Mantén actualizados tus datos de contacto, son importantes!',
        'class' => 'col-lg-12',
        'cover' => ''
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-12">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Mi Perfil</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('owner.update', $owner->id ) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">Información básica</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">Dirección</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Dirección..." value="{{ $owner->address }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-city">Ciudad</label>
                                    <input type="text" name="city" id="input-city" class="form-control form-control-alternative{{ $errors->has('city') ? ' is-invalid' : '' }}" placeholder="Ciudad..." value="{{ $owner->city }}" required>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-state">Estado</label>
                                    <input type="text" name="state" id="input-state" class="form-control form-control-alternative{{ $errors->has('state') ? ' is-invalid' : '' }}" placeholder="Estádo de residencia..." value="{{ $owner->state }}" required>

                                    @if ($errors->has('state'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                @foreach ($owner->phones as $phone)
                                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-phone">{{ $phone->name }}</label>
                                        <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Teléfono principal..." value="{{ $phone->number }}" required>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                @endforeach

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Actualizar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
