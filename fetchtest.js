fetch("https://www.vetssmessenger.com/oyumino/fetch_ukelistjson.php")
    .then((data) => data.json())
    .then((res) => console.log(res));
    