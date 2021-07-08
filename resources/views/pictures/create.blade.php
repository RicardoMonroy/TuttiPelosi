@extends('layouts.app', ['title' => __('Fotos')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hola') . ' '. auth()->user()->name,
        'description' => 'Las fotos de tu peludo ayudan a su pronta identificación, procura mantenerlas actualizadas!',
        'class' => 'col-lg-12',
        'cover' => ''
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-12">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Mis datos de contacto</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('pictures.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Información completa</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('pet') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pet">Selecciona a tu peludo</label>
                                        <select name="pet" class="form-control" aria-label="Default select example">
                                            @foreach ($pets as $pet)
                                                <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                                            @endforeach
                                        </select>

                                    @if ($errors->has('pet'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pet') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Foto de tu mascota</label>
                                        <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>

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

@push('js')


@endpush
