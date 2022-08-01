function okCancel(str) {
    var browser = navigator.appName;
    if (str == '')
        str = 'Are you sure?>';
    if (browser == "Microsoft Internet Explorer") {
        if (confirm(str)) {
            return true;
        } else {
            event.returnValue = false;
            return false;
        }
    } else {
        if (confirm(str)) {
            return true;
        } else {
            return false;
        }
    }
}

