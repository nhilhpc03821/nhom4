var index = 1;
changeImage = function() {
    var imgs = ["../asset/dlient/img/banner_1.jpg", "../asset/dlient/img/baner_2.jpg", "../asset/dlient/img/banner_3.jpg",
        "../asset/dlient/img/banner_4.jpg", "../asset/dlient/img/banner_5.jpg", "../asset/dlient/img/banner_6.jpg"
    ];
    document.getElementById('img').src = imgs[index];
    index++;
    if (index == 6) {
        index = 0;
    }
}
setInterval(changeImage, 1300);