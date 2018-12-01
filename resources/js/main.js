function confirmDelete() {
			let choice  = confirm("are you sure ?");
			if (choice) {
				document.getElementById('delete-form').submit();
			}
		}