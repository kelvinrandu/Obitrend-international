
<form action="{{'/pesapal-iframe.php'}}" method="post">
	<table>
		<tr>
			<td>Currency</td>
			<td><input type="text" name="currency_code" value="{{$requests['currency_code']}}" />
			</td>
		</tr>
		<tr>
			<td>Amount:</td>
			<td><input type="text" name="amount"   value="{{$requests['amount']}}" />
			(in Kshs)
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="{{$requests['type']}}" readonly="readonly" />
			(leave as default - MERCHANT)
			</td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><input type="text" name="description" value="{{$requests['desc']}}" /></td>
		</tr>
		<tr>
			<td>Reference:</td>
			<td><input type="text" name="reference" value="{{$requests['ref']}}" />
			(the Order ID )
			</td>
		</tr>
		<tr>
			<td>Shopper's First Name:</td>
			<td><input type="text" name="first_name" value="{{$requests['first_name']}}" /></td>
		</tr>
		<tr>
			<td>Shopper's Last Name:</td>
			<td><input type="text" name="last_name" value="{{$requests['last_name']}}" /></td>
		</tr>
		<tr>
			<td>Shopper's Email Address:</td>
			<td><input type="text" name="email" value="{{$requests['email']}}" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Make Payment" /></td>
		</tr>
	</table>
</form>
