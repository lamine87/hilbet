@extends('welcome')
@section('content')
    <br>
<div class="container">

    <table class="table table-bordered">
        <thead>
        <tr>
            @if (session('notice'))
                <div class="alert alert-success">
                    {{ session('notice') }}
                </div>
            @endif
            <th scope="col">
            Entreprise
                <hr>
                <a href="{{route('pageAdd')}}" class="btn btn-primary">Ajouter Entreprise</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">

                Liste des Entreprises

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Site Internet</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            @foreach($entreprises as $entreprise)
            <tbody>
            <tr>
                <th scope="row">{{$entreprise->id}}</th>
                <td>{{$entreprise->name}}</td>
                <td>{{$entreprise->email}}</td>
                <td>{{$entreprise->address}}</td>
                <td>{{$entreprise->phone}}</td>
                <td>{{$entreprise->website}}</td>
                <td>
                    <a href="{{route('pageEdit',['id'=>$entreprise->id])}}" class="btn btn-primary">Edit</a>
                </td>

                <td>
                    <a href="{{route('deleteCompanies',['id'=>$entreprise->id])}}" onclick="return(confirm('sans regret ?'))" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            </tbody>
                @endforeach
        </table>

                <div class="col-md-auto">
                    {{$entreprises->links()}}
                </div>

            </th>
        </tr>
        </thead>

         </table>
            </th>
        </tr>
        </thead>

    </table>
</div>

    <br><br>
@endsection
