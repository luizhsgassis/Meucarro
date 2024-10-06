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
                        <a href="#" class="button secondary_button"><p class="text_button">Entrar</p></a>
                        <a href="#" class="button primary_button"><p class="text_button">Cadastrar</p></a>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
     <section>
        <div class="container display_flex align_items_center">
            <div class="hero_content">
                <h1 class="title_hero">A maneira mais fácil de <span>comprar e vender carros.</span></h1>
                <h5 class="subtitle_hero dark_text">Conecte-se com os melhores negócios de carros.</h5>
                <div class="marca_container display_flex align_items_center">
                    <div class="marca_cliente">
                        <h3 class="dark_text">50+</h3>
                        <p class="dark_text">Marcas</p>
                    </div>
                    <div class="separator"></div>
                    <div  class="marca_cliente">
                        <h3 class="dark_text">10K+</h3>
                        <p class="dark_text">Clientes</p>
                    </div>
                </div>
            </div>
            <div class="hero_image">
                <img src="./images/carro-min.jpg" alt="">
            </div>
        </div>
     </section>

     <!-- Search Bar -->
      <section>
        <div class="search_bar display_flex align_items_center justify_content_space_between">
            <div class="input_group">
                <input type="text" placeholder="Marca" class="input_box">
                <svg class="icon">
                    <use xlink:href="./images/marca-icon.svg"></use>
                </svg>
            </div>
            <div class="input_group">
                <input type="text" placeholder="Modelo" class="input_box">
                <svg class="icon">
                    <use xlink:href="./images/modelo-icon.svg"></use>
                </svg>
            </div>
            <div class="input_group">
                <input type="text" placeholder="Ano" class="input_box">
                <svg class="icon">
                    <use xlink:href="./images/ano-icon.svg"></use>
                </svg>
            </div>
            <div class="input_group">
                <input type="text" placeholder="Preço" class="input_box">
                <svg class="icon">
                    <use xlink:href="./images/preco-icon.svg"></use>
                </svg>
            </div>
            <input type="submit" value="Pesquisar" class="search_button">
        </div>
      </section>

    <!-- Cards -->
    <section>
        <div class="container">
            <div class="card_title">
                <h1>COMPRAR CARROS</h1>
            </div>
            <div class="card_container">
                <div class="card">
                    <img class="card_image" alt="Imagem do carro" height="150" src="https://storage.googleapis.com/a1aa/image/efPiG8MWhHjmeoFbxMSToEUd3oejWUpmYTfVaXw9NuhbT6e4E.jpg" width="250"/>
                    <h6>Hyunday Elantra</h6>
                    <div class="rating display_flex align_items_center">
                        <img src="./images/star-icon.svg" alt="Ícone de estrela">
                        <p class="reviews">4.8 (2.436 Reviews)</p>
                    </div>
                    <div class="location">
                        Curitiba-PR
                    </div>
                    <div class="details">
                        <span class="caption">2017</span>
                        <span class="caption">85.000 km</span>
                        <span class="caption">Auto</span>
                    </div>
                    <div class="price display_flex align_items_center justify_content_space_between">
                        <h6>R$ 80.900</h6>                    
                        <a class="more-info placeholder display_flex align_items_center" href="#">Ver Mais <img src="./images/arrow.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <a href="#" class="button card_button">
                <p class="text_button">Ver Todos<svg class="arrow_icon" width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.34066 10.8333H13.649L9.58232 14.9C9.25732 15.225 9.25732 15.7583 9.58232 16.0833C9.90732 16.4083 10.4323 16.4083 10.7573 16.0833L16.249 10.5917C16.574 10.2667 16.574 9.74165 16.249 9.41665L10.7657 3.91665C10.61 3.76061 10.3986 3.67291 10.1782 3.67291C9.95773 3.67291 9.74635 3.76061 9.59066 3.91665C9.26566 4.24165 9.26566 4.76665 9.59066 5.09165L13.649 9.16665H4.34066C3.88232 9.16665 3.50732 9.54165 3.50732 9.99998C3.50732 10.4583 3.88232 10.8333 4.34066 10.8333Z"/>
                </svg></p>
            </a>
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