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
    <title>Currency 3</title>
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <fieldset>
            <label>Name</label>
                <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name'])?>">
            <label>Email</label>
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email'])?>">
            <label>How much money do you have in foreign currency?</label>
                <input type="text" name="amount" value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['amount'])?>">
            <label>Which currency do you have?</label>
                <ul>
                    <li><input type="radio" name="currency" value="Rubles" <?php if (isset($_POST['currency']) && $_POST['currency'] == "Rubles") echo "checked = 'checked'"  ?>>Rubles</li>
                    <li><input type="radio" name="currency" value="Canadian Dollars" <?php if (isset($_POST['currency']) && $_POST['currency'] == "Canadian Dollars") echo "checked = 'checked'"?>>Canadian Dollars</li>
                    <li><input type="radio" name="currency" value="Pounds Sterling" <?php if (isset($_POST['currency']) && $_POST['currency'] == "Pounds Sterling") echo "checked = 'checked'"?>>Pounds Sterling</li>
                    <li><input type="radio" name="currency" value="Euros" <?php if (isset($_POST['currency']) && $_POST['currency'] == "Euros") echo "checked = 'checked'"?>>Euros</li>
                    <li><input type="radio" name="currency" value="Yen" <?php if (isset($_POST['currency']) && $_POST['currency'] == "Yen") echo "checked = 'checked'"  ?>>Yen</li>
                </ul>
            <label>Banking Institution</label>
                <select name="bank">
                    <option value="NULL" >Select one:</option>
                    <option value="Bank of America" <?php if (isset($_POST['bank']) && $_POST['bank'] == "Bank of America") echo "selected"  ?>>Bank of America</option>
                    <option value="Chase Bank" <?php if (isset($_POST['bank']) && $_POST['bank'] == "Chase Bank") echo "selected"  ?>>Chase</option>
                    <option value="BECU" <?php if (isset($_POST['bank']) && $_POST['bank'] == "BECU") echo "selected"  ?>>BECU</option>
                    <option value="your mattress" <?php if (isset($_POST['bank']) && $_POST['bank'] == "your mattress") echo "selected"  ?>>Mattress</option>
                </select>
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
        if (empty($_POST['name'])) {
            echo "<p>Please fill in your name.</p>";
        } 

        if (empty($_POST['email'])) {
            echo "<p>Please fill in your email.</p>";
        }

        if (empty($_POST['amount']) || !is_numeric($_POST['amount'])) {
            echo "<p>Please enter an amount. The amount must be a number.</p>";
        } 

        if (empty($_POST['currency'])) {
            echo "<p>Please select a currency.</p>";
        }

        if ($_POST['bank'] == 'NULL') {
            echo "<p>Please select a bank.</p>";
        }

        if (isset($_POST['name'],
            $_POST['email'], 
            $_POST['amount'], 
            $_POST['currency']) 
            && is_numeric($_POST['amount']) 
            && $_POST['bank'] != 'NULL') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount =  $_POST['amount'];
                $currency_type = $_POST['currency'];
                $currency_rate = get_rate($symbols[$currency_type]);
                $bank = $_POST['bank'];
                $total = number_format($amount * $currency_rate, 2);
                $feeling = ($amount * $currency_rate >= 2000 ? 'happy' : 'sad');
                echo "<p>I'm $feeling because I have $$total USD.</p>";
            }
    }
?>
    </div>
</body>
</html>
