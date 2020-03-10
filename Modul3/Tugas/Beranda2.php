<style>

/* Add padding to container elements */
.container {
  padding: 16px;
}

</style>

<body>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<table>
<table>
				<!-- NIS -->
				<tr>
				<td>NIS :</td>
				<td>
				   <input type = "text" name = "nis" placeholder="092 332 232" required="required "><br>
				</td>
				<!-- Nama Depan -->
				<tr>
				<td>Nama Depan :</td>
				<td>
				   <input type = "text" name = "namdep" placeholder="Ucok" required="required "><br>
				</td>
				<!-- Nama Belakang -->
				<tr>
				<td>Nama Belakang :</td>
				<td>
				   <input type = "text" name = "nambel" placeholder="Firdaus" required="required>"<br>
				</td>
				<!-- Tempat Lahir -->
				<tr>
				<td>Tempat Lahir :</td>
				<td>
				   <input type = "text" name = "Temlah"  required="required"><br>
				</td>
				
				<!-- Tanggal Lahir -->
				<tr>
				<td>Tanggal Lahir :</td>
				<td>
				   <input type = "date" name = "tgl"><br>
				</td>
				
					<!-- Jenis Kelamin -->
				<tr>
				<td>Jenis Kelamin :</td>
				<td>
				  <input type = "radio" name = "radio" value="L"> Laki
				  </td>
				  <td>
				  <input type = "radio" name = "radio" value = "P"> Perempuan
				</td>
				
						<!-- Email -->
				<tr>
				<td>Email :</td>
				<td>
				  <input type = "email" name = "email" placeholder="AkuGanteng@gmail.com" required="required"> 
				</td>
				
							<!-- Telepon -->
				<tr>
				<td>Telepone :</td>
				<td>
				  <input type = "text" name = "telp" placeholder="+62" required="required"> 
				</td>
				
							<!-- Instagram -->
				<tr>
				<td>Instagram :</td>
				<td>
				  <input type = "text" name = "ig" placeholder="Username" required="required"> 
				</td>
				
							<!-- Facebook -->
				<tr>
				<td>Facebook :</td>
				<td>
				  <input type = "text" name = "facebook" placeholder="Username" required="required"> 
				</td>
				
							<!-- Website -->
				<tr>
				<td>WebSite :</td>
				<td>
				  <input type = "url" name = "web" placeholder="http://" required="required"> 
				</td>
				
							<!-- Alamat -->
				<tr>
				<td>Alamat :</td>
				<td>
					<textarea name="name" rows="3" cols="22"></textarea>
				</td>
				
							<!-- jurusan -->
				<tr>
				<td>Jurusan :</td>
				<td>

				<select id="Jurusan">
				<option value="RPL">Rekayasa Perangkat Lunak</option>
				<option value="TKJ">Teknik Komputer Jaringan</option>
	
				</select>
				</td>
				
				<tr>
				<td>Kelas :</td>
				<td>

				<select id="Kelas">
				<option value="RPL">XRPL 1</option>
				<option value="RPL">XRPL 2</option>
				<option value="RPL">XRPL 3</option>
				<option value="RPL">XRPL 4</option>
				<option value="RPL">XRPL 5</option>
				<option value="RPL">XRPL 6</option>
				<option value="RPL">XRPL 7</option>
				
				<option value="TKJ">XTKJ 1</option>
				<option value="TKJ">XTKJ 2</option>
				<option value="TKJ">XTKJ 3</option>
				<option value="TKJ">XTKJ 4</option>
				<option value="TKJ">XTKJ 5</option>
				<option value="TKJ">XTKJ 6</option>
				
				</select>
				</td>
				
				<tr>
				<td>Username :</td>
				<td>
				  <input type = "text" name = "user" placeholder="Masukan Username" required="required"> 
				</td>
				
							<tr>
				<td>Password :</td>
				<td>
				  <input type = "text" name = "pass" placeholder="Masukan Password" required="required"> 
				</td>
				
				
						<tr>
				<td>Pesan :</td>
				<td>
					<textarea name="pesan" rows="3" cols="22"></textarea>
				</td>
				
				<tr>
				<td>
				<input type="submit" name="submit" value="Simpan">
				<input type="submit" name="submit" value="Batal">
				</td>
				
				
				
				
				
				
				
			
				
				

				</table>

</div>
</div>



  </div>
</form>
<table>
</body>
</html>