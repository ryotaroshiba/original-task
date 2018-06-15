    @if (Auth::user()->is_favoritings($user->id))
        {!! Form::open(['route' => ['user.unfavorites', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorites', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorites', $user->id]]) !!}
            {!! Form::submit('Favorites', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
