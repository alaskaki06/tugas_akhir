<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="{{url('img/icon.png')}}" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/styles/styles1.css')}}" />
    <title>Ketapang</title>
</head>

<body style="background-color: #f5f5f5;">
    <div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
        <div class="login-pic js-tilt" data-tilt>
          <center>
            <img style="margin-top:10px" src="{{url('assets/images/lotim.png')}}" width="300px" alt="">
          </center>
				</div>
        <form role="form" action ="/login" method="post">
          @csrf
				<span class="login-form-title">
					<img src="{{url('assets/images/logo/logo_box.png')}}" width="220px" alt="Logo">
				</span>

        @if ($errors->any())
            <div class="input-container">
              <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </div>
            </div>
            @endif
            @if (Session::has('message'))
              <div class="input-container">
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
              </div>
            @endif
            @if (Session::has('message_gagal'))
              <div class="input-container">
                <div class="alert alert-danger">
                    {{ Session::get('message_gagal') }}
                </div>
              </div>
       @endif

					<div class="input-container">
						<input name="email" id="email" class="input font-segoe" type="email"  placeholder="Email"/>
					</div>
					<div class="input-container">
						<input name="password" id="password" class="input font-segoe" type="password" placeholder="Password"/>
					</div>

					<div class="container-login-form-btn">
						<input class="login-form-btn" type="submit" name="submit" id="submit" value="Login" class="btn">
					</div>
          <center>
            <font size="3px">Belum Punya Akun ?</font>
            <a class="txt2"  href="/register">
            </a>
          </center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
