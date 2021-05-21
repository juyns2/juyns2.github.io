<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<div style="margin-left: 40%">
	<?php
		function Tinh($a , $b , $op){
			$kq=0;
			switch($op)
			{
				case "+":
					$kq = $a + $b;
					break;
				case "-":
					$kq = $a - $b;
					break;
				case "x":
					$kq = $a * $b;
					break;
				case "/":
					if($b != 0)
						$kq = $a / $b;
					else
						$kq = "Lỗi chia cho 0";
					break;
			}
			return $kq;
		}
		if(isset($_POST['txta'],$_POST['txtb'],$_POST['pheptoan']))
		{
			$a = $_POST['txta'];
			$b = $_POST['txtb'];
			$op = $_POST['pheptoan'];
			$kq = Tinh($a,$b,$op);
		}
	
	?>
	<form method="post" action="">
		<table border="1" style="color: blue">
			<tr>
				<th colspan="2"><h2>Các phép toán</h2></th>
			</tr>
			<tr>
				<th><label>Số thứ nhất:</label></th>
				<td><input type="text" name="txta" value="<?php if(isset($a)) echo $a; ?>" /></td>
			</tr>
			<tr>
				<th><label>Số thứ hai:</label></th>
				<td><input type="text" name="txtb" value="<?php if(isset($b)) echo $b; ?>" /></td>
			</tr>
			<tr>
				<th><label>Chọn phép toán</label></th>
				<td><input type="radio" name="pheptoan" id="rdcong"  
					<?php if(isset($op))if($op=="+") echo 'checked';?> value="+"  />Cộng<br>
					<input type="radio" name="pheptoan" id="rdtru"  
					<?php if(isset($op))if($op=="-") echo 'checked';?> value="-"  />Trừ<br>
					<input type="radio" name="pheptoan" id="rdnhan"  
					<?php if(isset($op))if($op=="x") echo 'checked';?> value="x"  />Nhân<br>
					<input type="radio" name="pheptoan" id="rdchia"  
					<?php if(isset($op))if($op=="/") echo 'checked';?> value="/"  />Chia
				</td>
			</tr>
			<tr>
				
					<td colspan="2" style="text-align: center">
						<input type="submit" name="bttinh" value="Tính" />
						<input type="reset" value="Xóa"  />
					</td>
			</tr>
			<tr>
				<th><label>Kết quả là:</label></th>
				<td><input type="text" name="txtkq" value="<?php if(isset($kq)) echo $kq; ?>" /></td>
			</tr>
		</table>
</form>
</div>
</body>
</html>