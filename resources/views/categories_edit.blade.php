<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Categories - EDIT DATA</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Articles <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/categories" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/categories/update/{{ $categories->id }}">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>id</label>
                            <input type="text" name="id" class="form-control" placeholder="id" value=" {{ $categories->id }}">
 
                            @if($errors->has('id'))
                                <div class="text-danger">
                                    {{ $errors->first('id')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" placeholder="name" value=" {{ $categories->name }}">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>user_id</label>
                            <input type="text" name="user_id" class="form-control" placeholder="user_id" value=" {{ $categories->user_id }}">
 
                            @if($errors->has('user_id'))
                                <div class="text-danger">
                                    {{ $errors->first('user_id')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>created_at</label>
                            <input type="text" name="created_at" class="form-control" placeholder="created_at" value=" {{ $categories->created_at }}">
 
                            @if($errors->has('created_at'))
                                <div class="text-danger">
                                    {{ $errors->first('created_at')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>updated_at</label>
                            <input type="text" name="updated_at" class="form-control" placeholder="updated_at" value=" {{ $categories->updated_at }}">
 
                            @if($errors->has('updated_at'))
                                <div class="text-danger">
                                    {{ $errors->first('updated_at')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>