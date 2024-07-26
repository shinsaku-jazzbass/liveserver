const contactForm = document.forms.contact
const prefecture = document.getElementById('prefecture')
const city = document.getElementById('city')
const town = document.getElementById('town')
contactForm.postcode.addEventListener('input', e=> {
    if(e.target.value.length === 7){
        //alert(e.target.value)
        fetch('https://zipcloud.ibsnet.co.jp/api/search?zipcode=' + e.target.value)
        .then(response => response.json())
        .then(data => {
            console.log(data.results)
            prefecture.value = data.results[0].address1;
            city.value = data.results[0].address2;
            town.value = data.results[0].address3;
        })
        
        
    }
})
//element.dataset.name = 'test';
//console.log(contactForm.postcode.value)
