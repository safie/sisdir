@extends('template.base')
@section('pageTitle', 'Tambah Unit')
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

<form action="{{ route('unit.store') }}" method="post">
    @csrf
    <div class="field">
        <label class="label">Nama Unit</label>
        <div class="control">
          <input class="input" type="text" placeholder="Cth. unit..." name="nama_unit">
        </div>
      </div>
    
    <div class="select">
        <label class="label">Seksyen</label>
          <select class="control" name="id_seksyen">
            @foreach ($seksyen as $listseksyen)       
            <option  value="{{$listseksyen->id}}"> {{ $listseksyen->nama_seksyen }}</option>
            @endforeach
          </select>
          <br>
          <div class="control">
              <button class="button is-primary tooltip is-tooltip-bottom" data-tooltip="Submit" type="submit"><i class="fas fa-save"></i>Simpan</button>
              <button class="button is-danger tooltip is-tooltip-bottom" data-tooltip="Reset" type="reset"><i class="fa fa-eraser"></i>Padam</button>
              </div>


      </div>    

</form>


@endsection