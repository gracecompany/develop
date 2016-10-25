<table class="table table-responsive" id="dealers-table">
    <thead>
       <th>Dealer</th>
       <th>Contact</th>
       <th>Email</th>
       <th>Toll Free</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($dealers as $dealer)
        <tr>
            <td>{!! $dealer->dealer !!}</td>
            <td>{!! $dealer->contact_person !!}</td>
            <td>{!! $dealer->public_email !!}</td>
            <td>{!! $dealer->toll_free !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.dealers.destroy', $dealer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.dealers.show', [$dealer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.dealers.edit', [$dealer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
