<?php
$phone = $_POST['phone'];
echo $phone;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XpeedStudio Assignment</title>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="node_modules/intl-tel-input/build/css/intlTelInput.css">
    <link rel="stylesheet" href="assets/css/milligram.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- You should properly set the path from the main file. -->
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>XpeedStudio Assignment</h1>
            <p>Simple PHP form submission script with frontend validation </p>
            <form method="post" action="">
                <fieldset>
                    <div class="container">
                        <div class="row">
                            <div class="column">
                                <label for="nameField">Buyer Name</label>
                                <input type="text" name="buyer" placeholder="Buyer Email" id="nameField" required>
                            </div>
                            <div class="column">
                                <label for="emailField">Buyer Email</label>
                                <input type="email" name="buyer_email" placeholder="Buyer Email" id="emailField" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="phoneField">Buyer Phone</label>
                                <input type="tel" name="phone" placeholder="Phone" id="phoneField" required>
                            </div>
                            <div class="column">
                                <label for="cityField">City</label>
                                <input type="text" name="city" placeholder="City" id="cityField" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="itemsField">Items</label>
                                <input type="text" name="items" placeholder="Items" id="itemsField" required>
                            </div>
                            <div class="column">
                                <label for="receiptField">Receipt ID</label>
                                <input type="text" name="receipt_id" placeholder="Receipt ID" id="receiptField" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="amountField">Amount</label>
                                <input type="number" name="amount" placeholder="Amount" id="amountField" required>
                            </div>
                            <div class="column">
                                <label for="entrybyField">Entry By</label>
                                <input type="number" placeholder="Entry You ID" id="entrybyField" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="noteField">Note</label>
                                <textarea name="note" placeholder="Note" id="noteField" required></textarea>
                            </div>
                        </div>
                        <input class="button-primary" type="submit" value="Submit">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/intl-tel-input/build/js/intlTelInput.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
