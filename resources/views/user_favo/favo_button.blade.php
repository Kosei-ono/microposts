@if (Auth::user()->id != $user->id)
    @if (Auth::user()->is_favoring($micropost->id))
        {!! Form::open(['route' => ['user.unfavo', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavo', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favo', $micropost->id]]) !!}
            {!! Form::submit('Favo', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif
