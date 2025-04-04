<header class="header">

    <div class="navbar-div-icon">
        <div class="navbar-border-div-show" id="div-show">
            <i id="navbar-option-button" class="fa-solid fa-bars"></i>

        </div>
        <div class="navbar-border-div-hidden" id="div-hidden">
            <i id="navbar-option-button2" class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div id="hidden-options">
        <ul>
            <li><a href="/stock-manager/view/pages/categoria/" class="defalt-link-style">Categoria</a></li>
            <li><a href="/stock-manager/view/pages/produtos/" class="defalt-link-style"></a>Produtos</li>
            <li><a href="/stock-manager/view/pages/usuario/" class="defalt-link-style">Usuarios</a></li>
            <li><a href="/stock-manager/view/pages/" class="defalt-link-style">Home</a></li>
        </ul>
    </div>
</header>


<script>
    const options = document.getElementById("hidden-options");
    const show_button = document.getElementById("div-show");
    const div_hidden = document.getElementById("div-hidden");

    show_button.addEventListener("click", function() {
        show_button.style.visibility = "hidden"
        options.style.visibility = "visible"
        div_hidden.style.display = "flex"
    })

    div_hidden.addEventListener("click", function() {
        show_button.style.visibility = "visible"
        div_hidden.style.display = "none"
        options.style.visibility = "hidden"
    })
</script>