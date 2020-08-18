@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <main class="col-md-8 ml-sm-auto col-lg-8">
                <div class="">
                    <h1 class="">Modifier un Employé</h1>
                </div>
                <form action="{{route('updateEmploye',['id'=>$employe->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{$error}}</p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Prenom *</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$employe->prenom}}" placeholder="Prenom">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Nom *</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$employe->name}}" placeholder="Nom">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Adresse *</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$employe->address}}" placeholder="Adresse">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="entreprise">Entreprise *</label>
                            <select class="form-control form-control-lg" id="entreprise_id" name="entreprise_id">
                                @foreach($entreprises as $entreprise)
                                    <option
                                        selected value="{{$entreprise->id}}">{{$entreprise->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Designation (Poste) *</label>
                            <input type="text" class="form-control" id="poste" name="poste" value="{{$employe->poste}}" placeholder="Designation">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$employe->email}}" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Téléphone*</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$employe->phone}}" placeholder="Phone">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
                <br>
            </main>
        </div>
    </div>
@endsection
