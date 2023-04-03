$(document).ready(function () {
  $(".read").click(function () {
    console.log($(this).attr("id"));
    $.ajax({
      url: "/dashboard/read",
      method: "POST",
      data: { id: $(this).attr("id") },
      success: function (html) {
        window.location("/dashboard/reader");
      },
    });
  });
});
