@extends('plantilla')

@section('seccion')
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

                @import url('https://fonts.googleapis.com/css2?family=Finlandica:wght@500&family=Manrope&family=Orbitron:wght@500;700&display=swap');


               * {
                  box-sizing: border-box;
                  margin: 0;
                  padding: 0;
                    }

                

                 .title{
                   font-family: 'Orbitron', sans-serif !important;
                   text-align: left;
                   font-weight: 600;
                 }   

                 .line-2{
                    color: #ff4e45;
                 }

                 .description{
                    text-align: left;
                    font-weight: 600;
                 }

                 .widget {
                  margin: 2em;
                  width: 20%;
                  }

                    .widget p {
                      display: inline-block;
                      line-height: 1rem;
                        }

                .fecha {
                    background-color: rgba(0, 0, 0, 0.5);
                    font-family: 'Oswald', sans-serif;
                    font-size: 1.2rem;
                    margin-bottom: 5px;
                    padding: 20px;
                    text-align: center;
                    width: 350px;
                    height: 62px;
                    margin-top: -52px;
                    margin-left: -65px;
                    color: white;
                    }

                    .reloj {
                       font-family: 'Oswald', sans-serif;
                       font-size: 2rem;
                       padding: 0px;
                       text-align: center;
                      width: 400px;
                      height: 200px;
                      color: white;
                     }
                     .reloj2 {
                       background-color: rgba(0, 0, 0, 0.5);
                       font-family: 'Orbitron', sans-serif;
                       font-size: 2rem;
                       padding: 20px;
                       text-align: center;
                      width: 350px;
                      height: 100px;
                      position: absolute;
                      margin-left: -65px;
                      margin-right: auto;
                     }

                    .reloj .caja-segundos {
                      display: inline-block;
                    }

                    .reloj .segundos, .reloj .ampm {
                        display: block;
                         font-size: 1.4rem;
                    }

                    .graphic{
                        position: relative;
                        display: grid;
                    }

                    .laravel-img{
                        width: 350px;
                        height: 320px;
                    }

                    .form-container{
                        height: 2.5rem;
                    }

                    form{
                       margin-left: 40px;
                    }

                    .input{
                        line-height: 2.1rem;
                        width: 17rem;
                        background: none;
                        border: 2px solid #ff4e45;
                        padding: 0.2rem 0.5rem; 
                        border-radius: .25rem 0 0 .25rem;
                        text-align: center;
                        margin-top: -15px;
                    }

                    .input::placeholder{
                        font-weight: 600;
                    }

                    .button {
                        padding: 0.6rem 1rem;
                        border-radius: 0 .25rem .25rem 0;
                        border: none;
                        background: #ff4e45;
                        color: white;
                    }

                    .mensaje{
                        font-style: .7rem;
                        margin-top: 5px;
                        margin-bottom: 2rem;
                        margin-left: 15px;
                    }

            
                 @media screen and (max-width: 1024px) {
                     .title, .description{
                        text-align: center;
                     }

                     .reloj{
                        margin-left: auto;
                        margin-right: auto;
                     }
                 }

                 @media screen and (max-width: 1024px) {
                    .laravel-img{
                        width: 320px;
                        height: 300px;
                    }


                    .button {
                        width: 17rem;
                    }
                 }

            </style> 
    <section class="row">
                   
        <div class="grid-container col-md-7">
            <!--TITULO -->
            <div class="content">
                <h1 class="title">
                    <span class="line-1 s-center">Domina la tecnoligía</span>
                    <br>
                    <span class="line-2 s-center">con Laravel</span>
                </h1>
            </div>
            <!--DESCRIPCIÓN-->
            <p class="description">
                 Laravel es una herramienta de código abierto para desarrolladores con una curva de aprendizaje mucho más sencilla que otras herramientas de desarrollo web y aplicaciones. El uso de Laravel hace que las aplicaciones web sean seguras, ya que no permite que ningún malware o amenaza de seguridad ingrese a las aplicaciones. Eso también significa que su código de desarrollo web está seguro y protegido.
            </p>
                 <div class="reloj">
                <div class="widget">
                      <div class="fecha">
                           <p id="diaSemana" class="diaSemana"></p>

                           <p id="dia" class="dia"></p>

                                 <p>
                                   de 
                                 </p>

                             <p id="mes" class="mes"></p>

                             <p>
                               del 
                             </p>

                            <p id="year" class="year"> </p>
                     </div>

                     <div class="reloj2">
                             <p id="horas" class="horas"></p>

                          <p>
                               :
                         </p>

                         <p id="minutos" class="minutos"></p>

                         <p>
                             :
                         </p>

                     <div class="caja-segundos">
                          <p id="ampm" class="ampm"></p>
                          <p id="segundos" class="segundos"></p>
                    </div>
             </div>
              </div>
               </div>

            </div> 
            <div class="graphic col-md-5">
                <img class="laravel-img" src="https://cdn.cdnlogo.com/logos/l/57/laravel.svg">
                <div class="form-container">
                    <form class="form">
                        <input type="email" name="email" class="input" placeholder="Ingresa tu correo electrónico">
                        <button type="submit" class="button">Suscribete</button>
                        <p class="mensaje">Suscribete para acceder a los cursos de laravel</p>
                    </form>
                </div>
            </div>
        
        <script>
            (function() {

             let actualizarHora = function() {
        let fecha = new Date(),     
                horas = fecha.getHours(),
                ampm,
                minutos = fecha.getMinutes(),
                segundos = fecha.getSeconds(),
                diaSemana = fecha.getDay(),
                dia = fecha.getDate(),
                mes = fecha.getMonth(),
                year = fecha.getFullYear();
    
                let pSegundos = document.getElementById('segundos'),
                        pMinutos = document.getElementById('minutos'),
                        pHoras = document.getElementById('horas'),
                        pDia = document.getElementById('dia'),
                        pDiaSemana = document.getElementById('diaSemana'),
                        pMes = document.getElementById('mes'),
                        pYear = document.getElementById('year'),
                        pAMPM = document.getElementById('ampm');

                let semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
                
                pDiaSemana.textContent = semana[diaSemana];
                pDia.textContent = dia;

                let meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

                pMes.textContent = meses[mes];
                pYear.textContent = year;

                if (horas >= 12) {
                    horas = horas - 12;
                    ampm ='PM';
                } else {
                    ampm = 'Am';
                }

                if (horas == 0) {
                    horas = 12;
                }

                pHoras.textContent = horas;
                pAMPM.textContent = ampm;


                if (minutos < 10) {
                    minutos = '0' + minutos;
                }

                if (segundos < 10) {
                    segundos = '0' + segundos;
                }

                pMinutos.textContent = minutos;
                pSegundos.textContent = segundos;
             };

            actualizarHora();
            let intervalo = setInterval(actualizarHora, 1000);


           }());
        </script>
    </section>
@endsection