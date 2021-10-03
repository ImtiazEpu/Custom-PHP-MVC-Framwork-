<?php
partials_view('_header');
?>
<div class="container">
    <div class="row">
        <div class="column">
            <h1>XpeedStudio Assignment</h1>
            <p>Simple PHP form submission script with frontend validation </p>
	        <?php require_once "partials/_notifications.php";?>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Buyer</th>
                    <th>Receipt ID</th>
                    <th>Items</th>
                    <th>Email</th>
                    <th>Buyer IP</th>
                    <th>Note</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Stephen Curry</td>
                    <td>27</td>
                    <td>1,91</td>
                    <td>Akron, OH</td>
                </tr>
                <tr>
                    <td>Klay Thompson</td>
                    <td>25</td>
                    <td>2,01</td>
                    <td>Los Angeles, CA</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
partials_view('_footer');
