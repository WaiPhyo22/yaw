$(document).ready(function(){
    if(sessionStorage.getItem("menuToggle") == "close") {
        $("#wrapper").addClass("toggled");
    }

    $("body").css({"display": "block"});
});

function showUserIconPopup() {
    let popup = document.getElementById("adminPopup");
    popup.classList.toggle("show");
}

document.addEventListener("click", function(event) {
    //click outside of admin pop up box
    if(event.target.closest(".admin-popup-box") === null) {
        let popup = document.getElementById("adminPopup");
        popup.classList.remove("show");
    }
})

//close delete completion message automatically
window.setTimeout(function () {
    $("#alert_message").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 3000);

$('#submitBtn, #saveAndNextBtn').click(function(event){
    event.preventDefault();
    $('button[type=submit]').attr("disabled", true);
    $('#btnType').attr("value", $(this).val());
    $(this).parents('form:first').submit();
});

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    let menuToggle = sessionStorage.getItem("menuToggle");

    if(menuToggle == "close") {
        sessionStorage.removeItem("menuToggle");
    } else {
        sessionStorage.setItem("menuToggle", "close");
    }
    
    $("#wrapper").toggleClass("toggled");
});