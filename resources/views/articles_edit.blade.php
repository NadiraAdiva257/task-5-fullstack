<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Articles - EDIT DATA</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Articles <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/articles" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/articles/update/{{ $articles->id }}">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>id</label>
                            <input type="text" name="id" class="form-control" placeholder="id" value=" {{ $articles->id }}">
 
                            @if($errors->has('id'))
                                <div class="text-danger">
                                    {{ $errors->first('id')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>title</label>
                            <input type="text" name="title" class="form-control" placeholder="title" value=" {{ $articles->title }}">
 
                            @if($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>content</label>
                            <input type="text" name="content" class="form-control" placeholder="content" value=" {{ $articles->content }}">
 
                            @if($errors->has('content'))
                                <div class="text-danger">
                                    {{ $errors->first('content')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>image</label>
                            <input type="text" name="image" class="form-control" placeholder="image" value=" {{ $articles->image }}">
 
                            @if($errors->has('image'))
                                <div class="text-danger">
                                    {{ $errors->first('image')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>user_id</label>
                            <input type="text" name="user_id" class="form-control" placeholder="user_id" value=" {{ $articles->user_id }}">
 
                            @if($errors->has('user_id'))
                                <div class="text-danger">
                                    {{ $errors->first('user_id')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>category_id</label>
                            <input type="text" name="category_id" class="form-control" placeholder="category_id" value=" {{ $articles->category_id }}">
 
                            @if($errors->has('category_id'))
                                <div class="text-danger">
                                    {{ $errors->first('category_id')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>created_at</label>
                            <input type="text" name="created_at" class="form-control" placeholder="created_at" value=" {{ $articles->created_at }}">
 
                            @if($errors->has('created_at'))
                                <div class="text-danger">
                                    {{ $errors->first('created_at')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>updated_at</label>
                            <input type="text" name="updated_at" class="form-control" placeholder="updated_at" value=" {{ $articles->updated_at }}">
 
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