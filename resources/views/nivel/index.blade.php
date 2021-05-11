<br/>
<div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th><th>Competencia</th><th>Nivel</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
        @foreach($nivel as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->competencia }}</td><td>{{ $item->nivel }}</td>
                <td>
                    <form method="POST" action="{{ url('/nivel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Nivel" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        endforeach
            </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $nivel->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
