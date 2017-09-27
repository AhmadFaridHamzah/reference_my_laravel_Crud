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

        <h1>Create Record</h1>

        <form class="form-horizontal" method="POST" action="{{ route('car.store') }}">

        	{{ csrf_field() }}

        	<div class="form-group{{ $errors->has('name') ? 'has error':'' }}">
        		<label for="name" class="col-md-4 control-label">Name</label>

        		<div class="col-md-6">
        			<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        		
        			@if($errors->has('name'))
        				<span class="help-block">
        					<strong>{{ $errors->first('name') }}</strong>
        				</span>
        			@endif
        		</div>
        	</div>

        	<div class="form-group{{ $errors->has('email') ? 'has error':'' }}">
        		<label for="email" class="col-md-4 control-label">E-mail</label>

        		<div class="col-md-6">
        			<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        		
        			@if($errors->has('email'))
        				<span class="help-block">
        					<strong>{{ $errors->first('email') }}</strong>
        				</span>
        			@endif
        		</div>
        	</div>

        	<div class="form-group{{ $errors->has('car') ? 'has error':'' }}">
        		<label for="car" class="col-md-4 control-label">Type Car</label>

        		<div class="col-md-6">
        			<input type="text" name="car" id="car" class="form-control" value="{{ old('car') }}">
        		
        			@if($errors->has('car'))
        				<span class="help-block">
        					<strong>{{ $errors->first('car') }}</strong>
        				</span>
        			@endif
        		</div>
        	</div>

        	<div class="form-group">
        		<div class="col-md-6 col-md-offset-4">
        			<button type="submit" class="btn btn-primary">Create</button>	
        		</div>
        	</div>

        </form>
          

      </div>
    </body>
</html>
