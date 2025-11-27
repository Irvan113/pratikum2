<script>
document.getElementById("loginBtn").addEventListener("click", async () => {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const send = await fetch(API_URL + "login", {
        method: "POST",
        body: JSON.stringify({ username, password })
    });

    const res = await send.json();

    if (res.status === "success") {
        localStorage.setItem("user", JSON.stringify(res.user));
        alert("Login berhasil!");
        window.location.href = "index.php";
    } else {
        alert(res.msg);
    }
});
</script>
