<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="desk.css">
        <title>Test</title>
       <meta name="description" content="Obtenha seu template e tenha um site para que seus produtos possam alcançar uma gama maior de compradores, aumentando seu faturamento e dando reconhecimento ao seu negocio e produto.">
       <link rel="stylesheet" media="screen and (max-width: 800px)" href="mobile.css">
    </head>
    <body>
    
      <header>
        <nav id="#" class="nav">
          <a href="#list_menu" class="btn_open material-icons control_menu">menu</a>
          <a  id="palavra_logo" href="#home">Logo Text</a>
            <ul id="list_menu" class="nav_list">
               <li class="menu_a" > <a href="#home">Home</a>  </li>
               <li class="menu_a"><a href="#about"> about </a> </li>
               <li class="menu_a"><a href="#features"> features </a> </li>
               <li class="menu_a"><a href="#products"> Products </a> </li>
               <li class="menu_a"><a href="#contacts"> Contatos </a> </li>
            </ul>
        </nav>
      </header>
      
        <!--  main part of site  -->
      
      <main>
        <!--  Section initial  -->
          <div class="section_1">
              <section class="section_first" id="esquerdo"></section>

              <section class="section_first" id="direito">
                <h1 id="titulo">What is Lorem Ipsum?</h1>
                   <p class="paragrafo">
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                   </p>
              </section>
          </div>
         <!-- End section initial  -->
        
        <!--  Section why need have...  -->
          <div  class="section_background">
             <h1 id="titulo_section">About site</h1>

             <section class="section_second" id="text">
                  <p>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p> 
                  <p>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
             </section>

             <section class="section_second" id="citacoes">  
                  <p>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                 </p>
               <p>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap                        into electronic typesetting, remaining essentially unchanged. 
                   
             </section>
          </div>
        <!-- End section why need have...  -->
        
    
   
           <!--  Section contacts   -->
     <div class="section_5">
       
           <div class="div_contacts">
             <h1 class="titulo_section_con">Contact</h1>
             
              <section class="section_fifth"> 
                 <i class="large material-icons control">phone</i>
                 <h2 class="contacts_titles">Telephone</h2>
                   <p class="paragrafo">
                      ...
                   </p> 
             </section>

             <section class="section_fifth"> 
                 <i class="large material-icons control">email</i>
                 <h2 class="contacts_titles">Email</h2>
                   <p class="paragrafo">
                      ...
                   </p>
             </section>

             <section class="section_fifth">
                 <i class="large material-icons control">location_on</i>
                 <h2 class="contacts_titles">Andress</h2>
                   <p class="paragrafo">
                     ...
                   </p>
             </section>
         </div>
        </div>
      </main>
     <!--  End main  -->

      <footer id="footer"> Copyright &copy 2018. All Rights Reserved by Jhonatan Cardoso.</footer>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
         <script type="text/javascript" >
              $(function(){
                
                $( ".btn_open" ).on("click", function(e){
                     
                    $(".nav_list").toggleClass("nav_list_open");


                });


              });

        </script>
    </body>
  