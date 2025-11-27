<script>
document.getElementById("registerBtn").addEventListener("click", async () => {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const send = await fetch(API_URL + "register", {
        method: "POST",
        body: JSON.stringify({ username, password })
    });

    const res = await send.json();

    if (res.status === "success") {
        alert("Registrasi berhasil!");
        window.location.href = "login.php";
    } else {
        alert("Gagal mendaftar");
    }
});
</script>
