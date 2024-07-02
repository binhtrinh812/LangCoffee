document.addEventListener("DOMContentLoaded", function() {
    const bookingModal = document.getElementById("bookingModal");
    const openModalButton = document.getElementById("openModal");
    const closeModalButton = document.getElementById("closeModal");

    // Function to open booking modal
    openModalButton.addEventListener("click", function() {
        bookingModal.style.display = "block";
    });

    // Function to close booking modal
    closeModalButton.addEventListener("click", function() {
        bookingModal.style.display = "none";
    });

    // Close modal when clicking outside the modal content
    window.addEventListener("click", function(event) {
        if (event.target === bookingModal) {
            bookingModal.style.display = "none";
        }
    });

    // Booking form submission handling
    const bookingForm = document.getElementById("bookingForm");
    const successModal = document.getElementById("successMessage");

    bookingForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const phone = document.getElementById("phone").value;
        const request = document.getElementById("request").value;
        const message = document.getElementById("message").value;

        const personName = document.querySelector(".section_title").innerText;

        if (!name || !phone || !request) {
            displayErrorMessage();
        } else {
            displaySuccessMessage(personName, name, phone, request, message);
        }

        bookingModal.style.display = "none";
    });

    function displayErrorMessage() {
        successModal.style.display = "block";
        successModal.querySelector("p").textContent = "Vui lòng điền đầy đủ thông tin để đặt lịch.";
    }

    function displaySuccessMessage(personName, name, phone, request, message) {
        successModal.style.display = "block";
        const successContent = `
            <h2>Thông báo</h2>
            <p><strong>Người được yêu cầu:</strong> ${personName}</p>
            <p><strong>Họ và tên:</strong> ${name}</p>
            <p><strong>Số điện thoại:</strong> ${phone}</p>
            <p><strong>Yêu cầu:</strong> ${request}</p>
            <p><strong>Lời nhắn:</strong> ${message}</p>
            <p>Hiện tại chưa hỗ trợ chức năng, vui lòng đặt qua fanpage Lặng.</p>
            <a href="#" class="modal-button" onclick="closeModals()">Lặng</a>
        `;
        successModal.querySelector(".modal-content").innerHTML = successContent;
    }

    window.closeModals = function() {
        bookingModal.style.display = "none";
        successModal.style.display = "none";
    };

    // Close success modal when clicking outside the modal content
    window.addEventListener("click", function(event) {
        if (event.target === successModal) {
            successModal.style.display = "none";
        }
    });
});
