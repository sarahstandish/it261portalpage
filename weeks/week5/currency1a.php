<?php
    function get_rate($currency_symbol) {
        $currency_url = "https://api.exchangeratesapi.io/latest?base=$currency_symbol";

        $currency_json = file_get_contents($currency_url);
        $currency_array = json_decode($currency_json, true);
        $rate = $currency_array['rates']['USD'];
        return $rate;
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Currency 1</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet">
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    form {
        max-width: 600px;
        margin: 20px auto;
    }
    fieldset {
        padding: 10px;
    }
    label {
        display: block;
    }

    input[type=text], input[type=email] {
        width: 100%;
        margin-bottom: 10px;
    }

    form ul {
        margin-left: 20px;
        list-style-type: none;
        margin-bottom: 10px;
    }
    .box {
        width: 400px;
        margin: 20px auto;
        padding: 10px;
    }
</style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
                <input type="text" name="name">
            <label>Email</label>
                <input type="email" name="email">
            <label>How much money do you have in foreign currency?</label>
                <input type="text" name="amount">
            <label>Which currency do you have?</label>
                <ul>
                    <li><input type="radio" name="currency" value="Rubles">Rubles</li>
                    <li><input type="radio" name="currency" value="Canadian Dollars">Canadian Dollars</li>
                    <li><input type="radio" name="currency" value="Pounds Sterling">Pounds Sterling</li>
                    <li><input type="radio" name="currency" value="Euros">Euros</li>
                    <li><input type="radio" name="currency" value="Yen">Yen</li>
                </ul>
            <input type="submit" value="Convert">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <div class="box">
<?php
    $symbols = [
        'Rubles' => 'RUB',
        'Canadian Dollars' => 'CAD',
        'Pounds Sterling' => 'GBP',
        'Euros' => 'EUR',
        'Yen' => 'JPY'
    ];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name']) 
            || empty($_POST['email']) 
            || empty($_POST['amount']) 
            || !is_numeric($_POST['amount']) 
            || empty($_POST['currency'])) {
            echo "<p>Please fill in your information.</p>";
        } else if (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency']) && is_numeric($_POST['amount'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount =  $_POST['amount'];
            $currency_type = $_POST['currency'];
            $currency_rate = get_rate($symbols[$currency_type]);
            $total = number_format($amount * $currency_rate, 2);
            echo "<p>Hello, $name. The most recent exchange rate available to convert $currency_type to USD is $currency_rate. You have $$total USD.</p>";
        }
    }
?>
    </div>
</body>
</html>
