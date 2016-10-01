<p><h2>Input a new product:</h2></p>

<form name="newproduct" method="POST" action="index.php?module=products">
    <br>
    <table>
        <tr>
           <td>Name: </td> 
           <td><input type="text" placeholder="Product name" name="prodname" id="prodname" value="<?php echo $_POST?$_POST['prodname']:""; ?>" /></td>
        </tr>
        <tr>
           <td>Reference: </td> 
           <td><input type="text" placeholder="Reference" name="prodref" id="prodref" value="<?php echo $_POST?$_POST['prodref']:""; ?>" /></td>
        </tr>
        <tr>
           <td>Price: </td>
           <td><input type="text" placeholder="Price" name="prodprice" id="prodprice" value="<?php echo $_POST?$_POST['prodprice']:""; ?>" /></td>
        </tr>
        <tr>
		   <td>Reception date: </td>
		   <td><input type="text" placeholder="Reception date" name="date_reception" id="date_reception" value="<?php echo $_POST?$_POST['date_reception']:""; ?>"/></td>
		</tr>
		<tr>
		   <td>Expiration date: </td>
		   <td><input type="text" placeholder="Expiration date" name="date_expiration" id="date_expiration" value="<?php echo $_POST?$_POST['date_expiration']:""; ?>"/></td>
		</tr>
		<tr>
           <td>Category: </td>
           <td>
              1 <input type="checkbox" name="category[]" value="cat1">
		      2 <input type="checkbox" name="category[]" value="cat2">
			  3 <input type="checkbox" name="category[]" value="cat3">
			  4 <input type="checkbox" name="category[]" value="cat4">
           </td>
        </tr>
        <tr>
            <td>Packaging:</td>
            <td>
                None <input name="packaging" type="radio" value="none" checked>
				Boxed <input name="packaging" type="radio" value="boxed">
				Bagged <input name="packaging" type="radio" value="bagged">
            </td>
        </tr>
        <tr>
            <td>Country: </td>
			  <td>
			    <select name="country" id="country">
				<option value="spain">Spain</option>
				<option value="portugal">Portugal</option>
				<option value="uk">UK</option>
				<option value="ireland">Ireland</option>
				</select>
			</td>
        </tr>
        <tr>
            <td>Province: </td>
			  <td>
			    <select name="province" id="province">
				<option value="barcelona">Barcelona</option>
				<option value="madrid">Madrid</option>
				<option value="sevilla">Sevilla</option>
				<option value="valencia">Valencia</option>
				</select>
			</td>
        </tr>
        <tr>
            <td>City: </td>
			  <td>
			    <select name="city" id="city">
				<option value="ontinyent">Ontinyent</option>
				<option value="barcelona">Barcelona</option>
				<option value="madrid">Madrid</option>
				<option value="sevilla">Sevilla</option>
				<option value="valencia">Valencia</option>
				</select>
			</td>
        </tr>
        <tr>
           <td>Description: </td>
           <td><textarea rows="4" cols="50" placeholder="Product description" name="proddesc" id="proddesc" value="<?php echo $_POST?$_POST['proddesc']:""; ?>"></textarea></td>
        </tr>
    </table>
    
    
    
    <input type="submit" name="SubmitProducts" value="Submit"/>
</form>
<br>
<br>
<br>
<br>
<br>