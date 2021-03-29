@extends('layout.main')

@section('title','Użytkownik')

@section('sidebar')
    @parent
    Sidebar dziecka
@endsection

@auth()
    zalogowany
@endauth

@guest()
    niezalogowany
@endguest



@section('content')
    <hr/>
    <h3>Informacje o użytkowniku</h3>
    <ul>
        <li>User ID: {{$user['userId']}} </li>
        <li>Name: {{$user['name']}}</li>
        <li>First name: {{$user['firstName']}}</li>
        <li>Last name: {{$user['lastName']}}</li>
        <li>City {{$user['city']}}</li>
        <li>Age: {{$user['age']}}</li>

        @if($user['age']>=18)
            <div>Osoba dorosła</div>
        @else
            <div>Dzieciak</div>
        @endif

        <li>HTML: {{$user['html']}}</li>
    </ul>

    @isset($nick)
        Nick: {{$nick}}
    @else
        Nie ma nicku
    @endisset

    <div>

    </div>


    <hr/>
@endsection

