@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <main class="col-md-8 ml-sm-auto col-lg-8">
                <div class="">
                    <h1 class="">Ajouter une Entreprise</h1>

                </div>
                <form action="{{route('storeCompanies')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="name">Nom *</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Nom">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Adresse *</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Adresse">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Telephone *</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Site internet *</label>
                            <input type="text" class="form-control" id="website" name="website" value="{{old('website')}}" placeholder="Site internet">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
                <br>
            </main>
        </div>
    </div>
@endsection
