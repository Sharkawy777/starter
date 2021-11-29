<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{URL::asset('css/web.css')}}" />
    <title>LogIn</title>
</head>
<body>
<div class="contact">
    <div class="container">
        <div class="text-center">
            <h1>ACCOUNT LOGIN</h1>
            <div class="text-center">
                <form class="row needs-validation form m-auto" novalidate action="">
                    <div class="col-md-12">
                        <input
                            type="email"
                            class="form-control"
                            id="validationCustom01"
                            value=""
                            placeholder="User Name"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                            required
                        />
                        <div class="invalid-feedback">
                            <h1>يرجى البريد الإلكتروني الصحيح</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input
                            type="password"
                            class="form-control"
                            id="validationCustom02"
                            value=""
                            placeholder="Password"
                            required
                        />
                        <div class="invalid-feedback">
                            <h1>يرجى التاكد من كلمه السر</h1>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="send" type="submit">LOGIN</button>
                    </div>
                    <div class="col-md-12 forget">
                        <a href="#" class="">نسيت كلمة السر؟</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
<script src="{{URL::asset('js/web.js')}}"></script>
</body>
</html>
