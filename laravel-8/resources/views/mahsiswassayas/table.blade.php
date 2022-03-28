<div class="table-responsive">
    <table class="table" id="mahsiswassayas-table">
        <thead>
        <tr>
            <th>Nama</th>
        <th>Nim</th>
        <th>Kontak</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahsiswassayas as $mahsiswassaya)
            <tr>
                <td>{{ $mahsiswassaya->nama }}</td>
            <td>{{ $mahsiswassaya->nim }}</td>
            <td>{{ $mahsiswassaya->kontak }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mahsiswassayas.destroy', $mahsiswassaya->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mahsiswassayas.show', [$mahsiswassaya->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mahsiswassayas.edit', [$mahsiswassaya->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
