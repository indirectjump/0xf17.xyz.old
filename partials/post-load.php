<script>

const currentTheme = localStorage.getItem("theme");
const btn = document.querySelector("#btn-toggle");
const theme = document.querySelector("#theme-link");
const darkcss = "https://mathscapes.xyz/aux/css/dark.css";
const lightcss = "https://mathscapes.xyz/aux/css/light.css";

if (currentTheme == "dark") {
    theme.href = darkcss;
} else {
    theme.href = lightcss;
}

btn.addEventListener("click", function() {
    if (theme.getAttribute("href") == lightcss) {
        theme.href = darkcss;
        localStorage.setItem("theme", "dark");
    }
    else {
        theme.href = lightcss;
        localStorage.setItem("theme", "light");
    }
});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
