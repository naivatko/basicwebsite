@extends('layouts.app')

@section('content')
    <h1>HOME</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ipsum ullam fugit quia, ad ab sed voluptates tenetur distinctio eligendi numquam minus sit quae fugiat illo suscipit nesciunt laborum facere!</p>
@endsection

@section('sidebar')

    @parent
    <p>This is appended to the sidebar</p>
@endsection