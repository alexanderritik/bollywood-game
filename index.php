<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>

  <body >
    <!-- this is used to make website view only in landscape model -->
<style type="text/css">


  @media (max-width:700px){
        /*#warning-message { display: none; }*/

    @media only screen and (orientation:portrait){
        #wrapper { display:none; }
        #warning-message { display:block; }
    }

    @media only screen and (orientation:landscape){
        #warning-message { display:none;}
    }
  }
  @media(min-width:700px)
  {
#warning-message { display:none; }
  }
/*#warning-message { display:none; }*/
</style>





    <!-- header of page -->
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    
      <div class="row">
        &nbsp&nbsp
            <img src="bg-01.jpg" width="45" height="40" class="d-inline-block align-top" alt="">
            <h3 >THE BOLLYWOOD GAME </h3>

<!--             <a href="#" style="padding-left: 15px;padding-top: 4.7px;" target="_blank">
                <img src="https://hitwebcounter.com/counter/counter.php?page=7207022&style=0036&nbdigits=6&type=page&initCount=0" title="User Stats" Alt="webcounterwebsite"   border="0" >
                </a> 
             -->
      </div>


    <div class="row" style="padding-right: 15px;">


      <h3 style="color: orange">Your Points &nbsp&nbsp</h3>
      <h3 id="point" style="color: orange"></h3>
    </div>
    </nav>
    <!-- clsoing of header -->



