<?php
    include('header.php');
    session_start();
    $_SESSION['admin']="Admin";
 
    ?>
  

 

<body>
    <div class="container">
        <div class="container_head">
            <button id="backToCategorie" onclick='window.location.href="PageProduits.php"' class="left-arrow"><i class="fas fa-arrow-left"></i></button>
            <span class="span_panier">Admin</span>
            <span class="span_qte">5 Produits</span>


        </div>

        <div class="container_body">
            <div class="container_body_left">
              
                <!-- code qui se repete-->
                <div class="produit_commande">
                   
                    
                   <!-- traitement php-->

                   <?php

                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=bd_brief9;charset=utf8', 'root', '');
                    }
                    catch(Exception $e)
                    {
                            die('Erreur : '.$e->getMessage());
                    }
              
 
          echo '<h3 style="text-align:center;color:gray">DashBoard</h3>';
           

 
             
                 $sql='SELECT * from produit where produit.Quantite_Max <=95';
                 $reponse = $bdd->query($sql);
                 while ($ligne = $reponse->fetch())
                {
                  $ligne = $reponse->fetch();
                  echo'<div class="produit_commande_cible">
                  <div class="produit_commande_cible--img">('.$ligne['Quantite_Max'].')
                  <img src="../img/Produits/'.$ligne['Image_produit'].'.jfif" alt="">
                  </div>
                  <div class="produit_commande_cible--des prodTEXT">

                      <span>
                          '
                          .$ligne['Description_produit'].'
                      </span>

                  </div>

                  <div class="produit_commande_cible-Manipulation">
                  <div style="display: none;" name="name_IDPROduit" class="produit_commande_cible--IdProduit    prodTEXT">'.$ligne['Id_produit'].'</div>
                      <div style="display: none;" class="produit_commande_cible--prixFixe prodTEXT">'.$ligne['Prix_produit'].'</div>
                      <div class="produit_commande_cible--prix prodTEXT">'.$ligne['Prix_produit'].'$</div>
                      
                  </div>
                  <div class="Produit_Actions">
                  <button class="BTN_update">Modifier</button>
                  <a><button name="DEL_btn">Supprimer</button></a>

                </div>


              </div>';
 
       
             
                 }
                
               
 

               ?>
                   
 
                      

 
                </div>
                <div class="popUp_Porduit">
                    <form method="POST" action="Del.php">
                    <div class="popUp_Main">
                        <div>+</div>
                        <input type="text" hidden value="5" name="id_Update_Selectionner"  id="hiddenInput">
                        <input type="text">
                        <button class="Pop_Up_BTN_Modifier" name="PopUP_Update" id="">Modifier</button>

                    </div>
                    </form>

                </div>
            </div>
            <div class="container_body_right">
      

        </div>




    </div>
</body>
<?php
  
 
 
 ?>
 
                

                <?php
            include('footer.php');
            include('script.php');
          


            ?>
   <script>
    //     var id_produit_input = document.getElementById('hiddenInput');
    //      jQuery(':button').click(function () {
    //                 id_produit_input.value=this.id;

    //         });
      
    //   var btn_update= document.getElementsByClassName('BTN_update');
    //   var Ids_toUpdate = document.getElementsByClassName('produit_commande_cible--IdProduit');

     

    //   var Btn_ids_received = document.getElementsByClassName('Pop_Up_BTN_Modifier');
    //    //ID affectation !
    //    for(var i=0;i<Ids_toUpdate.length;i++)
    //   {
    //     btn_update[i].setAttribute('id',Ids_toUpdate[i].innerHTML);

    //   }
    //   // POP UP
    //   for(var i=0;i<btn_update.length;i++)
    //   {
    //       btn_update[i].addEventListener('click',()=>{
               
    //         alert(id_produit_input.value);

    //       })
    //   }
              

     


        </script>
  <!-- <script src="../Script/main.js"></script>   -->


