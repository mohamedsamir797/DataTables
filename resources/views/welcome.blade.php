<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script
                src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet"
              href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <script
                src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
                  <table class="table" id="table">
                   <thead>
                   <tr>
                       <th class="text-center">#</th>
                       <th class="text-center">Name</th>
                       <th class="text-center">Email</th>
                       <th class="text-center">Address</th>
                       <th class="text-center">Action</th>
                   </tr>
                   </thead>
                      <tbody>
                  @foreach( $something as $data)
                  <tr>
                      <th >{{ $data->id }}</th>
                      <th >{{ $data->name }}</th>
                      <th >{{ $data->email }}</th>
                      <th >{{ $data->address }}</th>
                      <th >Action</th>
                  </tr>
                      @endforeach
                      </tbody>
                  </table>
        </div>
        <script>
            $(document).ready(function() {
                $('#table').DataTable();
            } );
        </script>
    </body>
</html>
