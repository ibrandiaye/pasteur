@extends('layout')
@section('title', '| retour')


@section('content')

<div class="content-wrapper">
        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-info">Formulaire</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#" role="button" class="btn btn-success">ACCUEIL</a></li>
                                {{--  <li class="breadcrumb-item active"><a href="#" role="button" class="btn btn-success">ENREGISTRER UN RETOUR</a></li>  --}}
                                </ol>
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
            </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="col-12">
    <div class="card border-danger border-0">
        <div class="card-header bg-success text-center">
            @foreach ($newsData->data as $data)
                {{ $data->title }}
            @endforeach</div>
            <div class="card-body">
                @foreach ($newsData->data as $data)
                    @foreach ($data->fields as $field)
                        @if($field->type=='choice')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ $field->title }}</label>
                                <select class="form-control " id="depot_id" name="" required="">
                                    <option value="">Selectionnez</option>
                                    @foreach ($field->choices as $choice)
                                    <option value="{{$choice->key}}"  >{{$choice->value}}</option>
                                        @endforeach

                                </select>
                            </div>
                        </div>
                        @elseif ($field->type=='text')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ $field->title }}</label>
                                <input type="text" name=""  value="" class="form-control"  required>
                            </div>
                        </div>
                        @elseif($field->type=='date')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ $field->title }}</label>
                                <input type="date" name=""  value="" class="form-control"  required>
                            </div>
                        </div>
                        @elseif($field->type=='hour')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ $field->title }}</label>
                                <input type="time" name=""  value="" class="form-control"  required>
                            </div>
                        </div>
                        @elseif($field->type=='number')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ $field->title }}</label>
                                <input type="number" name=""  value="" class="form-control"  required>
                            </div>
                        </div>
                        @elseif($field->type=='picture')
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>{{ $field->title }}</label>
                                <input type="file" name=""  value="" class="form-control"  required>
                            </div>
                        </div>
                         @endif
                    @endforeach
                @endforeach</div>


            </div>

        </div>
    </div>
</div>

@endsection





