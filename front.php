<?php 
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['NombreUsuario'])) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="widht=device-width, initial-scale=1.0">
<title>Tienda Virtual</title>
</head>

<!---Puerta-->
    <link rel="stylesheet" type="text/css" href="css/Design.css"/>
    <!-----Slider-->
    <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
    <!---carrito---------->
    <script src="JS/carrito.js"></script>
    <!----JQuery----------------------------------------------------------->
    <script src="JS/JQuery.js"></script>
    <!-----light-slider-js------>
    <script src="JS/lightslider.js"></script>
    <!----icono-->
    <link rel="shortcut icon" href="images/W.png"/>
    <!--Cdn-de-FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <nav>
            <div class="social-call">
                <!--link-de-redes-->
                <div class="social">
                    <a href="https://www.facebook.com/wilson.saavedra.927"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/w.i.s.o.n/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/BlackShadoww13"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCDuuZmj206EDkwy1sUKJ7Zw"><i class="fa-brands fa-youtube"></i></a>
                    <a href="+573113033872"><i class="fa-solid fa-phone"></i>
                </div>
                <!---contacto-->
                <div class="phone"></div>
                <span>+57 311-3033872</span>
            </div>
    <!---menu----------------------------------------------------------->
    <div class="navigation">
        <!--------logo---------------->
        <a href="#" class="logo">
            <img src="images/Captura de pantalla 2023-06-09 065020.jpg" width="280" height="280" />
        </a>
        <!-----menu-icon--------->
        <div class="toggle"></div>
        <!----menu-->
        <ul class="menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Hombre</a>
            <!--etiqueta-de-venta--->
            <span class="etiqueta-venta">Venta</span>
        </li>
            <li><a href="#">Mujer</a></li>
            <li><a href="#">Niños</a></li>
            <li><a href="#">Tienda</a></li>
        </ul>
        <!---right-menu-->
        <idv class="menu-derecha">
            <!--------Busqueda-->
            <a href="javascript:void(0);" class="search">
                <i class="fas fa-search"></i>
            </a>
           <!-----carrito-->
            <a href="#">
                
                <i class="fas fa-shopping-cart">

                <!---cantidad-de-productos-->
                <span class="cantidad-productos">0</span>
                </i>
            </a>
            <a href="Login/CerrarSesion.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </idv>
    </div>
        </nav>
    <!-----Barra-Buscador-------------------------------------------------->
    <div class="search-bar">
        <!----Barra-buscador-->
        <div class="search-input">
            <!---barra-->
            <input type="text" placeholder="Busca el poducto"/>
            <a href="javascript:void(0);" class="cancelar-buscador">
            <i class="fas fa-times"></i>
        </a>
        </div>
    </div>
<!---Slider full-->
<ul id="adaptive" class="cs-hidden">
    <!----box--1--------------->
    <li class="item-a">
        <div class="full-slider-box f-slide-1">
            <!----texto-del-slider-->
            <div class="slider-text-container">
    
                    <div class="f-slider-text">
                      <span>Oferta Limitada</span>
                      <strong>30% de descuento <br/>con <font>codigo de promo</font></strong>
                      <a href="#" class="f-slider-btn">Compra AHORA</a>
                    </div>
    
            </div>
        </div>
    </li>
        <!----box--3------------>
        <li class="item-a">
            <div class="full-slider-box f-slide-2">
                <!----texto-del-slider-->
                <div class="slider-text-container">
        
                        <div class="f-slider-text">
                          <span>Oferta Limitada</span>
                          <strong>30% de descuento <br/>con <font>codigo de promo</font></strong>
                          <a href="#" class="f-slider-btn">Compra AHORA</a>
                        </div>
        
                </div>
            </div>
        </li>
        <!--------Box-3---------->
    <li class="item-a">
        <div class="full-slider-box f-slide-3">
            <!----texto-del-slider-->
            <div class="slider-text-container">
    
                    <div class="f-slider-text">
                      <span>Oferta Limitada</span>
                      <strong>30% de descuento <br/>con <font>codigo de promo</font></strong>
                      <a href="#" class="f-slider-btn">Compra AHORA</a>
                    </div>
    
            </div>
        </div>
    </li>
 
  </ul>
<!-------Menu-de-secciones------------------------------------>
<div class="feature-heading">
    <h2>Categorias Destacadas</h2>
</div>
<ul id="autoWidth" class="cs-hidden">
<!-----------1------------------------------->
    <li class="item">
        <!-----caja----->
<div class="feature-box">
    <a href="#">
        <img src="images/feature_1.jpg"/>
    </a>
</div>
<!---------text---------------------------->
<span>Camiseta Estampado</span>
    </li>
<!-----------2------------------------------->
<li class="item">
    <!-----caja----->
<div class="feature-box">
<a href="#">
    <img src="images/feature_2.jpg"/>
</a>
</div>
<!---------text---------------------------->
<span>Camiseta de mujer</span>
</li>
<!-----------3------------------------------->
<li class="item">
    <!-----caja----->
