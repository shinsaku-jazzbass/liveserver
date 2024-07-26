async function callApi() {
    //リソースを取得
    const response = await fetch("https://www.vetssmessenger.com/oyumino/fetch_ukelistjson.php");
    const users = await response.json();
    console.log(users); // => 配列
    var detail1 = document.getElementById("detail1");
    detail1.innerHTML = users[0].id + users[0].clntname;
}
//callApi();