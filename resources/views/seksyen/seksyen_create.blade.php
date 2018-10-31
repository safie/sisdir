@extends('template.base')
@section('pageTitle', 'Tambah Seksyen')
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

<form action="{{ route('seksyen.store') }}" method="post">
    @csrf
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input class="input" type="text" placeholder="Cth. Seksyen..." name="nama_seksyen">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Singkatan Seksyen</label>
        <div class="control">
          <input class="input" type="text" placeholder="Cth. SP.. " name="singkatan_seksyen">
        </div>
      </div>

      <div class="field">
        <label class="label">Alamat Seksyen</label>
        <div class="control">
          <textarea class="textarea" placeholder="Cth. Aras..." name="alamat_seksyen"></textarea>
        </div>
      </div>

      <div class="control">
      <button class="button is-primary tooltip is-tooltip-bottom" data-tooltip="Submit" type="submit"><i class="fas fa-save">Simpan</i></button>
      <button class="button is-danger tooltip is-tooltip-bottom" data-tooltip="Reset" type="reset"><i class="fa fa-eraser">Padam</i></button>
      </div>

</form>


@endsection