<div class="feature-box">
<a href="#">
    <img src="images/feature_3.jpg"/>
</a>
</div>
<!---------text---------------------------->
<span>Camiseta de niño</span>
</li>
<!-----------4------------------------------->
<li class="item">
    <!-----caja----->
<div class="feature-box">
<a href="#">
    <img src="images/feature_4.jpg"/>
</a>
</div>
<!---------text---------------------------->
<span>Almohada Acolchada</span>
</li>
<!-----------5------------------------------->
<li class="item">
    <!-----caja----->
<div class="feature-box">
<a href="#">
    <img src="images/feature_5.jpg"/>
</a>
</div>
<!---------text---------------------------->
<span>Funda Militar</span>
</li>
<!-----------6------------------------------->
<li class="item">
    <!-----caja----->
<div class="feature-box">
<a href="#">
    <img src="images/feature_6.jpg"/>
</a>
</div>
<!---------text---------------------------->
<span>Bolso de mano</span>
</li>
</ul>



    <!-----NuevaLLegada-->
    <section class="new-arrival">
        <!-----encabezado-->
        <div class="arrival-heading">
            <strong>Articulo Nuevo</strong>
            <p>Te Proveemos de Nuevos Productos a la Moda</p>
        </div>
        <!----contenedor-de-producto-->
        <div class="product-container">
            <!----caja-de-producto-1-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Camiseta', '$20.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/p-1.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Camiseta</a>
                    <span class="p-price">$20.000</span>
                    
                </div>
                <button class="remove-cart" onclick="removeFromCart('Camiseta')">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <!----caja-de-producto-2-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Camisa de Vestir', '$160.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/p-2.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Camisa de Vestir</a>
                    <span class="p-price">$160.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Camisa de Vestir')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-3-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Camisa Casual', '$20.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/p-3.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Camisa Casual</a>
                    <span class="p-price">$20.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Camisa Casual')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-4-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('iphone 13', '$4.300.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/iphone-13-pro-max-plata-1-1-1-768x768.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">iphone 13</a>
                    <span class="p-price">$4.300.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('iphone 13')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-5-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Chaqueta Acolchada', '$177.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/p-5.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Chaqueta Acolchada</a>
                    <span class="p-price">$177.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Chaqueta')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-6-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Chaqueta', '$250.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/p-6.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Chaqueta</a>
                    <span class="p-price">$250.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Chaqueta')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-7-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart"  onclick="addToCart('Hoover Chaqueta', '$300.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/p-7.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Hoover Chaqueta</a>
                    <span class="p-price">$300.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Hoover Chaqueta')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-8-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Gabardina','$350.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/p-8.png"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Gabardina</a>
                    <span class="p-price">$350.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Gabardina')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>

    </section>

    <!----venta---------------->
    <section class="sale">
        <!---------Box-1----------------------->
        <div class="sale-box">
            <img src="images/sale-1.jpg"/>
            <a href="#">
                <div class="sale-text">
                    <strong>Bolso con Estampado amarillo</strong>
                    <span>Oferta del 25%</span>
                </div>
            </a>
        </div>
        <!---------Box-2----------------------->
                <div class="sale-box">
                    <img src="images/sale-2.jpg"/>
                    <a href="#">
                        <div class="sale-text">
                            <strong>Descansa con Estilo</strong>
                            <span>Oferta del 25%</span>
                        </div>
                    </a>
                </div>
        <!---------Box-3----------------------->
        <div class="sale-box">
            <img src="images/sale-3.jpg"/>
            <a href="#">
                <div class="sale-text">
                    <strong>Fiesta Nocturna</strong>
                    <span>Oferta del 25%</span>
                </div>
            </a>
        </div>
    </section>


    <section class="new-arrival">
        <!-----encabezado-->
        <div class="arrival-heading">
            <strong>Elemento Destacado</strong>
            <p>Te Proveemos de Nuevos Productos a la Moda</p>
        </div>
        <!----contenedor-de-producto-->
        <div class="product-container">
            <!-- Caja de producto 1 -->
<!-- Caja de producto 1 -->
<div class="product-box">
    <div class="product-img">
        <a href="#" class="add-cart" onclick="addToCart('Camiseta Versace', '$90.000')">
            <i class="fa fa-shopping-cart"></i>
        </a>
        <img src="images/camisa100.jpg" />
    </div>
    <div class="product-details">
        <a href="#" class="p-name">Camiseta Versace</a>
        <span class="p-price">$90.000</span>
    </div>
    <button class="remove-cart" onclick="removeFromCart('Camiseta Versace')">
        <i class="fa fa-times"></i>
    </button>
