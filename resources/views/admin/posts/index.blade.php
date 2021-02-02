@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i post</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Sottotitolo</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $ele)
                            <tr>
                                <td>
                                    {{$ele->id}}
                                </td>
                                <td>
                                    {{$ele->name}}
                                </td>
                                <td>
                                    {{$ele->img}}
                                </td>
                                <td>
                                    <a href=""
                                        class="btn btn-success">
                                        Visualizza
                                     </a>
                                    <a href=""
                                        class="btn btn-warning">
                                        Modifica
                                     </a>
                                    <form method="POST" class="d-inline-block"
                                    action="">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Cancella
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>

                </table>
                <div class="col-lg-12">
                    <a href="" class="btn btn-info">Aggiungi post</a>
                </div>
            </div>
        </div>
    </div>


@endsection
