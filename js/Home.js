var imgCount = 1;
var total = 5;

function slide(x) {

    var Image = document.getElementById('img');
    imgCount += x;

    if (imgCount > total) {
        imgCount = 1;
    }

    if (imgCount < 1) {
        imgCount = total;
    }
    Image.src = "../images/img" + imgCount + ".jpg";

}

window.setInterval(function slideAuto() {

    var Image = document.getElementById('img');
    imgCount += 1;

    if (imgCount > total) {
        imgCount = 1;
    }

    if (imgCount < 1) {
        imgCount = total;
    }

    Image.src = "../images/img" + imgCount + ".jpg";

}, 8000);