<!-- content below this div shows only in landscape mode  -->
<div id="wrapper">
      <div class="container-fluid">
        <div class="row">

          <!-- this is for left most column conatiner -->
          <div class="col-2">
            <br>
            <div id="adds" class="row">
              <img class="img-fluid" src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200308234252/GfG-Right-Top-P100.png">
           
              <img class="img-fluid" src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200308234252/GfG-Right-Top-P100.png">
            </div>
          </div>
          <!-- this is closing of left most container -->



         <!-- this is middle conatiner staring which conatins major area -->

          <div class="col-8">
            <!-- for maintaing the puzzle of given movies -->
          <main id="showTitle" >
          </main>



         <!-- closing of puzzle movies block -->
                <style>

                .dot{
                border-radius: 40%;
                width: 69px;
                height: 69px;
                padding-left: 12px;
                padding-right: 12px; 
                border: 1px solid black;
                color:black;
                text-align: center;
                font-size:48px;                   
                }
                .badge{
                max-width: 105px;
                color:white;
                background-color: black;
                }      
                
                .showmovie
                {
                  text-align: center;
                  font-size: 75px;
                }  

                .alphabhetpadding
                {
                  padding-left: 110px;
                }
                .space
                {
                  padding-left: 12px;
                }

                .bollywoodspace
                {
                  padding-left: 40px ;
                  padding-top: 20px
                }
                .z
                {
                  padding-left: 143px
                }
                @media (max-width: 768px){
                .dot {
                   border-radius: 20%;
                width: 29px;
                height: 29px;
                text-align: center;
                font-size:19px;
                padding-left: 8px;
                padding-right: 12px;         
                 }      
                .badge{
                width: 20px;
                height: 20px;
                color:white;
                background-color: black;
                font-size: 15px;

                }       
                .showmovie
                {
                  text-align: center;
                  font-size: 25px;
                }  
                .choicesmall
                {
                  font-size: 12px;
                }
               .alphabhetpadding
                {
                  padding-left: 19px;
                }
                .space
                {
                  padding-left: 1px;
                }
               .bollywoodspace
                {
                  padding-left: 20px ;
                  padding-top: 20px
                }
                .li
                {
                  font-size: 12px;
                }
               .z
                {
                  padding-left: 60px
                }
              } 
                </style>

      <!-- for mantinanig the below column of bollywood and alphabet -->
        <div class="container">
          <div class="row">
       
      <!-- for bollywood option for counting the step -->
          <div class="col-6" style="background-color:white ;font-size: 42px;padding-top: 9px;">
             <h4 class="choicesmall" align="center">CHOICE :
              <input type="radio" id="choice" checked="checked"  name="same" value="0" aria-label="Radio button for following text input">New Movies
              <input type="radio" id="choice" name="same" value="1" aria-label="Radio button for following text input">Old Movies
             </h4>

            <div id="BOLLYWOODchange" class="row bollywoodspace" >
              <span id="option1" class="badge ">B</span><p class="space"></p> 
              <span id="option2" class="badge ">O</span><p class="space"></p>
              <span id="option3" class="badge ">L</span><p class="space"></p>
              <span id="option4" class="badge ">L</span><p class="space"></p>
              <span id="option5" class="badge ">Y</span><p class="space"></p>
              <span id="option6" class="badge ">W</span><p class="space"></p>  
              <span id="option7" class="badge ">O</span><p class="space"></p>
              <span id="option8" class="badge ">O</span><p class="space"></p>
              <span id="option9" class="badge ">D</span><p class="space"></p>
            </div>

              <form id="submitform" method="POST" action="gamepage.php" style="padding-top: 28px">
                <div class="input-group input-group-lg">

              <input type="text" id="titleIs" placeholder="Title must written as it is with space" name="titleIs" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
              <input type="submit" name="submit" value="submit" class="input-group-text" style="background-color:grey" name="submit">
              </div>
              </form>
               
              <div style="padding-top: 15px;font-size: 20px">
              <ul>
              <li class="li">'_' one underscore means one Letter</li>
              <li class="li">'|' one bar means end of Word</li>
              <li class="li">5 ponits for correct Movie</li>
              <li class="li">-1 ponits for wrong Movie</li>
              <li class="li">Additional points for remaining bollywood letter</li>
              </ul>
              </div>
          </div>
      <!-- for close of bollywood option -->
      <!-- for diplaying the no of alphabhet in word -->
          <div class="col-6 alphabhetpadding">
            <h5 ></h5>
            <div class="row">  
            <p id="letter" class="dot">A</p>&nbsp&nbsp
            <p id="letter" class="dot">B</p>&nbsp&nbsp
            <p id="letter" class="dot">C</p>&nbsp&nbsp
            <p id="letter" class="dot">D</p>&nbsp&nbsp
            <p id="letter" class="dot">E</p>&nbsp&nbsp
            </div>
        
            <div class="row">  
            <p id="letter" class="dot">F</p>&nbsp&nbsp
            <p id="letter" class="dot">G</p>&nbsp&nbsp
            <p id="letter" class="dot">H</p>&nbsp&nbsp
            <p id="letter" class="dot">I</p>&nbsp&nbsp
            <p id="letter" class="dot">J</p>&nbsp&nbsp
            </div>     
        
            <div class="row">  
            <p id="letter" class="dot">K</p>&nbsp&nbsp
            <p id="letter" class="dot">L</p>&nbsp&nbsp
            <p id="letter" class="dot">M</p>&nbsp&nbsp
            <p id="letter" class="dot">N</p>&nbsp&nbsp
            <p id="letter" class="dot">O</p>&nbsp&nbsp
            </div>   
            <div class="row">  
            <p id="letter" class="dot">P</p>&nbsp&nbsp
            <p id="letter" class="dot">Q</p>&nbsp&nbsp
            <p id="letter" class="dot">R</p>&nbsp&nbsp
            <p id="letter" class="dot">S</p>&nbsp&nbsp
            <p id="letter" class="dot">T</p>&nbsp&nbsp
            </div>
            <div class="row">  
            <p id="letter" class="dot">U</p>&nbsp&nbsp
            <p id="letter" class="dot">V</p>&nbsp&nbsp
            <p id="letter" class="dot">W</p>&nbsp&nbsp
            <p id="letter" class="dot">X</p>&nbsp&nbsp
            <p id="letter" class="dot">Y</p>&nbsp&nbsp
            </div>
            <div class="z" >  
            <p id="letter" class="dot"style="display: inline-block;" >Z</p>
            </div>
          </div>
        <!-- close of alphabet column -->

        </div>
      </div>
      <!-- closing beside column of alphabet and bollywood -->

      <!-- modal for dispalaying the resulź
      // to disable background click
      data-backdrop="static" data-keyboard="false"
       -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 style="padding-left: 172px" class="modal-title" id="exampleModalLabel" >RESULT</h2>
      <!--         <button type="button" id="lose" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
              <button id="next" class="btn btn-success" data-dismiss="modal"  >next</button>
           
            </div>
                <div id="movieDetail" style="color: purple" align="center">    

                </div>
                <div id="poster" align="center">
                  
                </div>
                <br>

                <div id="wikilink" align="center">
                  
                </div>
                <br>
          </div>
        </div>
      </div>
      <!-- closing of modal -->
          </div>

          <!-- this is closing middle conatiner -->

          <!-- opening of rigth most conatiner -->
          <div class="col-2">
            <br>
            <div id="adds" class="row">
              <img class="img-fluid" src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200302170247/GFG-Right-Top-CDRT.png">

              <img class="img-fluid" src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200302170247/GFG-Right-Top-CDRT.png">

                                       
            </div>
          </div>
          <!-- this is the closing of right most conatiner -->

          <!-- this clsoing of that row of col 1 ,2 ,3 -->
       </div>

      <!-- end of whole conatiner -->
      </div>

</div>
<div id="warning-message">
  <div class="jumbotron jumbotron-fluid" style="background-color: #3498DB ">
  <div class="container">
    <h1 class="display-4">Landscape mode only</h1>
      <p class="lead">Please use the website in landscape mode only.</p>
    </div>
      </div>
</div>
    
      






<!-- footer -->
<footer class="footer mt-auto py-3" style="color: #DC7633 ;position: bottom;">
  <div class="container">
    <span class="text-muted" style="color: #FDFEFE">This website is a dedicated to all the college student who get bored during computer labs and online Quiz. Play with your friend an score the point.</span>
