@extends('layouts.home')

@section('content')
<div class="card h-100">
    <div class="card-header">
        {{ __('Tambah Departement') }}
    </div>
    <div class="card-body">
        <form action="simpan" method="post" enctype="multipart/form-data">
        @csrf
            <!-- Nama -->
            <div class="row">
                <div class="col-sm-2">
                    Main
                </div>
                <div class="col-sm-4">
                    <input list="main" type="text" class="form-control" name="main" value="{{ old('main') }}" required autofocus>
                </div>
                <div class="col-sm-2">
                    <input type="submit" class="form-control btn btn-success" value="Simpan" required autofocus>
                </div>
            </div>
            <br>
            <!-- NIK -->
            <div class="row">
                <div class="col-sm-2">
                    Nama Departement
                </div>
                <div class="col-sm-4">
                    <input list="departement" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                </div>
            </div>
            <br>
            <!-- Dept -->
            <div class="row">
                <div class="col-sm-2">
                    Cost Center
                </div>
                <div class="col-sm-4">
                <input id="costcenter" type="text" min="0" class="form-control" name="costcenter" value="{{ old('costcenter') }}" required autofocus>
                </div>
            </div>
            <br>
        </form>
    </div>
</div>
</div>
</div>
<datalist id="main">
@foreach ($list1 as $ls1)
<option>{{$ls1->main}}</option>
@endforeach
</datalist>

<datalist id="departement">
@foreach ($list2 as $ls2)
  <option>{{$ls2->departement}}</option>
@endforeach
</datalist>
@endsection