<!DOCTYPE html>
<html>

<head>
    <title>Laravel 12 Form Validation Example - ItSolutionStuff.com</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="container">

        <div class="card mt-5">
            <h3 class="card-header p-3"><i class="fa fa-star"></i> Laravel 12 Form Validation </h3>
            <div class="card-body">
                @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
                @endsession

                <!-- Way 1: Display All Error Messages -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('users.store') }}">

                    {{ csrf_field() }}

                    <div class="mb-3">
                        <label class="form-label" for="inputName">Name:</label>
                        <input
                            type="text"
                            name="name"
                            id="inputName"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Name">

                        <!-- Way 2: Display Error Message -->
                        <!-- @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> -->


                        <!-- <span class="text-danger">{{ $message }}</span> -->
                        <!-- @enderror -->
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="inputPassword">Password:</label>
                        <input
                            type="password"
                            name="password"
                            id="inputPassword"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password">

                        <!-- Way 3: Display Error Message
                        @if ($errors->has('password'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> {{ $errors->first('password') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif -->
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="inputEmail">Email:</label>
                        <input
                            type="text"
                            name="email"
                            id="inputEmail"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email">

                        <!-- @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @endif -->
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success btn-submit"><i class="fa fa-save"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>