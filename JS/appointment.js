$(document).ready(function() {
    var modal = $("#bookingModal");
    var btn = $(".button");
    var span = $(".close");

    // Khi người dùng nhấn vào nút, hiển thị modal
    btn.on("click", function() {
        modal.css("display", "block");
    });

    // Khi người dùng nhấn vào nút đóng hoặc ngoài modal, đóng modal
    span.on("click", function() {
        modal.css("display", "none");
    });

    $(window).on("click", function(event) {
        if (event.target == modal[0]) {
            modal.css("display", "none");
        }
    });

    // Xử lý khi người dùng gửi form đặt lịch
    $("#bookingForm").on("submit", function(event) {
        event.preventDefault(); // Ngăn chặn submit mặc định của form

        // Xử lý lưu thông tin bookingForm tại đây
        var formData = $(this).serialize();
        console.log("Form data: ", formData);

        // Đóng modal sau khi xử lý form
        modal.css("display", "none");
    });
});
