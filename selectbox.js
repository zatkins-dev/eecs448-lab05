function select(event) {
    let buttons = document.getElementsByClassName("selected");
    buttons[0].className = "select-button";
    event.currentTarget.className += " selected";
    event.currentTarget.firstChild.dispatchEvent(new MouseEvent("click", {
        "view": window,
        "bubbles": true,
        "cancelable": false
    }));
}