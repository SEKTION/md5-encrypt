<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 Encryption</title>
</head>
<style>
    body {
        background: #eee;
    }
    .center {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    h1 {
        margin: 2rem;
    }
    input {
        width: 20rem;
        margin: 1rem;
    }
    label {
        font-size: 1.2rem;
        font-weight: bolder;
    }
    button {
        padding: 0.15rem 0.5rem;
        font-weight: bolder;
    }
</style>
<body>
    <div>
        <h1 class="center">MD5 Encryption</h1>
        <form action="" class="center" method="post">
            <label for="input-value">Enter Text</label>
            <input type="text" name="input-value">
            <button name="submit">Encrypt</button>
        </form>
        <div class="center">
            <h2>Result:&nbsp;</h2>
            <?php
                if (isset($_POST['submit'])) {
                    $value = $_POST['input-value'];
                    if (!empty(trim($value))) {
                        $hash = md5($value);
                        echo "<h2 id='rslt' title='Click to Copy'> $hash</h2>";
                    } else {
                        echo "<h2>Input field is empty!</h2>";
                    }
                }
            ?>
        </div>
    </div>
</body>
<script>
    var output = document.getElementById('rslt');
    output.addEventListener('click', function() {
        navigator.clipboard.writeText(output.innerText);
    })
</script>
</html>