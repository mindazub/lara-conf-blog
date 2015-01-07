@extends('layout.master')


@section('content')

<p>
	{{ e($user->username) }}
</p>
<p>
	{{ e($user->email) }}
</p>

@stop