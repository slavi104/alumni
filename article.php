<?php

if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    require_once "controller.php";
   	try {
   		$article = new Article($id);
   		$div = '<div class="articlesFull" style="cursor:auto;" data-id=' . $article->getId() . '>
                                
                  
                    
                  <div>
                    <div class="article-title">'.$article->getTitle().'
                    </div> 
                    <div class="article_text">
                    <div class="img_articles_in" style="float:left">
                      <img style="max-width:300px; max-height:230px" src="' . $article->getImage() . '"/>
                    </div>
                    <p style="margin-left:45px;">
                    '.$article->getText().'
                    </p>
                    </div>
                  </div>

               
              </div><div class="clear"></div>';


   	} catch (Exception $e) {
   		echo $e->getMessage();
   	}
   	echo $div;
}
?>
