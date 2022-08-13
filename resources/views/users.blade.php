<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Redis</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                    <input type="text" value="{{ request()->input('birth_year') }}" id="birth_year" name="birth_year" class="form-control birth_year" autocomplete="off" aria-describedby="">
                                    </div>
                                    <div class="col-auto">
                                        <label for="birth_month" class="col-form-label">Birth Month</label>
                                    </div>
                                    <div class="col-auto">
                                        <input value="{{ request()->input('birth_month') }}" type="text" name="birth_month" id="birth_month" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="col-auto">
                                    <button class="btn btn-warning btn-sm">Search</button>
                                    </div>
                                </div>
                            
                            </form>
                            <hr>
                            {{ $users->appends(request()->input())->links() }} 
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
                                            <td style="text-align: left">{{ $user->id }}</td>
                                            <td style="text-align: left">{{ $user->email }}</td>
                                            <td style="text-align: left">{{ $user->name }}</td>
                                            <td style="text-align: left">{{ $user->birth_date }}</td>
                                            <td style="text-align: left">{{ $user->phone }}</td>
                                            <td style="text-align: left">{{ $user->ip_address }}</td>
                                            <td style="text-align: left">{{ $user->country }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->appends(request()->input())->links() }} 
                        </div>
                      </div>
                </div>
            </div>
            
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // $('#birth_year').datepicker();
        $('.birth_year').datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years",
            autoclose:true //to close picker once year is selected
        });

        $('#birth_month').datepicker({
            format: "mm",
            viewMode: "months", 
            minViewMode: "months",
            viewYear:false,
            autoclose:true //to close picker once year is selected
        });

    </script>
</html>