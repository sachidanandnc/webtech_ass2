$(document).ready(function () {
  $("#regForm").on("submit", function (e) {
    let valid = true;

    $("input[required], textarea[required], select[required]").each(function () {
      if ($(this).val().trim() === "") {
        $(this).css("border", "2px solid red");
        valid = false;
      } else {
        $(this).css("border", "1px solid #ccc");
      }
    });

    if (!valid) {
      e.preventDefault();
      alert("Please fill all fields correctly before submitting.");
    }
  });
});
