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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{URL::asset('css/web.css')}}" />
    <title>register</title>
</head>
<body>
<div class="password">
    <div class="contanier">
        <div class="text-center">
            <form class="row needs-validation form m-auto" action="">
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
                        type="number"
                        class="form-control"
                        id="validationCustom03"
                        value=""
                        placeholder="Phone Number"
                        required
                    />
                    <div class="invalid-feedback">
                        <h1>يرجى رقم الهاتف الصحيح</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <input
                        class="form-control"
                        type="password"
                        placeholder="password"
                        id="password"
                        required
                    />
                </div>
                <div class="col-md-12">
                    <input
                        class="form-control"
                        type="password"
                        placeholder="confirm password"
                        id="confirm_password"
                        required
                    />
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="send">register</button>
                </div>
            </form>
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
