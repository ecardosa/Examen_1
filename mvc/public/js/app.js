$(document).ready(function() {
    // Open modal when the button is clicked
    $("#openModalBtn").click(function() {
      // Load content from server using AJAX
      $.ajax({
        url: "index.php",
        type: "GET",
        success: function(data) {
          // Insert the retrieved content into the modal
          $("#modalContent").html(data);
          // Display the modal
          $("#myModal").css("display", "block");
        }
      });
    });
  
    // Close the modal when the close button is clicked
    $("#close").click(function() {
      $("#myModal").css("display", "none");
    });
    $("#close2").click(function() {
        $("#myModal").css("display", "none");
      });
    // Close the modal if the user clicks outside of it
    $(window).click(function(event) {
      if (event.target == $("#myModal")[0]) {
        $("#myModal").css("display", "none");
      }
    });
  });

  $(document).ready(function() {
    $('#cookieModal').modal('show');
});