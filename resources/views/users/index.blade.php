<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <h1>Hello, world!</h1>

  <body>

    <div class="container">
      <table class="table table-striped">
        <thead>
            <tr>
                <th>user Name</th>
                <th>user Email</th>             
    
            </tr>
        </thead>
    
    
        <tbody id="tbodyresults">
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
    
            </tr>
        @endforeach
        </tbody>
    </table>
    <button class="btn btn-primary">Export</button>
    <form action="" method="" enctype="multipart/form-data" accept-charset="utf-8">
        <button id="fileButton" class="btn btn-info">Import</button>
        <input class="form-control" type="file" id="formFile" style="display: none;">
    </form>
    
    </div>
 
      

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    document.getElementById('fileButton').addEventListener('click', function() {
      document.getElementById('formFile').click();
    });
    </script>
  </body>
</html>