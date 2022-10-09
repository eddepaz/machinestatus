<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <tbody>
            @foreach($recordStatusDB as $recordStatus)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $recordStatus->linde1 }}</td>
                <td>{{ $recordStatus->linde2 }}</td>
                <td>{{ $recordStatus->username }}</td>
            </tr>

            
        @endforeach

          <tr>
            <th>Row</th>
            <td>1</td>
            <td>2</td>
            <td>3</td>
          </tr>
          <tr>
            <th>First Name</th>
            <td>John</td>
            <td>Peter</td>
            <td>John</td>
          </tr>
          <tr>
            <th>Last Name</th>
            <td>Carter</td>
            <td>Parker</td>
            <td>Rambo</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>johncarter@mail.com</td>
            <td>peterparker@mail.com</td>
            <td>johnrambo@mail.com</td>
          </tr>
        </tbody>
      </table>
</body>
</html>