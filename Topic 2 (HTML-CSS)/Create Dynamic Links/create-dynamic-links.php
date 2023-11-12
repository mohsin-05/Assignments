<!DOCTYPE html>
<html>
<head>
	<title>Assignment: CREATE DYNAMIC LINKS</title>
	<style>

		a[href$=".pdf"]::before {
		  content: "";
		  display: inline-block;
		  width: 20px;
		  height: 20px;
		  background-image: url('pdf.png');
		  background-repeat: no-repeat;
		  background-size: contain;
		}

		a[href$=".docx"]::before {
		  content: "";
		  display: inline-block;
		  width: 20px;
		  height: 20px;
		  background-image: url('docx.png');
		  background-repeat: no-repeat;
		  background-size: contain;
		}

		a[href$=".ppt"]::before {
		  content: "";
		  display: inline-block;
		  width: 20px;
		  height: 20px;
		  background-image: url('ppt.png');
		  background-repeat: no-repeat;
		  background-size: contain;
		}

		a[href$=".xlsx"]::before {
		  content: "";
		  display: inline-block;
		  width: 20px;
		  height: 20px;
		  background-image: url('xlsx.png');
		  background-repeat: no-repeat;
		  background-size: contain;
		}

	</style>
</head>
<body>

	<h3>DYNAMIC LINKS</h3>
	<a href="file.pdf"> PDF </a><br><br>
	<a href="file.docx"> WORD </a><br><br>
	<a href="file.ppt"> PPT </a><br><br>
	<a href="file.xlsx"> XLSX </a>
	
</body>
</html>