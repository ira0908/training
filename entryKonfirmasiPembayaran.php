<html>
 <head>
   <title>
     Konfirmasi Pembayaran
   </title>
   <link rel="stylesheet" type="text/css" href="../assets/css/ng_all.css">
   <script type="text/javascript"> 
			$(document).ready(function(){
				$("#tanggal").datepicker({showAnim:"drop", showOptions:{ direction: "up" }});
				disabledTransfer();
			});
			function enabledTransfer(){
				document.getElementById("dr").disabled=false;
			}
			
			function disabledTransfer(){
				document.getElementById("dr").disabled=true;
			}
		</script>
 </head>
 
 <body>
	<script type="text/javascript">
		var ng_config = {
			assests_dir: 'assets/'	// the path to the assets directory
		}
	</script>
	<script type="text/javascript" src="ng_all.js"></script>
	<script type="text/javascript" src="components/calendar.js"></script>
	<script type="text/javascript">
	var my_cal;
	var my_cal2;
	ng.ready(function(){
			my_cal = new ng.Calendar({
				input: 'date1',	
				start_date: 'year-50',	
				end_date: 'year+100',
				date_format:'Y-m-d',
				display_date: new Date()
				
			});			
		});
	</script>
	
   <form method="POST" name="" action="system/saveKonfirmasiPembayaran.php">
   <h2>
	   Konfirmasi Pembayaran
   </h2>

   <table>
   <tr>
      <td>
        No.Pendaftaran
      </td>
      <td>
         <input type="text" name="no_pendaftaran" class="">
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
        Tgl.Pembayaran
      </td>
      <td>
         <input type="text" name="tanggal_pembayaran" id="date1">
      </td>
   </tr>
   <tr>
      <td>
        Nominal
      </td>
      <td>
         <input type="text" name="nominal" class="">
         &nbsp;
      </td>
    </tr>
    <tr>  
    <td>
		Pembayaran
    </td>
      <td>
		  <input type="radio" name="pembayaran" value="cash" onClick="disabledTransfer();">Cash
		  <input type="radio" name="pembayaran" value="transfer" onClick="enabledTransfer();">Transfer
		  &nbsp;
	  </td>
   </tr>
   <tr>
      <td>
       Dari Rekening
      </td>
      <td>
         <input type="text" name="dari_rekening" class="" id='dr'>
         &nbsp;
      </td>
   </tr>
   <tr>
      <td valign=top>
        Keterangan
      </td>
      <td>
         <textarea name="keterangan" cols=30 rows=5 class=""></textarea>
      </td>
   </tr>
   </table>
        <input type="submit" name="save" value="save">
        </form>
 </body>
</html>



