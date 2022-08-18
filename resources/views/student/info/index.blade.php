

<ul>

    @foreach($allData as $data)
    <li>{{$data['name']}}</li>
    <li>{{$data['roll']}}</li>
    <li>{{$data['address']}}</li>
    <br>
    @endforeach
</ul>