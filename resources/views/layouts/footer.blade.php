<footer class="page-footer center-on-small-only">
<hr>
<div class="foot-logo"><img src="{{asset('assets/img/logo.png')}}"></div>
<div class="social-section">
            <ul>
                <li><a class="btn-floating btn-small btn-fb" target="_blank" href="https://www.facebook.com/getsportyindia/"><i class="fa fa-facebook" ></i></a></li>

                <li><a class="btn-floating btn-small btn-tw" target="_blank" href="https://twitter.com/GetSportyIndia"><i class="fa fa-twitter"> </i></a></li>

                <li><a class="btn-floating btn-small btn-linkedin" target="_blank" href="https://www.linkedin.com/company-beta/3746644/"><i class="fa fa-linkedin"> </i></a></li>

            </ul>

        </div>
        <div class="footer-copyright" id ="Partner">

            <div class="container-fluid">
                © 2017 Copyright: <a href="#"> Design By Dark Horse Sports </a>
            </div>
        </div>
    </footer>

    <!--/.Footer-->



    

    

    <!-- SCRIPTS -->

    <script type="text/javascript" src="{{asset('assets/js/compiled.min.js')}}"></script>

	

	    <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>

		    <script type="text/javascript" src="{{asset('assets/js/main.min.js')}}"></script>



    <script>





$(document).click(function(e) {

    if (!$(e.target).is('.nav-link') || $(e.target).is('.nav-link')) {

        $('.collapse').collapse('hide');        

    }

});

       





$('.carousel').carousel({

    interval: false

}); 



function load() {

         $('.se-pre-con').fadeOut();

      }



      window.onload = load;







    $(".button-collapse").sideNav();

        

    var el = document.querySelector('.custom-scrollbar');

    Ps.initialize(el);

    

     $('.datepicker').pickadate();









    </script>

