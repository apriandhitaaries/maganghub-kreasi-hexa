var items = [
  ["001", "Keyboard Logitek", 60000, "Keyboard yang mantap untuk kantoran", "img/logitek.jpg"],
  ["002", "Keyboard MSI", 300000, "Keyboard gaming MSI mekanik", "img/msi.jpg"],
  ["003", "Mouse Genius", 50000, "Mouse Genius biar lebih pinter", "img/genius.jpeg"],
  ["004", "Mouse Jerry", 30000, "Mouse yang disukai kucing", "img/jerry.jpg"],
];

function dataHandling(data) {
  var allCardHTML = "";

  for (var i = 0; i < data.length; i++) {
    var item = data[i];
    var nama = item[1];
    var harga = item[2];
    var deskripsi = item[3];
    var gambar = item[4];

    var cardHTML = `
                <div class="col-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="${gambar}" class="card-img-top" height="200px" width="200px" alt="${nama}">
                        <div class="card-body">
                            <h5 class="card-title" id="itemName">${nama}</h5>
                            <p class="card-text" id="itemDesc">${deskripsi}</p>
                            <p class="card-text">Rp ${harga}</p>
                            <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                        </div>
                    </div>
                </div>
                `;

    allCardHTML += cardHTML;
  }

  return allCardHTML;
}

var listBarang = document.getElementById("listBarang");
listBarang.innerHTML = dataHandling(items);

var formSearch = document.getElementById("formItem");
formSearch.addEventListener("submit", function (event) {
  event.preventDefault();
  var keyword = document.getElementById("keyword").value;
  var filteredItems = items.filter(function (item) {
    return item[1].toLowerCase().includes(keyword.toLowerCase());
  });
  listBarang.innerHTML = dataHandling(filteredItems);
});

var cartCounter = 0;
var cartButton = document.getElementById("cart");

listBarang.addEventListener("click", function (event) {
  if (event.target.id == "addCart") {
    event.preventDefault();
    cartCounter++;
    cartButton.innerHTML = "<i class='fas fa-shopping-cart'></i>(" + cartCounter + ")";
    alert("Item berhasil ditambahkan ke keranjang");
  }
});
