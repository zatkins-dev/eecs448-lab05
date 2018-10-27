function select(event) {
    let currentSelection = document.getElementsByClassName("selected")[0];
    currentSelection.className = "select-button";
    event.currentTarget.className += " selected";
    let iframe = document.getElementById("admin-iframe");
    iframe.src = event.currentTarget.value;
}