<script>
$(document).ready(function(){
  $(".nav-link").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
</script>

<script type="text/javascript" src="{{asset('assets/js/data.js')}}"></script>  
<script type="text/javascript" >
jQuery(document).ready(function()
{ 
getResources();
getEvent();
getJob();
});// End of Doucument Ready
</script>


<script>



$( "#img" ).hide();

function valname()

    {

        var n=0;

        var email1=document.forms["form"]["email"].value;

        var atpos = email1.indexOf("@");

        var dotpos = email1.lastIndexOf(".");



         if(document.forms["form"]["name"].value == "")

        {

            $( '#form41' ).css("border-bottom-color","red");

             n++;

        }

        else

        {

            $( '#form41' ).css("border-bottom-color","green");       

        }

        if(document.forms["form"]["subject"].value == "")

        {

            $( '#form51' ).css("border-bottom-color","red");

             n++;

        }

        else

        {

            $( '#form51' ).css("border-bottom-color","green");       

        }

        if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email1.length)

        {

            $( '#form52' ).css("border-bottom-color","red");

            n++;  

        }

        else

        {
            $( '#form52' ).css("border-bottom-color","green");  
        }
        if(document.forms["form"]["message"].value == "")
        {
            $( '#form76' ).css("border-bottom-color","red");
            n++; 
        }
        else
        {
        $( '#form76' ).css("border-bottom-color","green"); 
        }
        if(n==0)
        {
            return true;
        }
        else
        {
            return false;
        }
}

$('#save').click(function () {

     if(!valname())

        {

            return false;

        }

        else

        {

            $( "#img" ).show();

             var msg = '';

    var user_msg = {"name":$('#form41').val(),

            "email":$('#form52').val(),

            "subject":$('#form51').val(),

            "message":$('#form76').val(),

            "medium" : 'W'

            };

            

  $.ajax({

    url:'http://liveapp.getsporty.in/getSportyLite/contact_us.php?act=contact_us&token_id=dhs2016',

    method:'POST',

    data:JSON.stringify(user_msg),

    datatype:"json",

    crossDomain:true,

    timeout: 10000,

    success:function(result)

    {   

        $( "#img" ).hide();

         data = JSON.parse(result);

         status = data.status;

        if(status == 1)

        {  msg = 'Thanks For Showing Interest';

                        $("#form41").val(''); 

                        $("#form52").val('');    

                        $("#form51").val('');  

                        $("#form76").val(''); 

                        $( '#form41' ).css("border-bottom-color","#ccc");

                        $( '#form52' ).css("border-bottom-color","#ccc");

                        $( '#form51' ).css("border-bottom-color","#ccc"); 

                        $( '#form76' ).css("border-bottom-color","#ccc"); 

                        $( '#name' ).removeClass('active');

                        $( '#email' ).removeClass('active');

                        $( '#subject' ).removeClass('active');

                        $( '#message' ).removeClass('active');
        }
        else
        {
             msg =  'Server error! Please try again later';
        }
         var message = '<div class="modal-dialog"><div class="modal-content" style="border:none; border-radius:2px;background-color:whitesmoke;"><div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>  <p class="modal-style">'+msg+'</p> </div> <div class="modal-footer" style="border-top:none;padding-top:0px;"> <button type="button" style="border-radius:2px;" class="btn btn-default" data-dismiss="modal">Close</button> </div> </div> </div>';

                    $('#myModal').html(message);
                    $('#myModal').modal('show');
    },

    error:function(){
         $( "#img" ).hide();
                    msg =  'Server error! Please try again later';
                    var message = '<div class="modal-dialog"><div class="modal-content" style="border:none; border-radius:2px;background-color:whitesmoke;"><div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>  <p class="modal-style">'+msg+'</p> </div> <div class="modal-footer" style="border-top:none;padding-top:0px;"> <button type="button" style="border-radius:2px;" class="btn btn-default" data-dismiss="modal">Close</button> </div> </div> </div>';

                    $('#myModal').html(message);
                    $('#myModal').modal('show');
}    
});
}
});
function partner()
{
window.open('http://portal.getsporty.in/index.php/forms/new_registration/','_blank');
}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-102513647-1', 'auto');
  ga('send', 'pageview');
</script>

<script type="text/javascript">

    var intervaltime = 3000;
    var thisId=0;

    $(function(){
     mobileslider();
    });

    function mobileslider()
    {
        var urlArray = new Array();
        urlArray[0] = '#res';
        urlArray[1] = '#job_div';
        urlArray[2] = '#evt_tourn';
        urlArray[3] = '#evt_tourn';

        var buttonArray = new Array();
        buttonArray[0] = 'View Articles';
        buttonArray[1] = 'Apply Jobs';
        buttonArray[2] = 'View Tournaments';
        buttonArray[3] = 'View Events';

        var dataArray1 = new Array();
        dataArray1[0] = "assets/img/freezeimage1.png";
        dataArray1[1] = "assets/img/job.png"; 
        dataArray1[2] = "assets/img/tournament.png"; 
        dataArray1[3] = "assets/img/event.png";
            
        //var thisId=0;
       
        window.setInterval(function()
        {
            $('#mainslider').attr('src',dataArray1[thisId]);
            $('#url').text(buttonArray[thisId]);
            $('#url').attr('href',urlArray[thisId]);
            // $('#'+thisId).css('background',"#888888");
            thisId++;
            $('#'+thisId).prop('checked', true);

             // $('#'+thisId).css('background',"#0c4059");
              if(thisId== 1)
              {
                $('#4').prop('checked', false);
                $('#3').prop('checked', false);
                $('#2').prop('checked', false);
              } 
             // $('#4').css('background',"#888888");
            if (thisId==4)     
                thisId=0;
        },intervaltime);
    }

   function textchangestop($this)
   {
     thisId=5;
   } 

   function textstart()
   {
    thisId=0;
   }

   function dotfunction($this)
   {
       var id = $this.id;
       if(id == 1)
       {
           $('#mainslider').attr('src','assets/img/freezeimage1.png');
           $('#url').text("View Articles");
           $('#url').attr('href',"#res");
           $('#1').prop('checked', true);
           // $('#1').css('background',"#0c4059");
           // $('#2').css('background',"#888888");
           // $('#3').css('background',"#888888");
           // $('#4').css('background',"#888888");
       }else if(id == 2){
           $('#mainslider').attr('src','assets/img/job.png');
           $('#url').text("Apply Jobs");
           $('#url').attr('href','#job_div');
           $('#2').prop('checked', true);
           // $('#2').css('background',"#0c4059");
           // $('#1').css('background',"#888888");
           // $('#3').css('background',"#888888");
           // $('#4').css('background',"#888888");
       }else if(id == 3){
           $('#mainslider').attr('src','assets/img/tournament.png');
           $('#url').text("View Tournaments");
           $('#url').attr('href','#evt_tourn');
           $('#3').prop('checked', true);
           // $('#3').css('background',"#0c4059");
           // $('#1').css('background',"#888888");
           // $('#2').css('background',"#888888");
           // $('#4').css('background',"#888888");
       }else if(id == 4){
           $('#mainslider').attr('src','assets/img/event.png');
           $('#url').text("View Events");
           $('#url').attr('href','#evt_tourn');
           $('#4').prop('checked', true);
           // $('#4').css('background',"#0c4059");
           // $('#1').css('background',"#888888");
           // $('#2').css('background',"#888888");
           // $('#3').css('background',"#888888");
       }
   }
</script>