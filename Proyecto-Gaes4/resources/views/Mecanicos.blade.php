<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,200,1,200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,1,200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,500,1,200" />
    <title>Mecanicos</title>
    <link rel="stylesheet" href="css/Mecanicos.css">

</head>
<body>
    <div class="container">
        <!--------Esta es toda la interfaz :D---------->
       <aside>

        <!-------- El Logo ---------->
            
            <div class="top">
                <div class="logo">
                    <img src="Imagenes/Please.png" alt="">
                    <h2><span class="danger">PIS</span>TON</h2>
                </div>
                <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>

                </div>
            </div> 

             <!--------Los iconos :D---------->
             <div class="sidebar">
                <a href="Dashboard.html">
                    
                        <span class="material-symbols-rounded">dashboard</span>
                        <h3>Dashboard</h3>
    
                    </a>
    
                    <a href="Index.html" >
                        <span class="material-icons-sharp">people</span>
                        <h3>Clientes</h3>
    
                    </a>
                    
                    <a href="Productos.html">
                        <span class="material-icons-sharp">inventory</span>
                        <h3>Productos y Servicios</h3>
                        <span class="message-count">0</span> 
                         <!-------- El contador de los productos ---------->
                    </a>
                   
                    <a href="Mecanicos.html" class="active">
                        <span class="material-symbols-rounded">plumbing</span>
                        <h3>Mecanicos</h3>
    
                    </a>
                    <a href="ventas.html">
                        <span class="material-symbols-outlined">add_task</span>
                        <h3>Ventas</h3>
    
                    </a>

                    <a href="Historial de ventas y Informes.html">
                        <span class="material-symbols-rounded">history </span>
                        <h3>Historial de ventas y informes</h3>
    
                    </a>
                    <a href="#">
                        <span class="material-symbols-rounded">add </span>
                        <h3>Añadir Modulos</h3>

                    <a href="#">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Salir</h3>
                </a>
            <!--------Fin  Los iconos :D---------->
            </div>
        </aside>

         <!--------Fin de la  interfaz :D---------->
 <!--------=======================================---------->
       <!--------Seccion principal :D---------->
        <!--------Seccion de las tres cuadros :D---------->
      <main>
          <!--------Titulo---------->
          <h1>Mecanicos</h1>
          <!--------Esta seccion obviamente si o si tiene que ser modificable para los demas modulos osease los tres cuadrados del dashboard---------->
         
                <!--------Este es el almanaque osease el calendario---------->
                     <div class="date">
                         <input type="date">
                     </div>
                     <!--------Contenido de los tres cuadrados, iconos, informacion importante---------->
                      <!--------Contenido ventas obtenidas---------->
                     <div class="insights">
                         <div class="sales">
                             <span class="material-symbols-outlined">monetization_on</span>
                               <div class="middle">
                                 <div class="left">
                                 <h3>Ventas totales</h3>
                                 <h1>$2.000.000</h1>
                                 </div> 
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                 <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="38" r="36"> </circle>
                                    </svg>
                                    <div class="number">
                                        <p>81%</p>
                                    </div>
                                  </div>
                                </div>
                                 <!-------- Subtitulo ---------->
                                <small class="text-muted">Ultimas 24 horas</small>
                               </div> 
                                <!--------Fin  Contenido de los tres cuadrados, iconos, informacion importante---------->
          <!--------==================================================================================================================================---------->
                           <!--------Contenido gastos obtenidas---------->
                            <div class="expenses">
                             <span class="material-symbols-outlined">shopping_cart_checkout</span>
                               <div class="middle">
                                 <div class="left">
                                 <h3>Gastos totales</h3>
                                 <h1>$2.000.000</h1>
                                 </div> 
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                 <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="38" r="36"> </circle>
                                    </svg>
                                    <div class="number">
                                        <p>44%</p>
                                    </div>
                                  </div>
                                </div>
                                 <!-------- Subtitulo ---------->
                                <small class="text-muted">Ultimas 24 horas</small>
                               </div> 
           <!--------==================================================================================================================================---------->
                           <!--------Contenido gastos obtenidas---------->
                           <div class="saves">
                            <span class="material-symbols-outlined">savings</span>
                              <div class="middle">
                                <div class="left">
                                <h3>Ingreso totales</h3>
                                <h1>$2.000.000</h1>
                                </div> 
                                 <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                <div class="progress">
                                   <svg>
                                       <circle cx="38" cy="38" r="36"> </circle>
                                   </svg>
                                   <div class="number">
                                       <p>74%</p>
                                   </div>
                                 </div>
                               </div>
                        <!-------- Subtitulo ---------->

                               <small class="text-muted">Ultimas 24 horas</small>
                              </div> 

                         </div>
                    <!--------Fin de la Seccion de las tres cuadros :D---------->      
   
        <!--------Informacion Cliente vehiculo la tabla :D---------->      
              
        <div class="recent-order">
            <h2>Informacion general de los Mecanicos</h2>
            <table>
                 <!-------- Tablas ---------->
                <thead>
                    <tr>
                        <th>Nombre Mecanico</th>
                        <th>Telefono</th>
                        <th>Especialidad</th>
                        <th>Servicio solicitado</th>
                        <th>Valor Serv</th>
                        <th>Sueldo cobrar</th>
                        <th>Estatus</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Paquito el Barrio</td>
                        <td>30497777</td>
                        <td>Alineacion</td>
                        <td>Cambio de Aceite</td>
                        <td>10.9M</td>
                        <td>7 M</td>
                        <td class="warning">No disponible</td>
                        <td><button class="btn-editar">Editar</button></td>
                        <td class="primary" ><a href="#">Mas detalles</a></td>
                        
                    </tr>

                    <tr>
                        <td>Paquito el Barrio</td>
                        <td>30497777</td>
                        <td>Alineacion</td>
                        <td>Cambio de Aceite</td>
                        <td>10.9M</td>
                        <td>7 M</td>
                        <td class="success"> Disponible</td>
                        <td><button class="btn-editar">Editar</button></td>
                        <td class="primary" ><a href="#">Mas detalles</a></td>
                        
                    </tr>
                     
                   
                     <!-------- Fin tablas ---------->
                </tbody>
             <!-------- Subtitulo ---------->
            </table>
            <a href="#">Muestrame mas</a>
        </div>
                     
         </main>
             <!-------- Fin de la seccion principal :D ---------->
        <!--------  Interfaz del Administrador :D   ---------->
      <div class="right">
         <!--------  La clase top  :D ---------->
        <div class="top">
            <button id="menu-btn">
                <span class="material-symbols-rounded">list</span>
            </button>
            <div class="theme-toggler">
                <span class="material-symbols-rounded active">brightness_6</span>
                <span class="material-symbols-rounded">dark_mode</span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Hola,<b> Abril</b></p>
                    <small class="text-muted">Admin</small>
                </div>
            <div class="profile-photo">
                <img src="Imagenes/descarga.jpg">
            </div>
            </div>
        </div>
       <!-------- Fin de la clase top  :D ---------->
       <!-------- Cuadro de la Derecha :D ---------->
       <div class="recent-updates">
        <h2><center> Detalles del Mecanico</center></h2>
        <div class="updates">
            <div>
                <table>
                    <!-------- Tablas ---------->
                   <thead>
                       <tr>
                           <th>Nombre Mecanico</th>
                           <th>Telefono</th>
                           <th>Especialidad</th>
                           <th>Servicio solicitado</th>
                          
                           
                       </tr>
                   </thead>
                   <tbody>
                    <tr>
                        <td>Paquito el Barrio</td>
                        <td>30497777</td>
                        <td>Alineacion</td>
                        <td>Cambio de Aceite</td>
                       
                        
                    </tr>
                   <thead>
                    <tr>
                        <th>Nombre Mecanico</th>
                        <th>Telefono</th>
                        <th>Especialidad</th>
                        <th>Servicio solicitado</th>
                       
                        
                    </tr>
                </thead>
                   <tbody>
                       <tr>
                           <td>Paquito el Barrio</td>
                           <td>30497777</td>
                           <td>Alineacion</td>
                           <td>Cambio de Aceite</td>
                           
                       </tr>
   
                      
                        
                      
                        <!-------- Fin tablas ---------->
                   </tbody>
                <!-------- Subtitulo ---------->
               </table>
        </div>

       </div>
<!-------- Fin Cuadro de la Derecha :D ---------->
<!--------  Cuadro abajo de la Derecha :D ---------->
<div class="receipt">
    <h2><center> Agregar Mecanico</center></h2>
    <div class="item">
        <form>
            <div>
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
              <label for="telefono">Teléfono:</label>
              <input type="tel" id="telefono" name="telefono" required>
            </div>
            <div>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div>
              <label for="habilidades">Sueldo:</label>
              <input type="text" id="habilidades" name="habilidades" required>
            </div>
            <div>
              <label for="disponibilidad">Disponibilidad:</label>
              <select id="disponibilidad" name="disponibilidad" required>
                <option value="disponible">Disponible</option>
                <option value="no-disponible">No disponible</option>
              </select>
            </div>
            <button type="submit">Agregar mecánico</button>
          </form>        
    </div>
  </div>          







      </div>


    </div>  

    <script src="js/Script1.js"></script>
    <script src="js/orders.js"></script>

</body>
</html>