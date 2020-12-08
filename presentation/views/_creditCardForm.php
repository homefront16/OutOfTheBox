

<p>
Validate the following number:<br>
Tom Hanks<br>
Visa<br>
4144 2414 4422 2244<br>
344<br>
June 2021<br>
</p>
<div class="creditCardForm">
<div class="heading">
<h1>Enter Card Information</h1>
</div>
<div class="payment">
<form action="processCheckout2.php"></form>
<div class="form-group owner">Owner</div>
<input type="text" class="form-control" id="owner" name="owner">
</div>
<div class="form-group CVV">
<label for="cvv">CVV</label>
<input type="text" class="form-control" id="cvv" name="cvv">
</div>
<div class="form-group" id="card-number-failed">
<label for="cardNumber">Card Number</label>
<input type="text" class="form-control" id="cardNumber" name="cardNumber">
</div>
<div class="form-group" id="expiration-date">
<label>Expiration Date</label>
<select name="month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="year">
<option value="16">2016</option>
<option value="16">2017</option>
<option value="16">2018</option>
<option value="16">2019</option>
<option value="16">2020</option>
<option value="16">2021</option>
</select>
</div>
<div class="form-group" id="credit_cards">
<!-- Place visa, mastercard, and amed images here -->
</div>
<div class="form-group" id="pay-now">
<button type="submit" class="btn btn-success" id="confirmPurchase">Confirm</button>
</div>
</div>




