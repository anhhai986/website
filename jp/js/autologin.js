var interval = setInterval(function () {
    if (window.sitecakeGlobals && sitecakeGlobals.editMode === false) {
        var loginInput = document.getElementsByClassName("GOB4QEDCIJ")[0];
        if(loginInput) {
            document.getElementsByClassName("GOB4QEDCIJ")[0].value = "admin";
            clearInterval(interval);
        }
    }
}, 1000);
