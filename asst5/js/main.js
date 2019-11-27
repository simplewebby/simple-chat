$(document).ready(function() {
    var chatInterval = 350; //refresh interval in ms
    var $uname = $("#uname");
    var $chOut = $("#chatOut");
    var $chatIn = $("#chatIn");
    var $chatGo = $("#chatGo");

    function sendMsg() {
        var userNameString = $uname.val();
        var chatInputString = $chatIn.val();

        $.get("./insert.php", {
            username: userNameString,
            text: chatInputString
        });

        $uname.val("");
        getMsg();
    }

    function getMsg() {
        $.get("./fetch.php", function(data) {
            $chOut.html(data); //Paste content into chat output
        });
    }

    $chatGo.click(function() {
        sendMsg();
    });

    setInterval(function() {
        getMsg();
    }, chatInterval);
});