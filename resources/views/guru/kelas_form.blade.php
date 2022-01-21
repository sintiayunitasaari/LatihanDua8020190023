@extends('guru.layout')

@section('content')
 <div class="card">
     <div class="card-header bg-primary text-white">Buat Kelas Belajar Baru</div>

     <div class="card-body">
         {!! Form::model($model, ['url' => $url, 'method' => $method]) !!} 

         <div class="form-group">
             <label for="nama">Nama Kelas</label>
             {!! Form::text('nama', null, ['class' => 'form-control', 'autofocus']) !!}
             <span class="text-helper">{{ $errors->first('nama') }}</span>
         </div>

         <div class="form-group">
            <label for="deskripsi">Deskripsi Kelas</label>
            {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'rows' => 3]) !!}
            <span class="text-helper">{{ $errors->first('deskripsi') }}</span>
        </div>

        <div class="form-group">
            <label for="kode">Kode Kelas</label>
            {!! Form::text('kode', $model->kode ?? \Str::random(5), ['class' => 'form-control', 'max' => 5]) !!}
            <span class="text-helper">{{ $errors->first('kode') }}</span>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm">{{ $namaTombol }}</button>
        </div>

         {!! Form::close() !!}          
     </div>
 </div>   
@endsection
