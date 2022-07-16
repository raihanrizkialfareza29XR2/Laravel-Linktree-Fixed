<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/image/man.png') }}">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="d-sm-none d-md-none d-lg-block d-smi-none" style="margin-left: 500px; margin-top: -20px">
                @auth
                    <div class="seperti-itu text-center">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-danger">LogOut</button>
                        </form>
                        <form action="{{ route('links.index') }}" class="d-inline">
                            <button class="btn btn-primary">Manage Links</button>
                        </form>
                        <form action="{{ route('link-user') }}" class="d-inline">
                            <button class="btn btn-primary">My Links</button>
                        </form>
                        <form action="{{ route('link-ketua') }}" class="d-inline">
                            <button class="btn btn-primary">Ketua Links</button>
                        </form>
                    </div>
                @else
                    <div class="seperti-itu text-center">
                        <a href="{{ route('login') }}" class="btn btn-primary">Log In</a>
                    </div>
                @endauth
            </div>
            <div class="d-lg-none" style="margin-top: -20px; margin-left: -10px">
                @auth
                    <div class="seperti-itu text-center">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-danger mt-3">LogOut</button>
                        </form>
                        <form action="{{ route('links.index') }}" class="d-inline">
                            <button class="btn btn-primary mt-3">Manage Links</button>
                        </form>
                        <form action="{{ route('link-user') }}" class="d-inline">
                            <button class="btn btn-primary mt-3">My Links</button>
                        </form>
                        <form action="{{ route('link-ketua') }}" class="d-inline">
                            <button class="btn btn-primary mt-3">Ketua Links</button>
                        </form>
                    </div>
                @else
                    <div class="seperti-itu text-center">
                        <a href="{{ route('login') }}" class="btn btn-primary">Log In</a>
                    </div>
                @endauth
            </div>
            <div class="col-md-12 mt-5">
                <img src="{{ asset('assets/image/man.png') }}" width="100" height="100" class="image-bunder rounded-circle d-block mx-auto">
                <div class="mt-5"></div>
                <div class="mt-2"></div>
                <div class="text">
                    <h1 class="text-center text-h1">General Office Links</h1>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="mt-5"></div>
                <div class="mt-2"></div>
                <div class="seperti-itu">
                    @forelse ($offices as $l)
                        @if ($l->name != null)
                            <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                <p class="text-emboh text-embohparah">{{ $l->name }}</p>
                            </a>
                        @else
                            <a href="https://{{ $l->link }}" class="luweh-emboh emboh">
                                <p class="text-emboh text-embohparah">{{ $l->link }}</p>
                            </a>
                        @endif
                        @foreach ($office as $ls)
                            @if ($ls->name != null)
                                <a href="{{ $ls->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $ls->name }}</p>
                                </a>
                            @else
                                <a href="{{ $ls->link }}" class="luweh-emboh emboh">
                                    <p class="text-emboh text-embohparah">{{ $ls->link }}</p>
                                </a>
                            @endif
                        @endforeach
                    @empty
                        <a class="luweh-emboh emboh">
                            <p class="text-emboh text-embohparah">Belum tersedia link general</p>
                        </a>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="mt-5"></div>
                <div class="mt-2"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>