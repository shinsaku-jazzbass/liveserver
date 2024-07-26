var div = document.createElement("div");
div.classList.add("itemx");
console.log(div);
// //var modal = document.getElementsByClassName("modal");
// //console.log(modal);
// //modal.appendChild("aaaaa");
div.innerHTML = "テスト";
document.body.appendChild(div);
//div.appendChild('aaa');

// document.body.appendChild(div);
//console.log(div);
//const div2 = document.querySelector(".itemx");
// console.log(div2);
//div2.innerHTML = "aaaaa";
// document.body.appendChild(div2);
//jQueryによる要素class名指定、およびクリックイベント
$('.itemx').click(function () {
    alert('click');
    $('.itemx').html('セレクタへ直接出力detailes<br><img src="http://133.18.242.109/minamiyama/image/jazz.jpg">');
});

