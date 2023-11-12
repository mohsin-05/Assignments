<!DOCTYPE html>
<html>
<head>
	<title>Scientific Calculator</title>
	<style>
		h2{
			background-color: orange;
			color: darkred;
			border: 2px solid darkred;
			border-radius: 10px;
			padding: 10px;
			margin: 10px 20px;
			font-family: cursive;
		}
		*{
			box-sizing: border-box;
		}
		.row{
			clear: both;
			display: flex;
			height: 50px;
		}
		.col{
			width: 14.28571428571429%;
		}
		.box{
			border: 1px solid gray;
			width: 500px;
			padding: 10px;
		}
		button{
			background-color: gray;
			width: 50px;
			height: 30px;
			border: 1px solid white;
			border-radius: 4px;
		}
		.scr{
			float: right;
			margin: 20px 0px;
			border: 1px solid black;
			width: 100%;
			text-align: right;
		}
		h3{
			margin-right: 15px;
			height: 5px;
		}
	</style>
</head>
<body>
<center>
	<h2>Scientific Calculator</h2>
<div class="box">
	<div class="scr"><h3 id="hist"></h3></div>
	<div class="row">
		<div class="col"><button onclick="alert('no button')">Rad</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="alert('no button')">...</button></div>
		<div class="col"><button onclick="alert('no button')">x!</button></div>
		<div class="col"><button>(</button></div>
		<div class="col"><button>)</button></div>
		<div class="col"><button onclick="clk('%')">%</button></div>
		<div class="col"><button onclick="clk('AC')">AC</button></div>
	</div>
	<div class="row">
		<div class="col"><button onclick="alert('no button')">lnv</button></div>
		<div class="col"><button onclick="clk('sin')">sin</button></div>
		<div class="col"><button onclick="alert('no button')">ln</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('7')">7</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('8')">8</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('9')">9</button></div>
		<div class="col"><button onclick="clk('÷')">÷</button></div>
	</div>
	<div class="row">
		<div class="col"><button onclick="clk('π')">π</button></div>
		<div class="col"><button onclick="clk('cos')">cos</button></div>
		<div class="col"><button onclick="clk('log')">log</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('4')">4</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('5')">5</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('6')">6</button></div>
		<div class="col"><button onclick="clk('×')">×</button></div>
	</div>
	<div class="row">
		<div class="col"><button onclick="alert('no button')">e</button></div>
		<div class="col"><button onclick="clk('tan')">tan</button></div>
		<div class="col"><button onclick="alert('no button')">√</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('1')">1</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('2')">2</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('3')">3</button></div>
		<div class="col"><button onclick="clk('-')">-</button></div>
	</div>
	<div class="row">
		<div class="col"><button>Ans</button></div>
		<div class="col"><button onclick="alert('no button')">EXP</button></div>
		<div class="col"><button onclick="clk('pow')">x<sup>y</sup></button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('0')">0</button></div>
		<div class="col"><button style="background-color: lightgray;" onclick="clk('.')">.</button></div>
		<div class="col"><button style="background-color: blue; " onclick="clk('=')">=</button></div>
		<div class="col"><button onclick="clk('+')">+</button></div>
	</div>
</div>

	<script>
		var hist = document.querySelector("#hist")
		var arr = new Array()

		function clk(obj){

			if ((obj == '+' || obj == '-' || obj == '×' || obj == '÷' || obj == '%') && arr[0] && !arr[1]) {
				arr.push(obj)
				hist.innerHTML = hist.innerHTML + obj
			} 

			if (obj != '+' && obj != '-' && obj != '×' && obj != '÷' && obj != '%' && obj != '=') {
				if(arr[1] && !arr[2]) {
					arr.push(obj)
				} else if(!arr[0]) {
					arr.push(obj)
				} else if (!arr[1] && arr[0]) {
					arr[0] += obj
				} else if (arr[1] && arr[0]) {
					arr[2] += obj
				}

				hist.innerHTML = hist.innerHTML + obj
			}


			if (obj == 'AC') {
				hist.innerHTML = ''
				while(arr[0]){
					arr.pop()
				}
			}

			if (obj == '=' && arr[0] && arr[1] && arr[2]){
				switch(arr[1]){
					case '+': hist.innerHTML = parseInt(arr[0]) + parseInt(arr[2])
					arr[0] = parseInt(arr[0]) + parseInt(arr[2])
					break
					case '-': hist.innerHTML = parseInt(arr[0]) - parseInt(arr[2])
					arr[0] = parseInt(arr[0]) - parseInt(arr[2])
					break
					case '×': hist.innerHTML = parseInt(arr[0]) * parseInt(arr[2])
					arr[0] = parseInt(arr[0]) * parseInt(arr[2])
					break
					case '÷': hist.innerHTML = parseInt(arr[0]) / parseInt(arr[2])
					arr[0] = parseInt(arr[0]) / parseInt(arr[2])
					break
					case '%': hist.innerHTML = parseInt(arr[0]) % parseInt(arr[2])
					arr[0] = parseInt(arr[0]) % parseInt(arr[2])
					break
				}

				while(arr[1]){
					arr.pop()
				}

			}

		}

	</script>

</center>
</body>
</html>