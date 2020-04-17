
  
//points to get scored
let point=5;
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
let hitletter=$(this);

$(this).css("color", "red");
let value=$(this).text();
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
            point=point+5+9-count;
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
              console.log(data.color);
              console.log(this);
             
              hitletter.css("color", "#3498DB");
            }

            $('#showTitle').html(data.output);
             
            if(count>10)
            {
            point=point-1;
            $('#myModal').modal('show');
            $('#movieDetail').html(data.result); 
            increasePoint();   
            }
        }
    });  

$('#option'+count).css("background-color", "red");
count++;

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


});

