<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/styles/styles.css')}}" />
    <title>Ketapang</title>
</head>

<body style="background-color: #f5f5f5;">
    <div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
				<div class="login-pic js-tilt" data-tilt>
          <center>
            <img src="{{url('assets/images/gedung_sate.png')}}" width="250px" alt="">
          </center>
				</div>
        <form role="form" action ="/doLogin" method="post">
          @csrf
				<span class="login-form-title">
					<img src="{{url('assets/images/logo/KetapangLogo-Color.png')}}" width="220px" alt="Logo">
				</span>

					<div class="input-container">
						<input name="email" id="email" class="input font-segoe" type="email" required placeholder="Email"/>
					</div>
					<div class="input-container">
						<input name="password" id="password" class="input font-segoe" type="password" required placeholder="Password"/>
					</div>

					<div class="container-login-form-btn">
						<input class="login-form-btn" type="submit" name="submit" id="submit" value="Login" class="btn">
					</div>
					<div class="text-center p-t-136">
            <font size="3px" color="#9e9e9e">atau</font>
					</div>
          <div class="text-center google-auth-btn">
            <img src="https://user-images.githubusercontent.com/1531669/41761219-0e0e4d80-7629-11e8-9663-aabe62025d57.png" width="200px" alt="">
          </div>
          <div class="text-center p-t-136">
            <a  href="/register">
              <font size="3px">Belum Punya Akun ?</font>
            </a>
          </div>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/scripts/masonry.pkgd.min.js')}}"></script>
<script src="{{url('assets/scripts/index.js')}}"></script>

</html>
