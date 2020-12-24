

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="age.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age</title>
</head>
<body>
    <form method="POST" id="userData">
    <h1>Current Age Calculator</h1>
        <label for="date">Date :</label><br>
        <input type="date" name="date" id="date" placeholder="Date : "><br><br>
        <label for="time">Time :</label><br>
        <input type="time" step='1' name="time" id="time" placeholder="Time : "><br><br><br>
        <button type="submit" name="calculate" id="submit">Calculate</button><br><br>
        <label for="display" id="disp">Your Current Age :</label>
        <div id="display"></div>
    </form>
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
                $("#disp").removeAttr("id");
                $.ajax(
                    {
                    url:'ageCalculator.php',
                    type:'POST',
                    data : $('#userData').serialize(),
                    success:function(data){
                        console.log(data);
                        $("#display").html(data);
                    }

                });
                setInterval(update,1000);
            });
        });

        function update(){
            console.log('refresh');
            $.ajax({
                url : 'ageCalculator.php',
                type : 'POST',
                data : $('#userData').serialize(),
                success : function(data){
                    console.log(data);
                    $('#display').html(data);
                }
            })
        }
    </script>
</body>
</html>

