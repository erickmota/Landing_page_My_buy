<html>

<head>

    <title>My Buy - Lista de compras</title>
    <meta name="description" content="Crie e compartilhe listas de compras com facilidade. Acompanhe os produtos, organize suas compras e muito mais." />

    <!-- Marcador Estruturado -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "MobileApplication",
        "name": "My Buy - Lista de compras",
        "description": "Crie e compartilhe listas de compras com facilidade. Acompanhe os produtos, organize suas compras e muito mais.",
        "applicationCategory": "http://schema.org/SoftwareApplication",
        "operatingSystem": "ANDROID",
        "url": "https://erickmota.com/mybuy/",
        "author": {
            "@type": "Person",
            "name": "Erick Mota"
        },
        "offers": {
            "@type": "Offer",
            "url": "https://erickmota.com/mybuy/",
            "price": "0.00",
            "priceCurrency": "BRL",
            "itemCondition": "http://schema.org/NewCondition",
            "availability": "http://schema.org/PreOrder",
            "name": "My Buy - Lista de compras",
            "description": "Aplicativo em desenvolvimento, disponível em breve."
        }
        }
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

    <!-- Typed.js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <link rel="stylesheet" href="css/index.css">

</head>

<body>

    <div class="container-fluid">

        <header class="row" id="pg_home">

            <div class="col-5 text-center d-none d-xl-block">

                <img src="img/handfone2.png" id="foto_mao" class="img_mao img-fluid d-none d-xxl-block" alt="Mão segurando um celular com o app MyBuy"/>
                <img src="img/handfone2.png" id="foto_mao" style="left: -250;" class="img_mao img-fluid d-block d-xxl-none" alt="Mão segurando um celular com o app MyBuy"/>

            </div>

            <div class="col-12 col-xl-7">

                <div class="row area_textos animate__animated animate__fadeInUp">

                    <h1 class="text-start fs-3 text-white fw-semibold">

                        My Buy - Listas de compras
    
                    </h1>
    
                    <p class="text_my_buy text-start lh-1 text-white fs-1 fw-bold">
    
                        Em breve, você vai descobrir um novo jeito de montar suas listas!
    
                    </p>
    
                    <p class="text-start fs-3 text-white fw-light">
    
                        CRIE / COMPARTILHE / ACOMPANHE
    
                    </p>

                </div>

                <div class="row">

                    <img src="img/btnG.png" class="btnG" alt="Botão google play"/>

                </div>

            </div>

        </header>

        <section class="row" id="pg_informacoes2">

            <div id="area_atributos" class="col-12 col-xl-7">

                <div id="title_tags" class="row ps-md-5">

                    <h2 class="titulo_lista fs-1 fw-normal">Organização na ponta dos dedos!</h2>

                </div>

                <div id="tag_1" class="row mt-5 justify-content-end">

                    <div class="col-2">

                        <div id="fundo_icon" class="ms-md-4 ms-xxl-5">

                            <svg fill="white" class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>image-auto-adjust</title><path d="M19 10V19H5V5H14V3H5C3.92 3 3 3.9 3 5V19C3 20.1 3.92 21 5 21H19C20.12 21 21 20.1 21 19V10H19M17 10L17.94 7.94L20 7L17.94 6.06L17 4L16.06 6.06L14 7L16.06 7.94L17 10M13.25 10.75L12 8L10.75 10.75L8 12L10.75 13.25L12 16L13.25 13.25L16 12L13.25 10.75Z" /></svg>

                        </div>

                    </div>

                    <div class="col-9 ms-4 ms-sm-1 lh-2">

                        <h3 class="fs-4 text-secondary fw-normal">Adicione itens com imagens</h3>
                        <span class="fw-normal text-body-tertiary">No My Buy, existe uma base de dados replata de produtos, todos com imagens.</span>

                    </div>

                </div>

                <div id="tag_2" class="row mt-5 justify-content-end">

                    <div class="col-2">

                        <div id="fundo_icon" class="ms-md-4 ms-xxl-5">

                            <svg fill="white" class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>currency-usd</title><path d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z" /></svg>

                        </div>

                    </div>

                    <div class="col-9 ms-4 ms-sm-1 lh-2">

                        <h3 class="fs-4 text-secondary fw-normal">Saiba o valor do carrinho, em tempo real</h3>
                        <span class="fw-normal text-body-tertiary">Você não terá surpresas quando registrar sua compra no caixa!</span>

                    </div>

                </div>

                <div id="tag_3" class="row mt-5 justify-content-end">

                    <div class="col-2">

                        <div id="fundo_icon" class="ms-md-4 ms-xxl-5">

                            <svg fill="white" class="icons icon_person" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-group</title><path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" /></svg>

                        </div>

                    </div>

                    <div class="col-9 ms-4 ms-sm-1 lh-2">

                        <h3 class="fs-4 text-secondary fw-normal">Compartilhe as listas com toda família</h3>
                        <span class="fw-normal text-body-tertiary">Nosso aplicativo, oferece um sistema de compartilhamento real, e você pode compartilhar listas com toda a família.</span>

                    </div>

                </div>

                <div id="tag_4" class="row mt-5 justify-content-end">

                    <div class="col-2">

                        <div id="fundo_icon" class="ms-md-4 ms-xxl-5">

                            <svg fill="white" class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>file-find</title><path d="M9,13A3,3 0 0,0 12,16A3,3 0 0,0 15,13A3,3 0 0,0 12,10A3,3 0 0,0 9,13M20,19.59V8L14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18C18.45,22 18.85,21.85 19.19,21.6L14.76,17.17C13.96,17.69 13,18 12,18A5,5 0 0,1 7,13A5,5 0 0,1 12,8A5,5 0 0,1 17,13C17,14 16.69,14.96 16.17,15.75L20,19.59Z" /></svg>

                        </div>

                    </div>

                    <div class="col-9 ms-4 ms-sm-1 lh-2">

                        <h3 class="fs-4 text-secondary fw-normal">Monitore suas despesas</h3>
                        <span class="fw-normal text-body-tertiary">Tenha o controle total dos seus gastos mensais no mercado.</span>

                    </div>

                </div>

                <div id="tag_5" class="row mt-5 justify-content-end">

                    <div class="col-2">

                        <div id="fundo_icon" class="ms-md-4 ms-xxl-5">

                            <svg fill="white" class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>compare-horizontal</title><path d="M9 14H2V16H9V19L13 15L9 11V14M15 13V10H22V8H15V5L11 9L15 13Z" /></svg>

                        </div>

                    </div>

                    <div class="col-9 ms-4 ms-sm-1 lh-2">

                        <h3 class="fs-4 text-secondary fw-normal">Compare preços</h3>
                        <span class="fw-normal text-body-tertiary">Não compre no lugar errado! Com o comparador de preços, você economiza.</span>

                    </div>

                </div>
                
            </div>

            <div id="area_man" class="col-5 d-none d-xl-block">

                <!-- ***** -->
                
            </div>

        </section>

        <section class="row text-center justify-content-center bg-dark" id="pg_informacoes">

            <div class="col-11 col-xl-5">

                <div id="box_share" class="row p-5 text-start">

                    <h2 class="titulo_lista fs-4 fw-normal">Acesso beta</h2>

                    <p class="text-secondary mt-2 fst-italic">

                        Atualmente já temos 75% do aplicativo pronto, e você pode fazer parte do lançamento.
                        Deixe seu e-mail abaixo e participe da versão beta. Te avisaremos assim que o acesso for liberado ;)

                    </p>

                    <p class="titulo_lista fs-4 mt-4">Vamos lá?</p>

                    <form method="post" action="php/recuperacao.php">

                        <div class="mb-3">

                            <label for="exampleFormControlInput1" class="form-label">Seu e-mail:</label>
                            <input required type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@gmail.com" name="email">

                        </div>

                        <div class="col-auto">

                            <button type="submit" class="btn text-white">Cadastrar meu e-mail</button>

                        </div>

                    </form>

                </div>

            </div>

            <div class="col-11 col-xl-5 text-center text-xl-end mt-5 mt-xl-0 mb-5">

                <img class="foto_dois_app" src="img/dois_app3.png" alt="Aplicativo My Buy - Lista de compras">

            </div>

        </section>

        <footer id="rodape" class="row d-flex align-content-center">

            <div class="col-12 text-center mt-2 p-1">

                <p>

                    <!-- Logotipo em SVG -->
                <svg onclick="window.open('http://erickmota.com', '_blank');" version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1257 223" style="enable-background:new 0 0 1257 223;" xml:space="preserve">
              <style type="text/css">
                @font-face{
                  font-family: Eras;
                
                  /*Caso a fonte esteja na mesma pasta*/
                  src: url("fontes/eras-bold-itc.ttf");
                }
                .st0{font-family:'Eras';}
                .st1{font-size:200px; fill: #333;}
                .st2{fill:#4f98f9;}
                .st3{font-size:249px;}
              </style>
              <text transform="matrix(1 0 0 1 -9.6665 166.3335)"><tspan x="0" y="0" class="st0 st1">Ericl</tspan><tspan x="443.26" y="0" class="st2 st0 st1 b1">&lt;</tspan><tspan x="542.77" y="0" class="st0 st1">M</tspan><tspan x="726.95" y="0" class="st0 st1">ota</tspan><tspan x="1062.99" y="0" class="st2 st0 st3 b1">/</tspan><tspan x="1174.13" y="0" class="st2 st0 st1 b1">&gt;</tspan></text>
              </svg>

                </p>

            </div>

        </footer>

        <script>

            function animateOnLoad() {
                gsap.to('#foto_mao', { opacity: 1, y: 0, duration: 1.5 });
            }

            // Inicializar o controlador do ScrollMagic
            var controller = new ScrollMagic.Controller();
    
            // Cena segunda página
            var scene = new ScrollMagic.Scene({
                triggerElement: '#pg_informacoes2', // Elemento que aciona a animação
                triggerHook: 0.9, // A animação começa quando 90% da div está na tela
                offset: -300,
                reverse: true // Não reverter a animação quando sair da tela
            })
            .on('enter', function () {
            // Quando a cena é ativada, anime a div para aparecer
            gsap.to('#foto_mao', { opacity: 0, x: -700, duration: 1 });
            })
            .on('leave', function () {
                // Quando a cena é desativada, anime a div para desaparecer
                gsap.to('#foto_mao', { opacity: 1, x: 0, duration: 1 });
            })
            .addTo(controller); // Adiciona a cena ao controlador

            // Cena segunda página
            var scene = new ScrollMagic.Scene({
                triggerElement: '#pg_informacoes2', // Elemento que aciona a animação
                triggerHook: 0.7, // A animação começa quando 90% da div está na tela
                reverse: true // Não reverter a animação quando sair da tela
            })
            .on('enter', function () {
            // Quando a cena é ativada, anime a div para aparecer
            gsap.to('#area_man', { opacity: 1, duration: 3});
            gsap.to('#title_tags', { opacity: 1, duration: 1});
            gsap.to('#tag_1', { opacity: 1, x: 0, duration: 0.5, delay: 0 });
            gsap.to('#tag_2', { opacity: 1, x: 0, duration: 0.5, delay: 0.2 });
            gsap.to('#tag_3', { opacity: 1, x: 0, duration: 0.5, delay: 0.4 });
            gsap.to('#tag_4', { opacity: 1, x: 0, duration: 0.5, delay: 0.6 });
            gsap.to('#tag_5', { opacity: 1, x: 0, duration: 0.5, delay: 0.8 });
            })
            .on('leave', function () {
                // Quando a cena é desativada, anime a div para desaparecer
                gsap.to('#area_man', { opacity: 0, duration: 1});
                gsap.to('#title_tags', { opacity: 0, duration: 1});
                gsap.to('#tag_1', { opacity: 0, x: -500, duration: 0.4, delay: 0 });
                gsap.to('#tag_2', { opacity: 0, x: -500, duration: 0.4, delay: 0.1 });
                gsap.to('#tag_3', { opacity: 0, x: -500, duration: 0.4, delay: 0.2 });
                gsap.to('#tag_4', { opacity: 0, x: -500, duration: 0.4, delay: 0.3 });
                gsap.to('#tag_5', { opacity: 0, x: -500, duration: 0.4, delay: 0.4 });
            })
            .addTo(controller); // Adiciona a cena ao controlador

            // Cena terceira página
            var scene = new ScrollMagic.Scene({
                triggerElement: '#pg_informacoes', // Elemento que aciona a animação
                triggerHook: 0.5, // A animação começa quando 90% da div está na tela
                reverse: true // Não reverter a animação quando sair da tela
            })
            .on('enter', function () {
            // Quando a cena é ativada, anime a div para aparecer
            gsap.to('.foto_dois_app', { opacity: 1, y: 0, duration: 1.5});
            })
            .on('leave', function () {
                // Quando a cena é desativada, anime a div para desaparecer
                gsap.to('.foto_dois_app', { opacity: 1, y: 700, duration: 1});
            })
            .addTo(controller); // Adiciona a cena ao controlador

            window.onload = function() {
            animateOnLoad();
            };

            document.addEventListener("DOMContentLoaded", function() {
                            
                mostraAtribrutos()
                        
            });

            function mostraAtribrutos(){

                var typed = new Typed('.texto_atributos', {

                    strings: ["Crie", "Compartilhe", "Acompanhe"],
                    typeSpeed: 30,
                    backSpeed: 15,
                    backDelay: 2000,
                    cursorChar: "",
                    loop: true,

                });

            }

        </script>

    </div>

</body>

</html>