<?php
    require_once 'header.php';
?>
<div id="content">
  <input type="hidden" id="nav_trigger_input" value="index"/>
  <?php 
            $article = Functions::getLastArticle();
            echo  '<div class="articles" style="" data-id=' . $article->getId() . '>
                                
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
       ?>

        <div class="">
                                
            <div class="img_articles" style="float:left">
              <a href="calendar.php"><img style="max-width:300px; max-height:230px" src="images/51f9338c52a91image.png"/></a>
            </div>
            <div>
              <div class="article-title">
                Предстоящи събития:
              </div>
              <div class="events_holder">
            
              </div>
            </div>

         
        </div><div class="clear"></div><br><br>
       
</div>
<script type="text/javascript">
$( document ).ready(function() {
  $('.articles').on('click', function(){

      //alert($(this).data("id"));

      $.ajax({
        type: 'post',
        url: "article.php",
        data: {
            id: $(this).data("id")
        },
        dataType: 'html'
      }).done(function(data){
              if(data != false)
              {
                  $("#content").empty();
                  $("#content").append(data);
              }
              $("#pages").addClass("hidden");
      }); 
  });

  $.ajax({
        type: 'post',
        url: "getIndexEvents.php",
        dataType: 'html'
      }).done(function(data){

              $('.events_holder').html(data);
              //console.log(data);
              /*if(data != false)
              {
                  $("#content").empty();
                  $("#content").append(data);
              }
              $("#pages").addClass("hidden");*/
      });

  $( ".hover-description" ).mouseover(function() {

    var descr = $(this).children().children().children().find('p').html();
    var name = $(this).children().children().children().find('h3').html();
    $(this).children().children().children().find('h3').html(descr);
    $(this).children().children().children().find('p').html(name);


  });
  $( ".hover-description" ).mouseout(function() {

    var descr2 = $(this).children().children().children().find('p').html();
    var name2 = $(this).children().children().children().find('h3').html();
    $(this).children().children().children().find('h3').html(descr2);
    $(this).children().children().children().find('p').html(name2);

  });
});
</script>

<?php
	require_once 'footer.php';
?>