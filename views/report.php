<?php
partials_view( '_header' );
?>
    <div class="reports">
        <div class="container">
            <div class="row">
                <div class="column">
                    <h1>XpeedStudio Assignment</h1>
                    <p>Simple PHP form submission script with frontend validation </p>
					<?php $buyers = isset( $_SESSION['buyer_list'] ) ? $_SESSION['buyer_list'] : array() ?>
	                <?php $dt          = new DateTime( "now", new DateTimeZone( 'Asia/Dhaka' ) );?>
                    <form action="./reports" method="POST">
                        <div class="row">
                            <div class="column">
                                <label for="from">From</label>
                                <input type="date" id="from" name="from" value="<?php echo $dt->format( 'Y-m-d' ) ?>">
                            </div>
                            <div class="column">
                                <label for="to">To</label>
                                <input type="date" id="to" name="to" value="<?php echo $dt->format( 'Y-m-d' ) ?>">
                            </div>
                            <div class="column button-warp">
                                <input type="submit" class="button" value="View">
                            </div>
                        </div>
                    </form>
					<?php if ( count( $buyers ) > 0 ): ?>
                        <table style="width=100%">
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
                                <th>City</th>
                                <th>Phone</th>
                                <th>Entry at</th>
                                <th>Entry by</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach ( $buyers as $buyer ): ?>
                                <tr>
                                    <td><?php echo $buyer->id ?></td>
                                    <td><?php echo $buyer->amount ?></td>
                                    <td><?php echo $buyer->buyer ?></td>
                                    <td><?php echo $buyer->receipt_id ?></td>
                                    <td><?php echo $buyer->items ?></td>
                                    <td><?php echo $buyer->buyer_email ?></td>
                                    <td><?php echo $buyer->buyer_ip ?></td>
                                    <td><?php echo $buyer->note ?></td>
                                    <td><?php echo $buyer->city ?></td>
                                    <td><?php echo $buyer->phone ?></td>
                                    <td><?php echo $buyer->entry_at ?></td>
                                    <td><?php echo $buyer->entry_by ?></td>
                                </tr>
							<?php endforeach; ?>
                            </tbody>
                        </table>
					<?php else: ?>
                        <div class="alert alert-info">
                            No Buyer Found. Please <a class="" href="/">Add One</a>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php
partials_view( '_footer' );
