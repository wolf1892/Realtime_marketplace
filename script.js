function getUrl(start = 0) {
    return 'http://192.168.0.114/login_registration_system_LAMP/api.php';
}
function getData(url) 
{
    fetch(url)
        .then(response => response.json())
        .then(data => loadDataIntoTable(data))
        .catch(err => console.log(err));
}

function loadDataIntoTable(data) {
    let coinprodName = [];
    let coinprice = [];
    let coinper = [];
    let coinPerson = [];
    let coinphone = [];
	let coinsize = [];
	let coinbrand = [];
	let coinspecial = [];
	let coinlife = [];
	let coinmoq = [];

    data.forEach((coin) => {
        coinprodName.push(coin.product_name);
        coinprice.push(coin.price);
        coinper.push(coin.per);
        coinPerson.push(coin.person_name);
        coinphone.push(coin.phone);
		coinsize.push(coin.size);
		coinbrand.push(coin.brand);
		coinspecial.push(coin.special);
		coinlife.push(coin.life);
		coinmoq.push(coin.moq);
    });

    let tableBody = document.getElementById('crypto-table-body');

    let html = "";

    for(let i = 0; i < coinmoq.length; i++) {
        html += "<tr>";
        html += "<td>" + coinprodName[i] + "</td>";
		html += "<td>" + coinprice[i] + "</td>";
        html += "<td>" + coinper[i] + "</td>";
        html += "<td>" + coinPerson[i] + "</td>";
		html += "<td>" + coinphone[i] + "</td>";
		html += "<td>" + coinsize[i] + "</td>";
		html += "<td>" + coinbrand[i] + "</td>";
		html += "<td>" + coinspecial[i] + "</td>";
		html += "<td>" + coinlife[i] + "</td>";
		html += "<td>" + coinmoq[i] + "</td>";
        
        
        html += "</tr>";
    }

    tableBody.innerHTML = html;
}

function init() {
    const url = getUrl();
    getData(url);
}

init();
