
// Using vanilla JavaScript for maximum compatibility
// Enclosing the notice box's close button onclick event handler to avoid global variable access
window.addEventListener('load', function (event) {

    // Get all notice boxes' close buttons
    var CloseButtons = document.getElementsByClassName("MHS_INTERVIEW_TASK_1_CloseButton");

    // Define variable for the for loop
    var i;

    // Iterate through the all notice boxes' close buttons
    for (i = 0; i < CloseButtons.length; i++) {

        // Attach event handler for each notice box's close button's onclick event
        CloseButtons[i].onclick = function () {

            // Get the close button's parent (the notice box container div)
            var NoticeBoxContainerDiv = this.parentElement;

            // Set container div opacity to 0
            NoticeBoxContainerDiv.style.opacity = "0";

            // Setting a time out to remove (hide) container div 
            setTimeout(function () { NoticeBoxContainerDiv.style.display = "none"; }, 600);

        }

    }

});