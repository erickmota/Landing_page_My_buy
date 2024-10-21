<html>

<head>

    <title>My Buy - Lista de compras</title>

    <meta charset="UTF-8">

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

        <div class="row" id="pg_home">

            <div class="col-5 text-center d-none d-xl-block">

                <img src="img/handfone2.png" id="foto_mao" class="img_mao img-fluid d-none d-xxl-block"/>
                <img src="img/handfone2.png" id="foto_mao" style="left: -250;" class="img_mao img-fluid d-block d-xxl-none"/>

            </div>

            <div class="col-12 col-xl-7">

                <div class="row area_textos animate__animated animate__fadeInUp">

                    <p class="text-start fs-3 text-white fw-bold">

                        My Buy - Listas de compras
    
                    </p>
    
                    <p class="text_my_buy text-start lh-1 text-white">
    
                        Em breve, você vai descobrir um novo jeito de montar suas listas!
    
                    </p>
    
                    <p class="text-start fs-3 text-white fw-light">
    
                        CRIE / COMPARTILHE / ACOMPANHE
    
                    </p>

                </div>

                <div class="row">

                    <img src="img/btnG.png" class="btnG"/>

                </div>

            </div>

        </div>

        <div class="row d-flex align-items-center" id="pg_informacoes">

            <p class="texto_atributos text-center"></p>

        </div>

        <script>

            function animateOnLoad() {
                gsap.to('#foto_mao', { opacity: 1, y: 0, duration: 1.5 });
            }

            // Inicializar o controlador do ScrollMagic
            var controller = new ScrollMagic.Controller();
    
            // Criar uma cena
            var scene = new ScrollMagic.Scene({
                triggerElement: '#pg_informacoes', // Elemento que aciona a animação
                triggerHook: 0.9, // A animação começa quando 90% da div está na tela
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

            window.onload = function() {
            animateOnLoad();
            };

            document.addEventListener("DOMContentLoaded", function() {
                            
                mostraAtribrutos()
                        
            });

            function mostraAtribrutos(){

                var typed = new Typed('.texto_atributos', {

                    strings: ["Itens com imagens", "Confirmação de quantidade", "Confirmação de preço",
                        "Compartilhamento de listas"
                    ],
                    typeSpeed: 30,
                    backSpeed: 15,
                    backDelay: 1500,
                    loop: true,

                });

            }

        </script>

    </div>

</body>

</html>