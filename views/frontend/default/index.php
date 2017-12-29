<?php
/* @var $this yii\web\View */
$this->title = 'WYP Sample Application';
?>
<div class="site-index">

 
   
    <form action="" method="post">
		
		<h1 color="grey">Mesaj Gönderme Modülü</h1><br>

		
		<table width="550px">
		<tr>
			<td valign="top" height="55">
				<label for="isim">İsim-Soyisim :</label>
			</td>
			<td valign="top" height="55">
				<input  type="text" name="isim" maxlength="50" size="50">
			</td>
		</tr>
		<tr>
			<td valign="top" height="55">
				<label for="mail">Mail :</label>
			</td>
			<td valign="top">
				<input  type="text" name="mail" maxlength="80" size="50">
			</td>
		</tr>
		<tr>
			<td valign="top" height="55">
				<label for="konu">Konu :</label>
			</td>
			<td valign="top" height="55">
				<input  type="text" name="konu" maxlength="80" size="50">
			</td>
		</tr>
		<tr>
			<td valign="top" height="55">
				<label for="id">İD :</label>
			</td>
			<td valign="top" height="55">
				<input  type="integer" name="id" maxlength="5" size="50">
			</td>
		</tr>
		<tr>
			<td valign="top" height="55">
				<label for="mesaj">Mesaj:</label>
			</td>
			<td valign="top" height="55">
				<textarea  name="mesaj" maxlength="10000" cols="65" rows="6" placeholder="Mesajı Giriniz:"></textarea>
			</td>
		</tr>
		<tr>
		
		

	
			<td colspan="2" style="text-align:center" height="60" align="left">
				<input type="submit" name="submit" value="Gönder" height="60" align="left">
			</td>
		</tr>
		</table>
	</form>
	
	<?php
		
			$config = [
				'components' => [
				'request' => [
				'enableCsrfValidation' => false,
			],
			],
		];
		
		
			if (isset($_POST['submit'])) {	
				if (isset($_POST['mail'])) {
					$maill=$_POST['mail'];
				}
				if (isset($_POST['konu'])) {
					$konuu=$_POST['konu'];
				}
				if (isset($_POST['isim'])) {
					$isim_soyisimm=$_POST['isim'];
				}
				if (isset($_POST['mesaj'])) {
					$mesajj=$_POST['mesaj'];
				}
				if (isset($_POST['id'])) {
					$idd=$_POST['id'];
				}
				
				//Yii::$app->db->createCommand()->insert('iletisims', ['mail'=>'$maill','konu'=>'$konuu','isim_soyisim'=>'$isimm','id'=>'$idd','mesaj'=>'$mesajj'])->execute();
			}
			Yii::$app->db->createCommand()->insert('iletisims', ['mail'=>'$maill','konu'=>'$konuu','isim_soyisim'=>'$isimm','id'=>'$idd','mesaj'=>'$mesajj'])->execute();
		?>

    

</div>
