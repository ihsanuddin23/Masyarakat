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
  <div class="container pt-9 bg-white">
    <div class="row">
        <div class="col-md-8 col-xl-6">
            <h1>Pengaduan</h1>
            <hr>
                <form action="{{ url('management-users') }}" method="POST">
                        @csrf
      
                    <div class="form-group">
                        <label for="name">Nama Petugas</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm"">Confirm Password</label>
                        <input type="password-confirm"" class="form-control @error('password-confirm"') is-invalid @enderror" id="password" name="password-confirm"" value="{{ old('password-confirm"') }}">
                        @error('password-confirm"')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>