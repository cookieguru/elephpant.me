<strong>@if ($elephpant->format != \App\Format::Small){{ ucfirst($elephpant->format->value) }} @endif{{ $elephpant->name }}</strong> <em>({{ $elephpant->popular_name }})</em>
