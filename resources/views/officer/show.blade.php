<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('bootstrap/asset/js/bootstrap.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('bootstrap/asset/css/bootstrap.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Data petugas</strong>
            </div>
            <div class="float-right">
                <a href="{{ url('officer') }}" class="btn btn-default btn-primary btn-sm">
                    <i class="fa fa-plus"></i>back 
                </a>
            </div>
        </div>

            
        

        
        <div class="card-body table-responsive">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <table class="table table-bordered table table-dark">
                        <tbody>
                            <tr>
                                <th {{-- style="width:30%" --}} class="">Id</th>
                                <td>{{ $officers->id }}</td>
                            </tr>
                            <tr>
                                <th {{-- style="width:30%" --}}>Nama</th>
                                <td>{{ $officers->nama_petugas }}</td>
                            </tr>
                            <tr>
                                <th {{-- style="width:30%" --}}>Email</th>
                                <td>{{ $officers->email }}</td>
                            </tr>
                            <tr>
                                <th {{-- style="width:30%" --}}>Password</th>
                                <td>{{ $officers->password }}<th>
                            </tr>
                            <tr>
                                <th {{-- style="width:30%" --}}>Telepon</th>
                                <td>{{ $officers->telp }}</td>
                            </tr>
                            <tr>
                                <th {{-- style="width:30%" --}}>Alamat</th>
                                <td>{{ $officers->alamat }}</td>
                            </tr>
                            <tr>
                                <th {{-- style="width:30%" --}}>Create</th>
                                <td>{{ $officers->created_at }}</td>
                            </tr>
                            <tr>
                                <th {{-- style="width:30%" --}}>Update</th>
                                <td>{{ $officers->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>
</html>