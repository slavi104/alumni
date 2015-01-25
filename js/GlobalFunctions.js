function Answer(text, points){
    this.text = text;
    this.points = points;
}
function Question(text){
    this.text = text;
    this.answers = [];
}
Question.prototype.AddAnswer = function(text, points){
    answer = new Answer(text, points);
    this.answers.push(answer);
} 
var Question;

//makePaging() - srcPHP is the php file we want to execute with ajax
//elementsNumber - number of the elements we want on single page
//the php file must return string with ONE element


function makePaging(srcPHP, elementsNumber, containerId)
{
    
    $(document).ready(function () {
        
    var number = 1; //the number of the first element on new page
    var count = 1; //page number
    var pages = []; //string array with info for every page
    var pressedPageNum;
    function firstPage()
    {
        $.ajax({
            type: 'post',
            url: srcPHP,
            data: {
                number: number,
                numberTrsOnPage: elementsNumber
            },
            dataType: 'html'
        }).done(function(data){
                if(data != false)
                {
                    $(containerId).empty();
                    $(containerId).append(data);
                    number += elementsNumber;
                    pages[count] = data;
                        $('.articles').on('click', function(){
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
                }
        }); 
    }
    firstPage();
    drawPages(count);

    function OpenNewPage(){
        var lastPage = parseInt($(".hidden").html());
        $('.page').on('click', function(ev){
        
        if ($(this).attr("id")=='previous') {
            pressedPageNum = count - 1;
        }
        else if ($(this).attr("id")=='next') {
            pressedPageNum = count + 1;
        }
        else{
            pressedPageNum = parseInt($(this).html());
        }
        
        if (pressedPageNum>0 && pressedPageNum<=lastPage) {
            $.ajax({
            type: 'post',
            url: srcPHP,
            data: {
                number: (pressedPageNum-1)*elementsNumber + 1,
                numberTrsOnPage: elementsNumber
            },
            dataType: 'html'
            }).done(function(data){
                    if(data != false)
                    {
                        $(containerId).empty();
                        $(containerId).append(data);
                        pages[count] = data;
                        count=pressedPageNum;
                        number = elementsNumber*count;
                        $('.articles').on('click', function(){
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
                    }
            }); 

            drawPages(pressedPageNum);
        }; 
        
        });  
    } 
    
    
        function drawPages(currentPage)
    {

        var lastPage = parseInt($(".hidden").html());

         $("#pages").empty();
        if (currentPage == 1) {
            $("#pages").append('<span class ="buttons page inactive" id="previous"></span>');
        }
        else
        {
            $("#pages").append('<span class ="buttons page" id ="previous"></span>');
        }

        if (currentPage - 2 >= 1) {
            $("#pages").append('<span class ="buttons page">' + (currentPage - 2) + '</span>');
        }
        if (currentPage - 1 >= 1) {
            $("#pages").append('<span class ="buttons page">' + (currentPage - 1) + '</span>');
        }

        $("#pages").append('<span class ="buttons page currentPage">' + (currentPage) + '</span>');
        if (currentPage + 1 <= lastPage) {
            $("#pages").append('<span class ="buttons page">' + (currentPage + 1) + '</span>');
        }
        if (currentPage + 2 <= lastPage) {
            $("#pages").append('<span class ="buttons page">' + (currentPage + 2) + '</span>');
        }

        if (currentPage != lastPage) {
            $("#pages").append('<span class ="buttons page" id ="next"></span>');
        }
        else {
            $("#pages").append('<span class ="buttons page inactive" id ="next"></span>');
        }
        OpenNewPage();
        window.scrollTo(0, 0);
    }
    
});

}

function Step1()
{
        $('#step1').on('click', function(){
            Question = new Question($('#title').val());
            var questionsNum = $('#number').val();
            var category = $("#mySelect option:selected").val();
             $('#content').empty();
             $('#content').append("<form id='step1Form' method='POST' action='addTest.php' enctype='multipart/form-data'><input type='file' name='file' id='file'><br>");
             

             for(var i=0; i<questionsNum; i++){

                $('#step1Form').append("<label>Question "+(i+1)+":</label><br>");
                $('#step1Form').append('<input type="text" name="'+i+'"></input><br>');
                $('#step1Form').append('<label>Answer 1:</label>');
                $('#step1Form').append('<input type="text" name="answer'+i+'-1"></input>');
                $('#step1Form').append('<label>Points for answer 1:</label>');
                $('#step1Form').append('<input type="text" name="points'+i+'-1"></input><br>');
                $('#step1Form').append('<label>Answer 2:</label>');
                $('#step1Form').append('<input type="text" name="answer'+i+'-2"></input>');
                $('#step1Form').append('<label>Points for answer 2:</label>');
                $('#step1Form').append('<input type="text" name="'+"points"+i+"-2"+'"></input><br>');
                $('#step1Form').append('<label>Answer 3:</label>');
                $('#step1Form').append('<input type="text" name="'+"answer"+i+"-3"+'"></input>');
                $('#step1Form').append('<label>Points for answer 3:</label>');
                $('#step1Form').append('<input type="text" name="'+"points"+i+"-3"+'"></input><br>');
                $('#step1Form').append('<input type="text" class="hidden" name="numberRows" value="'+questionsNum+'"></input><br>');
                $('#step1Form').append('<input type="text" class="hidden" name="testName" value="'+Question.text+'"></input><br>');
                $('#step1Form').append('<input type="text" class="hidden" name="category" value="'+ category +'"></input><br>');

            }
            $('#step1Form').append('<input type="submit" id="Step2" value="Continue"/></form>');
        });
}

function AddPoints(src, points)
{
    $.ajax({
        type: 'post',
        url: src,
        data: {
            points: points
        },
        dataType: 'html'
        }).done(function(data){
                if(data == '1')
                {
                    alert("Вие добавихте " + points + " точки към обшия си брой точки!");
                }
                else
                {
                    alert("Точките ви не бяха добавени към общия брой, тъй като не сте влезли в профила си!");
                }
        }); 
}