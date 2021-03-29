@extends('layout.main')

@section('content')

@dump('aadsss')
    <h1>User list</h1>

    <table>
        <thead>
            <tr>
                <th>Lp.</th>
                <th>Iter</th>
                <th>ID</th>
                <th>Name</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
           @foreach($users as $user)
               <tr>
                   <th>{{$loop->index}}</th>
                   <th>{{$loop->iteration}}</th>
                   <td>{{$user['userId']}}</td>
                   <td>{{$user['name']}}</td>
                   <td>
                       <a href="{{route('get.users.show',['userId'=>$user['userId']])}}">Szczegóły</a></td>
               </tr>
           @endforeach
        </tbody>
    </table>







    <hr/>
    <hr/>
    <hr/>
    <hr/>



    <table border="1px solid black">
        <thead align="center">
        <tr>
            <th>ID</th>
            <th>Nick</th>
            <th>Opcje</th>
        </tr>
        </thead>
        <tbody align="center">
        <tr>
            <td colspan="3">FOREACH</td>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{$user['userId']}}</td>
                <td>{{$user['name']}}</td>
                <td>
                    <a href="{{route('get.users.show',['userId'=>$user['userId']])}}">Szczegóły</a></td>
            </tr>
        @endforeach

        <tr>
            <td colspan="3">FOR</td>
        </tr>


        @for($i=0;$i<count($users);$i++)
            @continue($i==2)
            <tr>
                <td>{{$users[$i]['userId']}}</td>
                <td>{{$users[$i]['name']}}</td>
                <td>
                    <a href="{{route('get.users.show',['userId'=>$users[$i]['userId']])}}">Szczegóły</a></td>
            </tr>


        @endfor


        <tr>
            <td colspan="3">FORELSE</td>
        </tr>
        @forelse($users as $user)
     @include('user.listRow',['data'=>$user])
        @empty
            <tr>
                <td colspan="3">Pusto</td>
            </tr>
        @endforelse

        <tr>
            <td colspan="3">WHILE</td>
        </tr>

        @php
            $j=0;
        @endphp

        @while($j < count($users))
            <tr>
                <td>{{$users[$j]['userId']}}</td>
                <td>{{$users[$j]['name']}}</td>
                <td>
                    <a href="{{route('get.users.show',['userId'=>$users[$j]['userId']])}}">Szczegóły</a></td>
            </tr>

            @php
                $j++;
            @endphp
        @endwhile

        <tr>
            <td colspan="3">EACH</td>
        </tr>




        @each('user.listRow', $users, 'data', 'user.emptyRow')






        </tbody>
    </table>





@endsection
