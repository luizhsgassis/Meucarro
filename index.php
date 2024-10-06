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
                        <span class="caption display_flex align_items_center"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 3.00002C1.50013 2.72789 1.57429 2.46092 1.71453 2.22771C1.85477 1.9945 2.05582 1.80383 2.29613 1.67614C2.53644 1.54844 2.80696 1.48852 3.07871 1.5028C3.35047 1.51708 3.61322 1.60502 3.83882 1.7572C4.06443 1.90938 4.24438 2.12006 4.35941 2.36669C4.47444 2.61331 4.52021 2.88658 4.49182 3.15723C4.46342 3.42787 4.36194 3.6857 4.19824 3.90308C4.03453 4.12047 3.81477 4.28922 3.5625 4.39127V8.43752H8.4375V4.39127C8.1148 4.26073 7.84755 4.02202 7.68155 3.71605C7.51555 3.41008 7.46113 3.0559 7.52762 2.71421C7.59412 2.37251 7.77738 2.06459 8.04601 1.84319C8.31464 1.6218 8.6519 1.50073 9 1.50073C9.3481 1.50073 9.68537 1.6218 9.954 1.84319C10.2226 2.06459 10.4059 2.37251 10.4724 2.71421C10.5389 3.0559 10.4845 3.41008 10.3185 3.71605C10.1525 4.02202 9.8852 4.26073 9.5625 4.39127V8.43752H12C12.723 8.43752 13.209 8.43602 13.5713 8.38802C13.917 8.34077 14.0655 8.26052 14.163 8.16302C14.2605 8.06552 14.3408 7.91702 14.388 7.57052C14.436 7.20902 14.4375 6.72302 14.4375 6.00002V4.39127C14.1148 4.26073 13.8476 4.02202 13.6815 3.71605C13.5155 3.41008 13.4611 3.0559 13.5276 2.71421C13.5941 2.37251 13.7774 2.06459 14.046 1.84319C14.3146 1.6218 14.6519 1.50073 15 1.50073C15.3481 1.50073 15.6854 1.6218 15.954 1.84319C16.2226 2.06459 16.4059 2.37251 16.4724 2.71421C16.5389 3.0559 16.4845 3.41008 16.3185 3.71605C16.1525 4.02202 15.8852 4.26073 15.5625 4.39127V6.03902C15.5625 6.71252 15.5625 7.27502 15.5025 7.72052C15.4395 8.19152 15.3 8.61677 14.958 8.95802C14.6168 9.30002 14.1915 9.43952 13.7205 9.50252C13.275 9.56252 12.7133 9.56252 12.039 9.56252H9.5625V13.6088C9.8852 13.7393 10.1525 13.978 10.3185 14.284C10.4845 14.59 10.5389 14.9441 10.4724 15.2858C10.4059 15.6275 10.2226 15.9355 9.954 16.1568C9.68537 16.3782 9.3481 16.4993 9 16.4993C8.6519 16.4993 8.31464 16.3782 8.04601 16.1568C7.77738 15.9355 7.59412 15.6275 7.52762 15.2858C7.46113 14.9441 7.51555 14.59 7.68155 14.284C7.84755 13.978 8.1148 13.7393 8.4375 13.6088V9.56252H3.5625V13.6088C3.8852 13.7393 4.15245 13.978 4.31846 14.284C4.48446 14.59 4.53888 14.9441 4.47238 15.2858C4.40589 15.6275 4.22262 15.9355 3.954 16.1568C3.68537 16.3782 3.3481 16.4993 3 16.4993C2.6519 16.4993 2.31464 16.3782 2.04601 16.1568C1.77738 15.9355 1.59412 15.6275 1.52762 15.2858C1.46113 14.9441 1.51555 14.59 1.68155 14.284C1.84755 13.978 2.1148 13.7393 2.4375 13.6088V4.39127C2.1604 4.27918 1.92311 4.08685 1.75607 3.83896C1.58903 3.59108 1.49986 3.29894 1.5 3.00002Z" fill="#1E1E1E" fill-opacity="0.6"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.9375 11.25C12.9375 11.1008 12.9968 10.9577 13.1023 10.8523C13.2077 10.7468 13.3508 10.6875 13.5 10.6875H15.2145C16.2457 10.6875 17.0625 11.538 17.0625 12.5625C17.0641 12.9481 16.9467 13.3247 16.7265 13.6412C16.5063 13.9576 16.1938 14.1985 15.8317 14.331L16.9792 16.206C17.0179 16.269 17.0437 16.339 17.0553 16.4119C17.0668 16.4849 17.0639 16.5594 17.0467 16.6313C17.0294 16.7031 16.9982 16.7708 16.9548 16.8306C16.9114 16.8904 16.8566 16.941 16.7936 16.9796C16.7306 17.0182 16.6607 17.0441 16.5877 17.0556C16.5147 17.0672 16.4402 17.0643 16.3684 17.047C16.2965 17.0298 16.2288 16.9986 16.169 16.9552C16.1092 16.9117 16.0586 16.857 16.02 16.794L14.5778 14.4375H14.0625V16.5C14.0625 16.6492 14.0032 16.7923 13.8977 16.8977C13.7923 17.0032 13.6492 17.0625 13.5 17.0625C13.3508 17.0625 13.2077 17.0032 13.1023 16.8977C12.9968 16.7923 12.9375 16.6492 12.9375 16.5V11.25ZM14.0625 13.3125H15.2145C15.603 13.3125 15.9375 12.9878 15.9375 12.5625C15.9375 12.1373 15.603 11.8125 15.2145 11.8125H14.0625V13.3125Z" fill="#1E1E1E" fill-opacity="0.6"/></svg>2017</span>
                        <span class="caption display_flex align_items_center">85.000 km</span>
                        <span class="caption display_flex align_items_center"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="icon/action/calendar_today_24px"><path id="icon/action/ calendar_today_24px_2" fill-rule="evenodd" clip-rule="evenodd" d="M19 3H20C21.1 3 22 3.9 22 5V21C22 22.1 21.1 23 20 23H4C2.9 23 2 22.1 2 21V5C2 3.9 2.9 3 4 3H5V2C5 1.45 5.45 1 6 1C6.55 1 7 1.45 7 2V3H17V2C17 1.45 17.45 1 18 1C18.55 1 19 1.45 19 2V3ZM5 21H19C19.55 21 20 20.55 20 20V8H4V20C4 20.55 4.45 21 5 21Z" fill="#1E1E1E" fill-opacity="0.6"/></g></svg> Auto</span>
                    </div>
                    <div class="price display_flex align_items_center justify_content_space_between">
                        <h6>R$ 80.900</h6>                    
                        <a class="more-info placeholder display_flex align_items_center" href="./car.php">Ver Mais <img src="./images/arrow.svg" alt=""></a>
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