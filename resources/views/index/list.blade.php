<br>
<table class="table">
@foreach($data->chunk(4) as $chunk)

<div class="columns">
    @foreach ($chunk as $datas)
    <div class="column is-3 has-text-centered">
            <div class="card">
                    <div class="card-content is-info">
                        <div class="content">
                            <b>{{ $datas->singkatan_seksyen }}</b><br>
                            {{ $datas->nama_seksyen }}
                        </div>
                    </div>
                    <footer class="card-footer has-text-centered">
                        <a href="#" class="card-footer-item tooltip" data-tooltip="Tooltip Text">Pegawai</a>
                        <a href="#" class="card-footer-item" data-target="modal" id="#mybtn" aria-haspopup="true">Alamat</a>
                    </footer>
                </div>
    </div>
    @endforeach
</div>

@endforeach
</table>

@include('template.modal_alamat')
