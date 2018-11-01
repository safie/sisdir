@extends('template.base')
@section('pageTitle', 'Senarai Staf')
@section('content')

@if(session()->get('success'))
    <article class="message is-danger">
        <div class="message-header">
        <p>Perhatian</p>
        <button class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body">
                {{ session()->get('success') }}
        </div>
    </article>

@endif()

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pegawai</th>
            <th>Jawatan</th>
            <th>Gred Jawatan</th>
            <th>Unit & Seksyen</th>

        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($data as $datas)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datas->nama_staf }}</td>
            <td>{{ $datas->nama_jawatan }}</td>
            <td>{{ $datas->gred_jawatan }}</td>
            <td>{{ $datas->id_unit}}<br>{{ $datas->id_seksyen}}</td>
            <td>
                <form action="{{ route('seksyen.destroy', $datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a class="button is-primary" href="{{ route('seksyen.edit',$datas->id) }}" ><i class="far fa-edit"></i>Edit</a>
                    <button class="button is-danger" type="delete" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash"></i>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- /.main-section -->
@endsection