</div>


            <!----caja-de-producto-2-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Camisa Versace','$160.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/camiseta200.jpg">
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Camisa Versace</a>
                    <span class="p-price">$160.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Camisa Versace')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-3-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Camisa Versace','$70.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/camiseta300.jpg"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Camisa Versus Versace</a>
                    <span class="p-price">$70.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Camisa Versus Versace')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!----caja-de-producto-4-->
            <div class="product-box">
                <!----imagen-->
                <div class="product-img">
                     <!---añadir-al-carrito------>
                <a href="#" class="add-cart" onclick="addToCart('Camisa Casual Versace','$40.000')">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                    <img src="images/camisa400.jpg"/>
                </div>
                <!--detalles-------------------->
                <div class="product-details">
                    <a href="#" class="p-name">Camisa Casual Versace</a>
                    <span class="p-price">$40.000</span>
                </div>
                <button class="remove-cart" onclick="removeFromCart('Camisa Casual Versace')">
                    <i class="fa fa-times"></i>
                </button>
            </div>
</div>
</section>

    <!---banner---------------------------->
    <div class="banner-box f-slide-4">
        <!----texto-del-slider-->
        <div class="banner-text-container">

                <div class="banner-text">
                  <span>Oferta Limitada</span>
                  <strong>80% de descuento <br/>Solo los <font>Black Friday</font></strong>
                  <a href="#" class="banner-btn">Compra AHORA</a>
                </div>

        </div>
    </div>

<!----------------Servicios----------------->
<section class="services">
    <!-----------Caja-1-------------->
    <div class="services-box">
        <i class="fas fa-shipping-fast"></i>
        <span>Envios</span>
        <p>Envios a domicilios</p>
    </div>
    <!-----------Caja-2-------------->
    <div class="services-box">
        <i class="fas fa-headphones-alt"></i>
        <span>Apoyo 24/7</span>
        <p>Ayudamos 24h al dia</p>
    </div>
    <!-----------Caja-3-------------->
    <div class="services-box">
        <i class="fas fa-sync"></i>
        <span>Reembolso del 100%</span>
        <p>Tienes 30 dias para reclamar reembolso</p>
    </div>
</section>

<!-------------footer---------->
<footer>
    <!--------copyright--------------->
    <span class="copyright">
        Copyright 2023-Wilson Company 
    </span>
    <div class="subscribe">
        <form>
            <input type="email" placeholder="Ejemplo@gmail.com" required/>
            <input type="submit" placeholder="Seguir"> 
        </form>
    </div>
</footer>

















<!----codigo-->
    <script type="text/javascript">
    var shoppingCart = [];

    function addToCart(productName, productPrice) {
        event.preventDefault();
        var product = {
            name: productName,
            price: productPrice,
            quantity: 1
        };

        var index = shoppingCart.findIndex(function(item) {
            return item.name === product.name;
        });

        if (index !== -1) {
            shoppingCart[index].quantity++;
        } else {
            shoppingCart.push(product);
        }

        updateCartCounter(); // Actualizar la cantidad de productos en el icono del carrito
        
    }

    function removeFromCart(productName) {
        var index = shoppingCart.findIndex(function(item) {
            return item.name === productName;
        });

        if (index !== -1) {
            shoppingCart.splice(index, 1);
            updateCartCounter(); // Actualizar la cantidad de productos en el icono del carrito
            
        }
    }

    function updateCartCounter() {
        var cartIcon = document.querySelector('#carrito');
        var cartCounter = document.querySelector('.cantidad-productos');
        var totalQuantity = 0;

        for (var i = 0; i < shoppingCart.length; i++) {
            totalQuantity += shoppingCart[i].quantity;
        }

        cartCounter.textContent = totalQuantity;
    }

    /*----Para el buscador-----------------------------*/
    $(document).on('click','.search',function(){
    $('.search-bar').addClass('search-bar-actived')
    });
    $(document).on('click','.cancelar-buscador',function(){
    $('.search-bar').removeClass('search-bar-actived')
    });
    /*----------login-y-sign-up--------------------------*/
    $(document).on('click','.user,.already-acount',function(){
        $('.form').addClass('login-active').removeClass('sign-up-active')
    });

    $(document).on('click','.sign-up-btn',function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
    });

    $(document).on('click','.form-cancel',function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
    });
    /*------------------------full slider script------------------*/
    $(document).ready(function() {
    $('#adaptive').lightSlider({
        adaptiveHeight:true,
        auto:true,
        item:1,
        slideMargin:0,
        loop:true
    });
});
    /*-------Feature-Slider-----------------------------*/
    $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });

  /*---------arreglo-del-menu-cuando-scrollea-------------------*/
  $(window).scroll(function(){
    if($(document).scrollTop() >50){
        $('.navigation').addClass('fix-nav');
    }
    else{
        $('.navigation').removeClass('fix-nav');
    }
  });
  /*--------------para-el-menu-sensible-----------------*/
  $(document).ready(function(){
    $('.toggle').click(function(){
        $('.toggle').toggleClass('active')
        $('.navigation').toggleClass('active')
    })

  })
    </script>

</body>

</html>
<?php  }else {
    
    header('location: ../Index.php');
} ?>