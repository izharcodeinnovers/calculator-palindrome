<!DOCTYPE html>
<html lang="en">

<head>
    <title>my - calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .btn {
            margin: 4px;
            width: 54px;
        }

        .top {
            margin-top: 50px;
        }

        .calc {
            border: 1px solid #E4ECFA;
            padding: 15px 10px;
        }
    </style>
</head>

<body>
    {{-- <div class="container">
        <div class="row top">
            <h4 class="text-center text-dark">My - Calculator</h4>
            <div class="col-lg-4 col-md-4 col-sm-4">&nbsp;</div>
            <div class="col-lg-3 col-md-4 col-sm-5 calc">
                <form action="calculation" method="POST">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <input type="number" name="firstnumber" placeholder="Enter first number" required="" id="inputBox" class="input form-control" />
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-lg-12 col-sm-12">
                            <select name="operator" class="form-select" aria-label="Default select example">
                                <<option>----Select Operator----</option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="%">%</option>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-lg-12 col-sm-12">
                            <input type="number" name="secondnumber" placeholder="Enter second number" required="" id="inputBox" class="input form-control" />
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-lg-12 col-sm-12">
                            <input type="submit" name="btn" class="btn btn-success" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
<div class="container text-center">
    <div class="row">
        <div class="col-md-9 m-auto">
            <br>
            <form action={{ route('save.calc') }} method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Calculator
                    </div>
                    <div class="card-body col-md-9 m-auto">
                        <div class="form-group">
                            <div class="col-md-9 m-auto">
                                <input type="text" name="firstnumber" placeholder="Enter first number" required="" id="inputBox" class="input form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 m-auto mt-2">
                                <select name="operator" class="form-select" aria-label="Default select example">
                                    <<option>Select Operator</option>
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 m-auto mt-2">
                                <input type="number" name="secondnumber" placeholder="Enter second number" required="" id="inputBox" class="input form-control" />
                            </div>
                        </div>
                            <div class="col-md-9 m-auto mt-2">
                                <input type="submit" name="btn" class="btn btn-success btn-md text-center font-weight-bold mt-auto" value="Enter">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br>
<div class="row">
    <div class="col-md-4 m-auto">
        @if(session('message'))
        <div class="alert alert-warning">
            <h1 class="text-center">{{ session('message') }}</h1>
        </div>
        @endif
    </div>
</div>
    {{-- <script>

            let display = document.getElementById('inputBox');
            let buttons = document.querySelectorAll('button');

            let buttonArray = Array.from(buttons);
            let string = '';

            buttonArray.forEach( btn => {
                    btn.addEventListener('click', (e) => {

                        if (e.target.innerHTML == 'DEL') {
                            string = string.substring(0, string.length-1);
                            display.value = string;
                        }else if(e.target.innerHTML == 'C'){
                            string = '';
                            display.value = string;
                        }else{
                            string += e.target.innerHTML;
                            display.value = string;
                        }
                    })
            })

                // console.log(btn);

    </script> --}}
</body>
