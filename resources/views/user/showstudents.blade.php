<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>CLASS</th>
                    <th>SECTION</th>
                    <th>DOB</th>
                    <th>GENDER</th>
                </tr>
            </thead>
            <tbody>
            @foreach($list as $students)
                <tr>
                    <td>{{$students->Name}}</td>
                    <td>{{$students->Class}}</td>
                    <td>{{$students->Section}}</td>
                    <td>{{$students->DOB}}</td>
                    <td>{{$students->Gender}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
     </div>
  </body>
</html>
