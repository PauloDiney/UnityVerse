<?php
function renderMenuBar() {
    echo '
    <div class="menu-bar">
        <div class="logo">
            <img src="./view/img/logo.png" alt="UnityVerse">
            <span><strong>UnityVerse</strong></span>
        </div>
        <div class="menu-links">
            <a href="#home">Conteudos</a>
            <a href="#services">Aulas</a>
            <a href="#about">Quem Somos</a>
            <a href="#contact">Contato</a>
        </div>
        <div class="box">
            <i class="bx bx-search-alt" id="search-icon" style="color:#ececec; cursor: pointer; font-size: 24px;"></i>
            <form name="search">
                <input type="text" class="input" id="search-bar" name="txt" placeholder="Pesquisar...">
            </form>
        </div>
        <div class="login-button">
            <button><strong>Login</button>
        </div>
    </div>
    ';
}
?>