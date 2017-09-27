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

        <h1>List Record Car</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Bil.</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Type Car</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($data_cars as $key => $data)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->name }} </td>
                        <td>{{ $data->email }} </td>
                        <td>{{ $data->car }} </td>
                        <td>
                            <a href="{{ route('car.show',['id'=>$data->id]) }}" class="btn btn-default">View</a>
                            <a href="{{ route('car.edit',['id'=>$data->id]) }}" class="btn btn-primary">Update</a>

                            {{ Form::open(array('route'=>array('car.destroy',$data->id),'method'=>'delete','onsubmit'=>'return confirm("delete")'))}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            {{  Form::close() }}

                        </td>
                    <tr>
                @endforeach
            </tbody>
        </table>
          

      </div>
    </body>
</html>
