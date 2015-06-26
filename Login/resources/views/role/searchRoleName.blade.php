@extends('layouts.main')

@section('title')
Searching Role
@stop

@section('content')
<div>
  {{print_r($role->toArray())}}
</div>
@stop