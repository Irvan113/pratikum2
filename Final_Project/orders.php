<script>
async function loadOrders() {
    const user = JSON.parse(localStorage.getItem("user"));
    if (!user) return;

    const req = await fetch("orders_user.php?user_id=" + user.id);
    const orders = await req.json();

    let html = "";
    orders.forEach(o => {
        html += `
        <tr>
            <td>${o.id}</td>
            <td>${o.product_name}</td>
            <td>${o.qty}</td>
            <td>${o.payment_method}</td>
            <td>${o.created_at}</td>
        </tr>`;
    });

    document.getElementById("order-table").innerHTML = html;
}

loadOrders();
</script>
