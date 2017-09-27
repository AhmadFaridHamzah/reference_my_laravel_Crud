{{--{{ dd($datacar_id) }}--}}

<!doctype html>
<html>
    <head>
      <title>Simple CRUD</title>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
      <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('car.index') }}">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="">View all record</a></li>
                <li><a href="{{ route('car.create') }}">Create new record</a></li>
            </ul>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">View Record</div>

                        <div class="panel-body">
                          <form class="form-horizontal">

                          	<div class="form-group">
                          		<label for="name" class="col-md-4 control-label">Nama</label>

                          		<div class="col-md-6">
                          			{{ $datacar_id->name }}
                          		</div>

                          	</div>

                          	<div class="form-group">
                          		<label for="name" class="col-md-4 control-label">E-mail</label>

                          		<div class="col-md-6">
                          			{{ $datacar_id->email }}
                          		</div>

                          	</div>

                          	<div class="form-group">
                          		<label for="name" class="col-md-4 control-label">Type Car</label>

                          		<div class="col-md-6">
                          			{{ $datacar_id->car }}
                          		</div>

                          	</div>

                          	<div class="form-group">
                          		<label for="name" class="col-md-4 control-label">Date Create</label>

                          		<div class="col-md-6">
                          			{{ $datacar_id->created_at->format('d/m/Y') }}
                          		</div>

                          	</div>

                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

      </div>
    </body>
</html>
