var modal;
function displayModal(modalId) {
	modal = document.getElementById(modalId);
	modal.style.display = "block";
}
function closeModal(modalId) {
	modal = document.getElementById(modalId);
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
  }
}