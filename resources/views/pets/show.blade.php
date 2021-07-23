@extends('layouts.app', ['title' => 'Mascotas'])

@section('content')
    @include('users.partials.header', [
        'title' => $pet->name,
        'description' => $pet->description,
        'cover' => isset($cover->picture) ? $cover->picture : '',
        'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    @if ( isset( $cover->picture ) )
                                        <img src="{{ asset('storage') }}/{{ $cover->picture }}" class="">
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>
                        </div>
                    </div> --}}
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    {{-- <div>
                                        <span class="heading">22</span>
                                        <span class="description">{{ __('Friends') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">{{ __('Photos') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">{{ __('Comments') }}</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ $pet->name }}<span class="font-weight-light">, {{ $pet->age }}</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ $pet->owner->state }}, {{ $pet->owner->city }}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Su humano es:
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ $pet->owner->user->name }}
                            </div>
                            <hr class="my-4" />
                            <p>TAG - {{ $pet->tag }}</p>
                            <p>PIN - {{ $pet->pin }}</p>
                            <hr class="my-4" />
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Sus vacunas:
                            </div>
                            <div>
                                <ul class="list-group">
                                    @foreach ($vaccines as $vaccine)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $vaccine->vaccine }} - {{ $vaccine->date }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <hr class="my-4" />
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Sus fotos:
                            </div>
                            <div>
                                <ul class="list-group">
                                    @foreach ($pictures as $picture)
                                        <div class="card" style="width: 100%;">
                                            <img src="{{ asset('storage') }}/{{ $picture->picture }}" class="card-img-top" alt="...">
                                            {{-- <div class="card-body">
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div> --}}
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Info</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('pets.edit', $pet->tag) }}" class="btn btn-success mt-4">Editar</a>
                    </div>
                    <div class="card-body">
                        {{-- <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put') --}}

                            <h6 class="heading-small text-muted mb-4">Info del peludo</h6>

                            {{-- @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif --}}

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Nombre</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="" value="{{ $pet->name }}" required autofocus disabled>

                                    {{-- @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">Descripción</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="" disabled>{{ $pet->description }}</textarea>

                                    {{-- @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-dog_breed">Raza</label>
                                    <input type="text" name="dog_breed" id="input-dog_breed" class="form-control form-control-alternative{{ $errors->has('dog_breed') ? ' is-invalid' : '' }}" placeholder="" value="{{ $pet->dog_breed }}" required disabled>

                                    {{-- @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">Edad</label>
                                    <input type="number" name="age" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="" value="{{ $pet->age }}" required disabled>

                                    {{-- @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-sex">Sexo</label>
                                    <input type="text" name="sex" id="input-sex" class="form-control form-control-alternative{{ $errors->has('sex') ? ' is-invalid' : '' }}" placeholder="" value="{{ $pet->sex }}" required disabled>

                                    {{-- @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-color">Color</label>
                                    <input type="text" name="color" id="input-color" class="form-control form-control-alternative{{ $errors->has('color') ? ' is-invalid' : '' }}" placeholder="Macho o hembra..." value="{{ $pet->color }}" required disabled>

                                    {{-- @if ($errors->has('color'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('color') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-special_cares">Cuidados especiales</label>
                                    <textarea name="special_cares" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="" disabled>{{ $pet->special_cares }}</textarea>

                                    {{-- @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-personality">Personalidad</label>
                                    <textarea name="personality" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="" disabled>{{ $pet->personality }}</textarea>

                                    {{-- @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-veterinary">Veterinario y Estética</label>
                                    <textarea name="veterinary" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="" disabled>{{ $pet->veterinary }}</textarea>

                                    {{-- @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif --}}
                                </div>

                                <div class="text-center">
                                    <a href="{{ route('pets.edit', $pet->tag) }}" class="btn btn-success mt-4">Editar</a>
                                </div>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
