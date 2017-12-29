<?php
/* @var $this yii\web\View */
$this->title = 'WYP Sample Application';
?>
<div class="site-index">

   
    <form name="iletisimformu" method="post" action="_form.php">
		<table width="450px">
		<tr>
			<td valign="top">
				<label for="isim">İsim-Soyisim :</label>
			</td>
			<td valign="top">
				<input  type="text" name="isim" maxlength="50" size="30">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="mail">Mail :</label>
			</td>
			<td valign="top">
				<input  type="text" name="mail" maxlength="80" size="30">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="konu">Konu :</label>
			</td>
			<td valign="top">
				<input  type="text" name="konu" maxlength="80" size="30">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="mesaj">Mesaj:</label>
			</td>
			<td valign="top">
				<textarea  name="mesaj" maxlength="10000" cols="35" rows="6">Mesajı Giriniz:</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center">
				<input type="submit" value="Gönder">
			</td>
		</tr>
		</table>
	</form>

    

</div>
