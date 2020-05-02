$(function () {
    $("#nanjing").hover(
    function () {
        $(".yuriko").attr("src", "images/yuriko.png");
    },
    NOP()
    );
    $("#elehobby-ipv6").hover(
    function () {
        $(".yuriko").attr("src", "images/iya.png");
    },
    NOP()
    );
    $("#wikipedia").hover(
    function () {
        $(".yuriko").attr("src", "images/yuriko-fuyu.png");
    },
    NOP()
    );
    $("#osm").hover(
    function () {
        $(".yuriko").attr("src", "images/yuriko-natsu.png");
    },
    NOP()
    );
    $("#github").hover(
    function () {
        $(".yuriko").attr("src", "images/sailor.png");
    },
    NOP()
    );
    $(".yuriko").hover(
    function () {
        $(this).attr("src", "images/yuriko2.png");
    },
    NOP()
    );
    $("#bookmeter").hover(
    function () {
        $("#dontcry").html("あれ・・・？");
        $("#yuriko").html("目からポカリが・・・");
    },
    NOP()
    );
    $("#oldsite").hover(
    function () {
        $("#dontcry").html("ぅーぅー");
        $("#yuriko").html("しくしく(泣)");
    },
    NOP()
    );
});

function NOP() {
    //何もしない
}
