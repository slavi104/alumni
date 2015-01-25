<?php
    require_once 'controller.php';
    if ($_POST) {
    	$text = $_POST['text_search'];

        //var_dump($_POST);
    	$articles = fRecordSet::buildFromSQL('Article', 'SELECT articles.* FROM articles');
        $users = fRecordSet::buildFromSQL('User', 'SELECT users.* FROM users');
    	$div = '<div id="content">';

        $div.='<table id="users">
                <thead>
                    <tr>
                        <th> Снимка:</th>
                        <th> Потребителско име:</th>
                        <th> Добавен на:</th>
                    </tr>
                </thead>
                <tbody id="tb">';

        $hasAtleastOne = false;
        foreach ($users as $user) {

            $content = $user->getUserName();
            //var_dump($content);
            if ( $content == $text ) {

                
            
                $div.= '<tr>';
                $div.= '<td><img style="width:50px;" src="' . $user->getAvatar() . '"></td>';
                $div.= '<td><a href="profile.php?id='.$user->getId().'"><span style="color:#7e0e26; background:yellow;">'. $text .'</span></a></td>';
                $div.= '<td>'.$user->getCreated().'</td>';
                $div.= '</tr>';

                $hasAtleastOne = true;
            }

        }

        $div.= '</tbody>
            </table>';

        if (!$hasAtleastOne) {
            $div = '<div id="content">';
        }
        

    	foreach ($articles as $article) {
    		$content = $article->getText();
    		if (strlen(strstr($content, $text, true)) > 0) {

    			$finded_content = strstr($content,$text,true);
                $div .= '<div class="articles" data-id=' . $article->getId() . '>
                                
                  <div class="img_articles" style="float:left">
                    <img style="width:300px; height:230px" src="' . $article->getImage() . '"/>
                  </div>
                  <div>
                    <div class="article-title">' . $article->getTitle() . '
                    </div>
                    <br>
                    </br>
                    <div class="article_text">' . substr($finded_content, -400, 400) . ' <span style="color:#7e0e26; background:yellow;">'. $text .'</span> ...  
                    </div>
                  </div>

               
              </div><div class="clear"></div><br><br>

              <script type="text/javascript">
                $(document).ready(function() {


                    $(".articles").on("click", function(){
                         $.ajax({
                            type: "post",
                            url: "article.php",
                            data: {
                                id: $(this).data("id")
                            },
                            dataType: "html"
                            }).done(function(data){
                                    if(data != false)
                                    {
                                        $("#content").empty();
                                        $("#content").append(data);
                                    }
                                    $("#pages").addClass("hidden");
                            }); 
                    });

                });

                </script>';

    			//echo $div;
                /*'
    			<div style="border: 2px solid black;">
	    			<p>
	    				<br>
		    			<span>
		    				<img src="' . $article->getImage() . '">
		    			</span>
		    			<span>
		    				<h2><b>' . $article->getTitle() . '</b></h2>
		    				<br> ... ' . substr($finded_content, -400, 400) .'
		    				<span style="color:#7e0e26; background:yellow;">'. $text .'</span> ... 
		    			</span>
	    			</p><br>
    			</div><br>';*/
    		}
    	
    	}

        //$arrayName = array('fffff0' => "fffff0");
        $div .= '</div>';
        echo $div;
    }
?>

