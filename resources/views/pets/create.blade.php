@extends('layouts.app', ['title' => 'Mascotas'])

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            {{-- <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">

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
                                            {{ $vaccine->vaccine }} ({{ $vaccine->date }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="#" class="btn">Nueva vacuna</a>
                            <hr class="my-4" />
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Sus fotos:
                            </div>
                            <div>
                                <ul class="list-group">
                                    @foreach ($pictures as $picture)
                                        <div class="card" style="width: 100%;">
                                            <img src="{{ $picture->picture }}" class="card-img-top" alt="...">

                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="#" class="btn">Nueva foto</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-12 order-xl-12">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Datos básicos</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('pets.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Info del peludo</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">Nombre</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="El nombre de la mascota..." value="" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">Descripción</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe a grandes rasgos como es tu mascota..."></textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('dog_breed') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-dog_breed">Raza</label>
                                    <input type="text" name="dog_breed" id="input-dog_breed" class="form-control form-control-alternative{{ $errors->has('dog_breed') ? ' is-invalid' : '' }}" placeholder="Su raza, o si es criollo también es genial..." value="">

                                    @if ($errors->has('dog_breed'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dog_breed') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('age') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-age">Edad</label>
                                    <input type="number" name="age" id="input-age" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Cuantos años tiene..." value="">

                                    @if ($errors->has('age'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('sex') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-sex">Sexo</label>
                                    {{-- <input type="text" name="sex" id="input-sex" class="form-control form-control-alternative{{ $errors->has('sex') ? ' is-invalid' : '' }}" placeholder="Macho o hembra..." value=""> --}}
                                    <select name="sex" class="form-control" aria-label="Default select example">
                                        <option value="Macho">Macho</option>
                                        <option value="Hembra">Hembra</option>
                                    </select>

                                    @if ($errors->has('sex'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sex') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-color">Color</label>
                                    <input type="text" name="color" id="input-color" class="form-control form-control-alternative{{ $errors->has('color') ? ' is-invalid' : '' }}" placeholder="Qué color predomina?" value="">

                                    @if ($errors->has('color'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('color') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('special_cares') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-special_cares">Cuidados especiales</label>
                                    <textarea name="special_cares" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe si tu mascota requiere algo en particular, cualquier dato ayuda mucho..."></textarea>

                                    @if ($errors->has('special_cares'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('special_cares') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('personality') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-personality">Personalidad</label>
                                    <textarea name="personality" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Si es tranquilo, si es nervioso, intenta describir su personalidad..."></textarea>

                                    @if ($errors->has('personality'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('personality') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('veterinary') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-veterinary">Veterinario y Estética</label>
                                    <textarea name="veterinary" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba aquí nombre y télefono de mi veterinario y datos de estética..."></textarea>

                                    @if ($errors->has('veterinary'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('veterinary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <h6 class="heading-small text-muted mb-4">Datos del TAG y PIN</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('tag') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tag">TAG</label>
                                    <input type="text" name="tag" id="input-tag" class="form-control form-control-alternative{{ $errors->has('tag') ? ' is-invalid' : '' }}" placeholder="TAG" value="">

                                    @if ($errors->has('tag'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tag') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('tag') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pin">PIN</label>
                                    <input type="text" name="pin" id="input-pin" class="form-control form-control-alternative{{ $errors->has('pin') ? ' is-invalid' : '' }}" placeholder="PIN" value="">

                                    @if ($errors->has('pin'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pin') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Guardar</button>
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
