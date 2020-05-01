<h2> teste teste</h2>


<?php

// check if the repeater field has rows of data
if( have_rows('imagem_list') ): 

 	// loop through the rows of data
    while ( have_rows('imagem_list') ) : the_row();

        // display a sub field value
    ?>

       <img src="<?php the_sub_field('imagem_item'); ?>" alt="" srcset=""> 
       <br>
      <p>
         <?php  the_sub_field('imagem_label');?>

      </p>
     

      

     <?php   

    endwhile;

else :

    // no rows found

endif;

?>


<? 


    the_field('nome');






?>
