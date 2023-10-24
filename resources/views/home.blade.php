@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <body>

                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>


                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($dashboard_usuarios as $usuario )

                                <tr>
                                    <th scope="row">{{ $usuario->id }}</th>
                                    <td>{{ $usuario->First }}</td>
                                    <td>{{ $usuario->Last }}</td>
                                    <td>{{ $usuario->Handle }}</td>

                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="container">
                        <form method="POST" action="{{ route('save.user')}}">
                            @method('POST')
                            <div class="form-group">
                                <label for="first"></label>
                                <input type="text" class="form-control" id="first" name="first" placeholder="Ingrese nombre">
                            </div>

                            <div class="form-group">
                                <label for="last"></label>
                                <input type="text" class="form-control" id="last" name="last" placeholder="Ingrese apellido">
                            </div>

                            <div class="form-group">
                                <label for="handle"></label>
                                <input type="text" class="form-control" id="handle" name="handle" placeholder="Ingrese nickname">
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
