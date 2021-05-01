<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculator Using PHP AJAX</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <h1>AJAX Calculator App<span>A simple form to calculate two numbers.</span> </h1>
                    <div class="input-control">
                        <label for="num1">
                            Number 1: <input type="text" id="num1" placeholder="First number" autofocus>
                        </label>
                    </div><!-- /.input-control -->

                    <div class="input-control">
                        <label for="num1">
                            Number 2: <input type="text" id="num2" placeholder="Second number">
                        </label>
                    </div><!-- /.input-control -->
                    <div class="input-control controls">
                        <label>
                                <input type="radio" name="method" id="method" value="Add" checked>
                                Add
                        </label>
                        <label>
                                <input type="radio" name="method" id="method" value="Sub">
                                Subtract
                        </label>
                        <label>
                                <input type="radio" name="method" id="method" value="Mul">
                                Multiply
                        </label>
                        <label>
                                <input type="radio" name="method" id="method" value="Div">
                                Divide
                        </label>
                    </div><!-- /.input-control -->
                        <!-- /.input-control -->
                    <div class="input-control button mx-auto">
                        <button type="submit" id="submit">Calculate</button>
                        <button type="submit" id="reset">Reset</button>
                    </div><!-- /.input-control -->
            </div><!-- /.container -->
            <div class="container result">
                Answer
                <div class="answer" id="result">
                    0
                </div>
            </div><!-- /.container -->
        </div>
    </div>


    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#submit").on("click",function(e){
            e.preventDefault();
            var num_1 = $("#num1").val();
            var num_2 = $("#num2").val();
            var operation = $("#method:checked").val();

            $.ajax({
                url : "calculate.php",
                type : "POST",
                data : {num1: num_1, num2: num_2, operator: operation},
                success : function(data){
                    $("#result").html(data);
                }
            });
        });
        $("#reset").on("click",function(e){
            window.location.href = "http://localhost/php_calculator_ajax/index.php";
        });
    });
    </script>
</body>

</html>