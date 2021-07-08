<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Tag</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/App.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <div class="container-fluid content" id="misMascotas">
        <div class="wp_card" id="registro">
            <div class="wp_form">
                <form method="post" action="{{ route('P.store') }}" autocomplete="off">
                    @csrf
                        <div><img src="../images/logo-gris.png" alt="logo"/></div>
                        <h1 class="titleCard">INGRESA EL TAG</h1>
                        <div class="wp_showData">
                            <input class="inputInfo" type="text" name="tag" placeholder="TAG (ej: P000000)"/>
                        </div>
                        @if (isset($success))
                            <p>{{ $success }}</p>
                        @endif
                        <button type="submit" class="btn btnNext btnNewTag">BUSCAR MASCOTA</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/showModal.js"></script>
    <script src="../js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
