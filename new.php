<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <form>

            <div class="form-group mt-5">
                <label>Maximal Input 30 Karakter</label>
                <textarea class="form-control" rows="5" onkeyup="count_down(this);"></textarea>
                <span class="text-muted pull-right" id="count2">150</span>
            </div>
        </form>
    </div>



</body>

</html>
<script>
    function count_up(obj) {
        document.getElementById('count1').innerHTML = obj.value.length;
    }

    function count_down(obj) {
        var element = document.getElementById('count2');

        element.innerHTML = 150 - obj.value.length;

        if (150 - obj.value.length < 0) {
            element.style.color = 'red';

        } else {
            element.style.color = 'grey';
        }
    }
</script>