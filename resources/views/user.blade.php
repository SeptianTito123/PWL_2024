<html>
    <head>
        <title>Bata User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <TH>Username</TH>
                <th>Nama</th>
                <th>ID level Pengguna</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->user_id}}</td>    
                <td>{{$d->username}}</td> 
                <td>{{$d->name}}</td> 
                <td>{{$d->level_id}}</td>
                <td>{{$d->level->level_kode}}</td>
                <td>{{$d->level->level_nama}}</td>
                <td><a href="{{url('/user/ubah/'.$d->user_id)}}">ubah</a>
                     <a href="{{url('/user/hapus/'.$d->user_id)}}">hapus</a></td>
            </tr>    
            @endforeach
        </table>
    </body>
</html>