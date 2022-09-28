<!DOCTYPE html">
<html>

<head>
	<meta charset="utf-8">
	<!-- utf-8 works for most cases -->
	<meta name="viewport" content="width=device-width">
	<!-- Forcing initial-scale shouldn't be necessary -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Use the latest (edge) version of IE rendering engine -->
	<meta name="x-apple-disable-message-reformatting">
    <title>Contact Query</title>
    <style>
		html,
		body {
			margin: 0 auto !important;
			padding: 0 !important;
			height: 100% !important;
			width: 100% !important;
		}
		
		* {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}
		
		div[style*="margin: 16px 0"] {
			margin: 0 !important;
		}
		
		table,
		td {
			mso-table-lspace: 0pt !important;
			mso-table-rspace: 0pt !important;
		}
		
		table {
			border-spacing: 0 !important;
			border-collapse: collapse !important;
			table-layout: fixed !important;
			margin: 0 auto !important;
		}
		
		table table table {
			table-layout: auto;
		}
		
		img {
			-ms-interpolation-mode: bicubic;
		}
		.image_width{
            margin-top:5px; display:inline-block;box-shadow: 0px 1px 5px 1px #fd04b1;border-radius: 50%;width: 30px;height: 30px;
        }
		.mobile-link--footer a,
		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: underline !important;
		}
		
		.button-link {
			text-decoration: none !important;
		}
	
		.button-td,
		.button-a {
			transition: all 100ms ease-in;
		}
		
		.button-td:hover,
		.button-a:hover {
			background: #555555 !important;
			border-color: #555555 !important;
		}
		
		@media screen and (max-width: 480px) {
			.fluid {
				width: 100% !important;
				max-width: 100% !important;
				height: auto !important;
				margin-left: auto !important;
				margin-right: auto !important;
			}
			.stack-column,
			.stack-column-center {
				display: block !important;
				width: 100% !important;
				max-width: 100% !important;
				direction: ltr !important;
			}
			.stack-column-center {
				text-align: center !important;
			}
			.center-on-narrow {
				text-align: center !important;
				display: block !important;
				margin-left: auto !important;
				margin-right: auto !important;
				float: none !important;
			}
			table.center-on-narrow {
				display: inline-block !important;
			}
			.image_width{
            margin-top:5px; display:inline-block;box-shadow: 0px 1px 5px 1px #fd04b1;border-radius: 50%;width: 25px;height: 25px;
        }
		}
	</style>
</head>
<body>
	<table style="border:5px solid #b400d7;  font-family: calibri; font-size:14px;" border="1" width="90%" cellpadding="8" cellspacing="0.1">
		<tr>
			<th colspan="2" style=" color:#fff; background-color:#b400d7;"> New Contact Query 				
			</th>
			<tr>
				<td style="padding-left:50px; width:30%;">Contact Person</td>
				<td style="padding-left:50px; width:70%; font-weight:bold;">
				<?php echo $name; ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left:50px; width:30%;">Email ID</td>
				<td style="padding-left:50px; width:70%; font-weight:bold;">
					<?php echo $email; ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left:50px; width:30%;">Contact No</td>
				<td style="padding-left:50px; width:70%; font-weight:bold;">
					<?php echo $ph; ?>
				</td>
			</tr>
			
			
			<tr>
				<td style="padding-left:50px; width:30%;">Company Name</td>
				<td style="padding-left:50px; width:70%; font-weight:bold;">
					<?php echo $company; ?>
				</td>
			</tr>
			
			
			
			<tr>
				<td style="padding-left:50px; width:30%;">Role </td>
				<td style="padding-left:50px; width:70%; font-weight:bold;">
					<?php echo $role; ?>
				</td>
			</tr>
			
	</table>
	<table style="border:5px solid #b400d7;  font-family: calibri; font-size:14px;"  width="90%" >
<tr>
		<th colspan="2" style=" color:#fff; background-color:#b400d7;text-align: left;">Best Regards,</th>
    </tr>
		<tr>
			<td colspan="2" style="width:100%;"><img src="<?php echo base_url()?>/public/assets/img/sign.jpg" alt="Ventura Technology" style="width: 90%;"/>
			</td>
			</tr>
			<tr><td colspan="2">
                <table border="0"  align="right"  style="width: 30%;">
                    <tr>
                      <td height="15">&nbsp;</td>
                    </tr>
                    <tr>
                       <td align="center"><a target="_blank" href="https://in.linkedin.com/company/ventura_technologies" style="margin-top:5px; display:inline-block;">
                       <img class="image_width" src="<?php echo base_url()?>/public/assets/img/linkdin.png"  alt="LinkedIn" /></a></td>

                      <td align="center"><a target="_blank" href="https://www.facebook.com/venturapune/" style="margin-top:5px; display:inline-block;">
                      <img class="image_width" src="<?php echo base_url()?>/public/assets/img/fb.png"  alt="Facebook" /></a></td>

                            <td align="center"><a target="_blank" href="" style="margin-top:5px; display:inline-block;">
                            <img class="image_width" src="<?php echo base_url()?>/public/assets/img/twiter.png"  alt="Twitter" /></a></td>
                            
                            <td align="center"><a target="_blank" href="https://www.youtube.com/channel/UCg90U3cuSLJnqjJun4YE0nQ" style="margin-top:5px; display:inline-block;">
                            <img class="image_width" src="<?php echo base_url()?>/public/assets/img/youtub.png"  alt="youtub" /></a></td>
                            <td align="center"><a target="_blank" href="https://api.whatsapp.com/send?phone=918007773153&text=Hello%20Ventura%20Team,%20Please%20let%20me%20know%20more%20about%20your%20offerings." style="margin-top:5px; display:inline-block;">
                            <img class="image_width" src="<?php echo base_url()?>/public/assets/img/whatup.png"  alt="whatup" /></a></td>
                    </tr>

                  </table>
            </td>
		</tr>
		
	</table>

	<!-- SIGNATURE STARTS HERE-->
	
</body>
</html>