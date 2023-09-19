@extends('layout')

@section('title','Home')

@section('content')
    <div>
        <h1>Hi I'm Anitha George</h1>
        <h3>Data Analyst <br>
            {{$message}}

        </h3>
    </div>
    {{-- {{$message}} --}}
    @foreach ($names as $nam)
        {{-- {{$nam}}   --}}
        <li>{{$nam}}</li>
    @endforeach

    @if (1==0)
        <div>
            blaaaaaaa
        </div>
        @else
        <div>
            noooo
        </div>             
    @endif

    <form action="/result" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">Submit</button>
    </form>
    {{-- <h1>Name is {{$name}}</h1>
    <h2>Email is {{$email}}</h2> --}}

@endsection