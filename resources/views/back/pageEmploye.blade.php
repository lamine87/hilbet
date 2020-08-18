@extends('welcome')
@section('content')
<br><br>
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
            Employés
                <hr>
                <a href="{{route('ajoutEmploye')}}" class="btn btn-primary">Ajouter Employé</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">

                 Liste des Employés

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Entreprise</th>
                <th scope="col">Poste</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
            </thead>
            @foreach($employes as $employe)
            <tbody>
            <tr>
                <th scope="row">{{$employe->id}}</th>
                <td>{{$employe->prenom}}</td>
                <td>{{$employe->name}}</td>
                <td>{{$employe->address}}</td>
                @foreach($entreprises as $entreprise)
                    @if($entreprise->id == $employe->entreprise_id)
                        <td>{{$entreprise->name}}</td>
                    @endif
                @endforeach
                <td>{{$employe->poste}}</td>
                <td>{{$employe->email}}</td>
                <td>{{$employe->phone}}</td>
                <td>
                    <a href="{{route('editEmploye',['id'=>$employe->id])}}" class="btn btn-primary">Edit</a>
                </td>

                <td>
                    <a href="{{route('deleteEmploye',['id'=>$employe->id])}}" onclick="return(confirm('sans regret ?'))" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            </tbody>
                @endforeach
        </table>
                <div class="col-md-auto">
                    {{$employes->links()}}
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
<br><br><br><br>
@endsection
