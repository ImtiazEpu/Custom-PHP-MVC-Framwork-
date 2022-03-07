<?php partials_view( '_header' ); ?>
    <div class="container">
        <div class="row">
            <div class="column">
                <h1>Custom MVC Framework</h1>
                <p>Simple PHP form submission script with frontend validation</p>
				<?php require_once "partials/_notifications.php";?>
                <form id="buyer_from">
                    <fieldset>
                        <div class="container">
                            <div class="row">
                                <div class="column input-control">
                                    <label for="nameField">Buyer Name</label>
                                    <input type="text" name="buyer" placeholder="Buyer Name" id="nameField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="column input-control">
                                    <label for="emailField">Buyer Email</label>
                                    <input type="email" name="buyer_email" placeholder="Buyer Email" id="emailField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column input-control">
                                    <label for="phoneField">Buyer Phone</label>
                                    <input type="tel" name="phone" placeholder="Phone" id="phoneField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="column input-control">
                                    <label for="cityField">City</label>
                                    <input type="text" name="city" placeholder="City" id="cityField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column input-control">
                                    <label for="itemsField">Items</label>
                                    <input type="text" class="form-control" name="items" placeholder="Write & Hit Enter" id="itemsField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="column input-control">
                                    <label for="receiptField">Receipt ID</label>
                                    <input type="text" name="receipt_id" placeholder="Receipt ID" id="receiptField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column input-control">
                                    <label for="amountField">Amount</label>
                                    <input type="number" name="amount" placeholder="Amount" id="amountField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="column input-control">
                                    <label for="entrybyField">Entry By</label>
                                    <input type="number" name="entry_by" placeholder="Entry You ID" id="entrybyField">
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column input-control">
                                    <label for="noteField">Note</label>
                                    <textarea name="note" placeholder="Note" id="noteField" ></textarea>
                                    <i class="fa fa-check-circle"></i>
                                    <i class="fa fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                            </div>
                            <input class="button-primary" type="submit" value="Submit">
                            <a class="button" href="/reports">Check reports page</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php
partials_view( '_footer' );
