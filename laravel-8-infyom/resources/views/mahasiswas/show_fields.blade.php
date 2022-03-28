<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $mahasiswa->nama }}</p>
</div>

<!-- Nim Field -->
<div class="col-sm-12">
    {!! Form::label('nim', 'Nim:') !!}
    <p>{{ $mahasiswa->nim }}</p>
</div>

<!-- Kontak Field -->
<div class="col-sm-12">
    {!! Form::label('kontak', 'Kontak:') !!}
    <p>{{ $mahasiswa->kontak }}</p>
</div>

