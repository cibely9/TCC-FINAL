<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- Adicionando o CDN do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Sua Navbar -->
    <nav class="navbar">
        <div class="navbar-left">
            <img src="img/logo5.png" alt="Logo" class="logo" style="width: 160px; height: auto;">
        </div>
        <div class="navbar-right">
            <a href="https://wa.me/5544997063037" target="_blank" class="social-icon">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.instagram.com/apasbac" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="resp.php" class="social-icon">
                <i class="fas fa-info-circle"></i> <!-- Ícone "Sobre" -->
            </a>
        </div>
    </nav>

    <!-- Conteúdo da página Sobre -->
    <main>
        <header>
            <h1>Sobre a APASBAC</h1>
        </header>

        <section>
            <h2>Quem Somos</h2>
            <!-- Exibição de conteúdo fixo -->
            <div id="historia" class="historia-conteudo">
                <p>Somos uma organização dedicada à promoção do bem-estar social, oferecendo apoio e recursos às famílias e comunidades carentes. Desde nossa fundação, buscamos ser uma referência de solidariedade e ação social, com projetos que envolvem educação, saúde, e cultura.</p>
                <p>Nosso objetivo é melhorar a qualidade de vida dos indivíduos, oferecendo programas que incentivem a inclusão e o desenvolvimento sustentável. Trabalhamos com diversas parcerias e temos o compromisso de transformar a realidade das pessoas em nossa região.</p>
            </div>
        </section>
    </main>
    
</body>
</html>

<style>
   /* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #A9A9A9; /* Azul claro vibrante */
    padding: 12px 25px;
    color: white;
    height: 75px;
}

/* Logo */
.navbar-left {
    display: flex;
    align-items: center;
    gap: 10px; /* Dá um espaço entre a logo e o título */
}

.logo {
    height: 50px; /* Ajuste o tamanho da logo conforme necessário */
    width: auto;
}

/* Ícones */
.navbar-right {
    display: flex;
    gap: 25px;
}

.social-icon {
    color: white;
    font-size: 30px;
    transition: transform 0.3s ease;
    text-decoration: none;
}

.social-icon:hover {
    transform: scale(1.1);
}

.social-icon i {
    color: white;
}

/* Container do mapa */
.map-container {
    margin-top: 20px;
    border-radius: 10px; /* Bordas arredondadas */
    overflow: hidden; /* Garante que o mapa não ultrapasse as bordas */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

/* Estilos gerais para a página Sobre */
main {
    padding: 20px;
    max-width: 1000px;
    margin: 0 auto;
    background-color: #fff;
}

/* Título principal */
header h1 {
    text-align: center;
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

/* Título secundário */
h2 {
    font-size: 1.5rem;
    color: #555;
    margin-bottom: 10px;
}

/* Estilo do conteúdo da história */
.historia-conteudo {
    font-family: "Georgia", serif; /* Fonte tradicional alterada para Georgia */
    font-size: 1.1rem;
    line-height: 1.6;
    color: #333;
    margin-top: 20px;
}

/* Melhorando a estética da história */
.historia-conteudo p {
    margin-bottom: 20px;
}
</style>
