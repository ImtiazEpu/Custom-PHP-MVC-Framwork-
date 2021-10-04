<?php partials_view( '_header' ); ?>
    <div class="container">
        <div class="row">
            <div class="column">
                <h1>XpeedStudio Assignment</h1>
                <p>Simple PHP form submission script with frontend validation </p>
				<?php require_once "partials/_notifications.php";?>
                <form id="buyer_from">
                    <fieldset>
                        <div class="container">
                            <div class="row">
                                <div class="column">
                                    <label for="nameField">Buyer Name</label>
                                    <input type="text" name="buyer" placeholder="Buyer Name" id="nameField">
                                </div>
                                <div class="column">
                                    <label for="emailField">Buyer Email</label>
                                    <input type="email" name="buyer_email" placeholder="Buyer Email" id="emailField">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="phoneField">Buyer Phone</label>
                                    <input type="tel" name="phone" placeholder="Phone" id="phoneField">
                                </div>
                                <div class="column">
                                    <label for="cityField">City</label>
                                    <input type="text" name="city" placeholder="City" id="cityField">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="itemsField">Items</label>
                                    <input type="text" class="form-control" name="items" placeholder="Items" id="itemsField">
                                </div>
                                <div class="column">
                                    <label for="receiptField">Receipt ID</label>
                                    <input type="text" name="receipt_id" placeholder="Receipt ID" id="receiptField">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="amountField">Amount</label>
                                    <input type="number" name="amount" placeholder="Amount" id="amountField">
                                </div>
                                <div class="column">
                                    <label for="entrybyField">Entry By</label>
                                    <input type="number" name="entry_by" placeholder="Entry You ID" id="entrybyField">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="noteField">Note</label>
                                    <textarea name="note" placeholder="Note" id="noteField" ></textarea>
                                </div>
                            </div>
                            <input class="button-primary" type="submit" value="Submit">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php
partials_view( '_footer' );
