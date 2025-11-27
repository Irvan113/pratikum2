<?php
include 'config.php';
$p=mysqli_query($conn,"SELECT * FROM produk");
?>
<html><body>
<h2>Produk</h2>
<?php while($d=mysqli_fetch_assoc($p)){ ?>
<div>
<img src="assets/uploads/<?= $d['image'] ?>" width="100"><br>
<?= $d['name'] ?> - Rp<?= $d['price'] ?><br>
<a href="product.php?id=<?= $d['id'] ?>">Detail</a>
</div><hr>
<div id="product-list" class="row g-4"></div>

<script>
async function loadProducts() {
    const req = await fetch(API_URL + "products");
    const products = await req.json();

    let html = "";
    products.forEach(p => {
        html += `
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm">
                <img src="assets/uploads/${p.image}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5>${p.name}</h5>
                    <p>${p.description}</p>
                    <p class="fw-bold text-danger">Rp ${p.price}</p>
                    <a href="product.php?id=${p.id}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>`;
    });

    document.getElementById("product-list").innerHTML = html;
}

loadProducts();
</script>

<?php } ?>
</body></html>