<?php include "layout/header.php"; ?>

<div class="slider_home"></div>

<div class="content_card_vuelos">
    <div class="tipo-container">
        <div class="tipo">
            <div >
                <label class="radio-container bold" >
                    <input type="radio" name="radio-group" class="custom-radio" checked value="rango" onclick="setBold(this);">
                    <span class="radio-text"></span>
                    <p>Ida y vuelta</p>
                </label>
            </div>
            
            <div>
                <label class="radio-container" style="margin-left:10px;">
                    <input type="radio" name="radio-group" class="custom-radio" value="normal" onclick="setBold(this);">
                    <span class="radio-text"></span>
                    <p>Solo ida</p>
                </label>
            </div>
        </div>
        </div>
    <div class="card_vuelo"> 

        <div class="buscador">
            <div class="destinos">
                <div class="desde" onclick="desde();">
                    <p id="origen1">Origen</p>
                    <h4 id="desde">Desde</h4>
                    
                </div>
                <img src="media/flechas.png" alt="">
                <div class="hasta">
                    <p id="origen2">Destino</p>
                    <h4 id="hacia">Hacia</h4>
                    
                </div>
            </div>
            <div class="destinos">
                <div class="fecha desde">
                    <p id="fecha" onclick="fecha();">Fechas de viaje</p>
                </div>

                <div class="fecha">
                    <p>1 Adulto</p>
                </div>
            </div>
        </div>

       <br>

        <button type="button" class="buscarv" onclick="buscarVuelos();">Buscar</button>

        

        
    </div>

    
<!-- INICIO NOTICIAS  -->
                      
                      
                    <div class="noticias">


                        <div class="noticia1">
                            <div class="cancunImg">

                                <img src="./media/doblemillas.jpg" alt="">
                            </div>
                            <div class="textoNoticia">
                                <h1 style="line-height: 1;"><small>¡Estamos</small><br>viendo doble!</h1>

                                <p style="margin-top: 5px;">Reserva tu viaje y vuela hasta noviembre de 2024</p>
                                <br>
                                <p>Por trayecto desde</p>
                                <span style="font-size: 40px; line-height: 1.2;"">COP 49.900</span>
<br>
                                <a class=" cancun-btn" href="./index.php">
                                    Reserva ya
                                    </a>

                                    <br>
                                    <br>
                                    <br>


                            </div>

                        </div>
                    </div>
                    <br><br>
                    <!-- FIN NOTICIAS -->
<br><br>
<div class="sec2">
    <p class="title">Te contamos lo que pasa <br> en avianca.com</p>
    <p>Disfruta nuevos productos y servicios.</p>
    <img src="media/a_icon_banner.jpg" alt="serv">
    <img src="media/visita-nuestro-centro-de-ayuda-pregunta.jpg" alt="" class="serv">
    <img src="media/l-vuelos-baratos-avianca-a-pereira-colombia-plaza-de-bolivar.jpg" alt="" class="serv">
</div>





<br><br>

<div class="modal modal-container" id="modalDesde">
    <div class="content-modal">
        <div class="header">
            <p>¿Cúal es tu origen?</p>
            <button type="button" onclick="closeDesde();"></button>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Desde">
        </div>
        <div class="airportList" id="airportList"></div>
    </div>
</div>

<div class="modal modal-container" id="modalHasta">
    <div class="content-modal">
        <div class="header">
            <p>¿Cúal es tu destino?</p>
            <button type="button" onclick="closeHasta();"></button>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput2" placeholder="Hacia">
        </div>
        <div class="airportList" id="airportList2"></div>
    </div>
</div>

<div class="modal modal-container" id="modalC1">
    <div class="content-modal">
        <div class="header">
            <p>Fecha de salida y vuelta:</p>
            <button type="button" onclick="closeModalC1();"></button>
        </div>

        <div class="calendar_">
            <div id="calendario-container"></div>
        </div>
    </div>
</div>

<div class="modal modal-container" id="modalC2">
    <div class="content-modal">
        <div class="header">
            <p>Fecha de salida:</p>
            <button type="button" onclick="closeModalC2();"></button>
        </div>

        <div class="calendar_">
            <div id="calendario-container-2"></div>
        </div>
    </div>
</div>



<?php include "layout/footer.php"; ?>
