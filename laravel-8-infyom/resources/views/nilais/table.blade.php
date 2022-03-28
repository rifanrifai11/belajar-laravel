<div class="table-responsive">
    <table class="table" id="nilais-table">
        <thead>
        <tr>
            <th>Nilai</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nilais as $nilai)
            <tr>
                <td>{{ $nilai->nilai }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['nilais.destroy', $nilai->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('nilais.show', [$nilai->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('nilais.edit', [$nilai->id]) }}"
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
