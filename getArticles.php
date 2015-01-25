
<?php 
    if(isset($_POST['number']) && !empty($_POST['number'])) {
    $number = $_POST['number'];
    $numberTrsOnPage = $_POST['numberTrsOnPage'];
    $page = ceil($number/$numberTrsOnPage);
    $countTrs = 0;
    $count = 1;
    $last;
    require_once "controller.php";
   	try {
   		       $notSortedArticles = fRecordSet::buildFromSQL('Article', 'SELECT articles.* FROM articles');
             $articles = $notSortedArticles->sort('getId', 'desc');
               $last = ceil((count($articles)-1)/$numberTrsOnPage);
               $div = '';
                if($number > count($articles))
                {
                    return false;
                }
                
                foreach($articles as $article) 
                {
                    if($countTrs >= $numberTrsOnPage)
                    {
                        break;
                    }
                    if($count >= $number){
                    $div .= '<div class="articles" data-id=' . $article->getId() . '>
                                
                                  <div class="img_articles" style="float:left">
                                    <img style="max-width:300px; max-height:230px" src="' . $article->getImage() . '"/>
                                  </div>
                                  <div>
                                    <div class="article-title">' . $article->getTitle() . '
                                    </div>
                                    <div class="article_text">' .$article->getText().'
                                    </div>
                                  </div>

                               
                              </div><div class="clear"></div><br><br>';
                    
                    $countTrs++;
                    }
                    $count++;
                }
                echo $div;
   	} catch (Exception $e) {
   		echo $e->getMessage();
   	}
}
   
?>