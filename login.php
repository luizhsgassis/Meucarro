<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Meucarro</title>
</head>
<body>
    <?php 

    
    
    
    ?>
    <!-- Nav Bar -->
    <section>
        <div class="container">
            <nav class="display_flex align_items_center justify_content_space_between">
                <a href="#"><img src="./images/MeuCarro.svg" alt=""></a>
                <div class="display_flex align_items_center">
                    <ul class="display_flex gap">
                        <li><a href="#"><p>Comprar</p></a></li>
                        <li><a href="#"><p>Vender</p></a></li>
                        <li><a href="#"><p>Serviços</p></a></li>
                        <li><a href="#"><p>Notícias</p></a></li>
                        <li><a href="#"><p>Ajuda</p></a></li>
                    </ul>
                    <div class="display_flex">
                        <a href="./login.php" class="button secondary_button"><p class="text_button">Entrar</p></a>
                        <a href="./login.php" class="button primary_button"><p class="text_button">Cadastrar</p></a>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- Login -->
    <section>
        <div class="container">
            <div class="login_container">
                <div class="login_title">
                    <h6>Bem vindo/a de volta!</h6>
                    <p>Digite seus dados para entrar</p>
                </div>
                <div class="login_buttons">
                    <a href="" class="button primary_button"><p class="text_button">Entrar</p></a>
                    <a href="" class="button secondary_button"><p class="text_button">Cadastrar</p></a>
                </div>
                <input type="text" placeholder="Email" class="input_box">
                <svg class="icon">
                    <use xlink:href="./images/modelo-icon.svg"></use>
                </svg>
                <a href="" class="button primary_button"><p class="text_button">Continuar</p></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer_divs display_flex justify_content_space_between">
                <div class="footer_logo">
                    <a href="#"><img src="./images/MeuCarro.svg" alt=""></a>
                    <div class="small">Aqui você pode comprar ou vender carros novos e usados de todas as marcas, como Porshe, Mercedes, Audi...</div>
                </div>
                <div class="footer_title">
                    <h6>Serviços</h6>
                    <ul>
                        <li class="small">Delivery</li>
                        <li class="small">Garantia</li>
                        <li class="small">Financiamento</li>
                    </ul>
                </div>
                <div class="footer_title">
                    <h6>Ajuda</h6>
                    <ul>
                        <li class="small">Segurança</li>
                        <li class="small">Atendimento</li>
                        <li class="small">Dicas</li>
                        <li class="small">Vídeos</li>
                    </ul>
                </div>
                <div class="footer_title">
                    <h6>Institucional</h6>
                    <ul>
                        <li class="small">Sobre Nós</li>
                        <li class="small">Entrar em contato</li>
                        <li class="small">Termos de usuário</li>
                    </ul>
                </div>
            </div>
            <p class="caption">MeuCarro, 2024 © Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>