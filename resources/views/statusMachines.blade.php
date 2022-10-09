<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel 8 Pagination Demo - codeanddeploy.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" >Linde 1</th>
                    <th scope="col">Linde 2</th>
                    <th scope="col" >Username</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($recordStatusDB as $recordStatus)
                        <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne"">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $recordStatus->linde1 }}</td>
                            <td>{{ $recordStatus->linde2 }}</td>
                            <td>{{ $recordStatus->username }}</td>
                        </tr>

                        
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex">
                {!! $recordStatusDB->links() !!}
            </div>
        </div>
    </body>
</html>