<h5></h5>
    <span>For developer details click on this icon</span>
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#developer">Developer link</button>
 
  </div>

</footer>
<!-- closed footer -->



<!-- for developer modal -->
<div class="modal fade" id="developer" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="padding-left: 125px">DEVELOPER DETAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
                <div class="card" >
                <img src="pic.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Ritik Srivastav</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <img src="pic.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Anubhaw Bajpai</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
          </div>    
        </div>
        

      </div>

    </div>
  </div>
</div>
<!-- clsing of developer modal -->
  </body>

</html>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script src="total.js"></script> -->
<script type="text/javascript">
  
  
//points to get scored
let point=5;
let limit=9;


let choice=$('#choice').val();
$('input[type=radio][id=choice]').change(function() {
     choice=this.value;
});

//console.log(choice);
   //for bring out a movies from table at random choice
    bringMovieTitle();
    function bringMovieTitle()
    {
      // console.log("bringMovieTitle");
      $.ajax({
             url:"bringMovieTitle.php",
             method:"POST",
             data:{choice:choice},
             dataType:"text",
             success:function(data){
             //console.log(data);
             $('#showTitle').html(data)
             }
            });  
    }



  $(document).ready(function(){


//when we click a letter on choice it will get matched whether it is available in movies in it or not 
let count=1; 

$('p[id="letter"]').on('click',function(){

$('#showTitle').html(`<br> <div class="jumbotron col-13" >
        <div class="text-center">
  <div class="spinner-border text-danger" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
    </div>
`);



let hitletter=$(this);

$(this).css("color", "red");
let value=$(this).text();
// console.log("original ",count);
// console.log(value);
$.ajax({
      url:"checkMovieTitle.php",
      method:"POST",
      data:{letter:value},
      dataType:"json",
      success:function(data)
        {
          // console.log(data);
            if(data.check==0)
            {
            point=point+5;
           // console.log(point);
            $('#myModal').modal('show'); 
            $('#movieDetail').html(data.result);
              //console.log(data.poster);
            $('#poster').html(data.poster);
            $('#wikilink').html(data.wiki);
            increasePoint();
            }

            
            if(data.color==1)
            {
              // console.log(data.color);
              // console.log(this);
              hitletter.css("color", "#229954");
             
              count--;
               // console.log("nak ",count);
              // $('#option'+previous--).css("background-color", "black");        
            }

            $('#showTitle').html(data.output);


             
            if(count>limit)
            {
            point=point-3;
            $('#myModal').modal('show');
            $('#movieDetail').html(data.result);
            $('#poster').html(data.poster);
            $('#wikilink').html(data.wiki); 
            increasePoint();   
            }
            else
            {
             $('#option'+count).css("background-color", "red");
             count++;
            }
  
        }

    });  



});

//for changing the background colour of alphabet when mouse goes over it
$('p[id="letter"]').hover(function(){
$(this).css("background-color", "pink");
}, function(){
$(this).css("background-color", "white");
});


//for matching the movies from input box avaialable
$('#submitform').on('submit',function(e){  
let titleIs=$('#titleIs').val();
//console.log(titleIs);
e.preventDefault();
//console.log('kill');
$.ajax({

         url:"titleIs.php",
         method:"POST",
         data:{titleIs:titleIs},
         dataType:"json",
         success:function(data)
            {
              // console.log(data);
               if(data.check==0)
                {
                point=point+5+9-count;
                $('#myModal').modal('show'); 
                $('#movieDetail').html(data.result);
                  //console.log(data.poster);
                $('#poster').html(data.poster);
                $('#wikilink').html(data.wiki);
                increasePoint();         
                cleartag();
                }
                else
                {
                  point=point-1;
                  $('#myModal').modal('show');
                  $('#movieDetail').html(data.result);
                  increasePoint();
                  cleartag();
                }
            }
        });  

});

function cleartag()
{
   $('#titleIs').val("");
}


//for going to next movies puzzle
$('#next').on('click',function(){
  reset();
  bringMovieTitle();
  updatlevel();
});

//reset
function reset()
{
    for (var i = 1; i <= 9; i++) {
    $('#option'+i).css("background-color", "black");
  }
  count=1; 
  $('p[id="letter"]').css("color","black");
  $('#poster').html("");

  $('#wikilink').html("");
}

increasePoint();

function increasePoint(){
 // console.log(point);
  $('#point').text(point);
}


function updatlevel()
{
  console.log("point is ",point);
  if(point>=50)
  {
  limit=5;
      $('#BOLLYWOODchange').html(`
      <span id="option1" class="badge ">F</span><p class="space"></p> 
      <span id="option2" class="badge ">I</span><p class="space"></p>
      <span id="option3" class="badge ">L</span><p class="space"></p>
      <span id="option4" class="badge ">M</span><p class="space"></p>
      <span id="option5" class="badge ">Y</span><p class="space"></p>
                      `);
  }
}
});


</script>

