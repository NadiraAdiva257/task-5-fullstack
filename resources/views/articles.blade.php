<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Articles</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Articles 
                </div>
                <div class="card-body">
                    <a href="/articles/tambah" class="btn btn-primary">Input Artikel Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>content</th>
                                <th>image</th>
                                <th>user_id</th>
                                <th>category_id</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->title }}</td>
                                <td>{{ $a->content }}</td>
                                <td>{{ $a->image }}</td>
                                <td>{{ $a->user_id }}</td>
                                <td>{{ $a->category_id }}</td>
                                <td>{{ $a->created_at }}</td>
                                <td>{{ $a->updated_at }}</td>
                                <td>
                                    <a href="/articles/edit/{{ $a->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/articles/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>