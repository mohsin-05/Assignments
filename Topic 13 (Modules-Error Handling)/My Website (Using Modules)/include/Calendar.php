<center>

	<!-- <div id="calendar_container"></div> -->
	<form action="" method="POST">
	<input type="text" name="text" id="date-input" style="width: 200px;" />
	<input type="submit" name="submit" value="submit">
	</form>
	</center>
	<script>
		// creating dhtmlxCalendar
		// var calendar = new dhx.Calendar("calendar_container");
		const calendar = new dhx.Calendar(null, {dateFormat: "%d/%m/%y"});
		const popup = new dhx.Popup();
		popup.attach(calendar);

		const dateInput = document.getElementById("date-input");
		dateInput.addEventListener("click", function() {
		popup.show(dateInput);

	});

		calendar.events.on("change", function() {
		dateInput.value = calendar.getValue();
			 popup.hide();
	});

</script>

