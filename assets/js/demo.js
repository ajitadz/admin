$(function () {

    $("#testResizableArray").sevenSegArray({ digits: 6 });
    var iArrayValue = 8888.88;
    setInterval(function() {
        $("#testResizableArray").sevenSegArray({ value: iArrayValue });
    }, 50);

});
