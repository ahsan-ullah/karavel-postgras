<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Redis</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <div class="container py-4 px-3 mx-auto">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="card text-center">
                        <div class="card-header">
                            <h1>Top Secret CIA Database</h1>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row g-3 align-items-center">
                                    
                                    <div class="col-auto">
                                    <label for="birth_year" class="col-form-label">Birth Year</label>
                                    </div>
                                    <div class="col-auto">
                                    <input type="text" id="birth_year" name="birth_year" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                    <div class="col-auto">
                                        <label for="birth_month" class="col-form-label">Birth Month</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="birth_month" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                    <div class="col-auto">
                                    <button class="btn btn-warning btn-sm">Search</button>
                                    </div>
                                </div>
                            
                            </form>
                            <hr>     
                            <table class="table table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email Address</th>
                                        <th>Name</th>
                                        <th>Birthday</th>                                        
                                        <th>Phone </th>
                                        <th>IP Address</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)                                    
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->birth_date }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->ip_address }}</td>
                                            <td>{{ $user->country }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $users->links() !!}
                        </div>
                      </div>
                </div>
            </div>
            
        </div>
    </body>
</html>