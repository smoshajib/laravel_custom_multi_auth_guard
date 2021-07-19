<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin User Dashboard | Home</title>
        <link rel="stylesheet" href="{{ asset('public/bootstrap.min.css') }}">
    </head>
    <body style="background-color: #d7dadb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                    <h4>Admin Dashboard</h4><hr>
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

              

              
            </div>
           
        </div>
        
           <div class="d-flex justify-content-center">
                {!! $users->links('pagination::bootstrap-4') !!}
            </div> 
           
    </body>
</html>