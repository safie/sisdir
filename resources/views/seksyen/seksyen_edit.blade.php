@extends('template.base')
@section('pageTitle', 'edit Seksyen')
@section('content')

<br>
  @if ($errors->any())
    <article class="message is-danger">
      <div class="message-header">
        <p>Perhatian</p>
        <button class="delete" aria-label="delete"></button>
      </div>
      <div class="message-body">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </div>
    </article>
  @endif


<form action="{{ route('seksyen.update', $data->id) }}" method="post">
    @method('PATCH')
    @csrf
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input class="input" type="text" value="{{ $data->nama_seksyen }}" name="nama_seksyen">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Singkatan Seksyen</label>
        <div class="control">
          <input class="input" type="text" value="{{ $data->singkatan_seksyen }}" name="singkatan_seksyen">
        </div>
      </div>

      <div class="field">
        <label class="label">Alamat Seksyen</label>
        <div class="control">
          <textarea class="textarea" name="alamat_seksyen">{{ $data->alamat_seksyen }}</textarea>
        </div>
      </div>
     

      <div class="control">
      <button class="button is-primary" type="submit"><i class="fas fa-save"></i></button>
      <button class="button is-danger" type="reset"><i class="fas fa-broom"></i></button>
      </div>

</form>



@endsection