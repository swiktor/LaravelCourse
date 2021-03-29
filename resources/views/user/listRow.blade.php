<tr>
    <td>{{$data['userId']}}</td>
    <td>{{$data['name']}}</td>
    <td>
        <a href="{{route('get.users.show',['userId'=>$data['userId']])}}">Szczegóły</a></td>
</tr>
