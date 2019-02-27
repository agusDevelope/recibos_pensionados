<!--
<div class='login'>
  <h2>Iciciar sesi&oacute;n</h2>
  <input name='username' placeholder='Usuario' type='text'/>
  <input id='pw' name='password' placeholder='Password' type='password'/>
  <div class='remember'>
    <input checked='' id='remember' name='remember' type='checkbox'/>
    <label for='remember'></label>Remember me
  </div>
  <input type='submit' value='Sign in'/>
  <a class='forgot' href=''>Forgot your password?</a>
</div>
-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">


    <link rel="stylesheet" href="./scss/_progress.scss">
    <link rel="stylesheet" href="./scss/_popover.scss">
    <link rel="stylesheet" href="./scss/_grid.scss">
    <link rel="stylesheet" href="./scss/_forms.scss">
    <link rel="stylesheet" href="./scss/utilities/_align.scss">
    <link rel="stylesheet" href="./scss/utilities/_borders.scss">
    <link rel="stylesheet" href="./scss/mixins/_reset-text.scss">
    <link rel="stylesheet" href="./scss/mixins/_gradients.scss">
    <link rel="stylesheet" href="./scss/mixins/_display.scss">
    <link rel="stylesheet" href="./scss/mixins/_tavbe-rows.scss">

    <link rel="stylesheet" href="./css/login.css">

  <script src="./js/jquery-3-3-1.js" charset="utf-8"></script>	

 </head>
  <body>
	<div>
	 <img src="./imagenes/prestaciones2.png" class="logo3">
	</div>

 
<table>
   <tr>
     <td></td>
	<div class="media">
		  	<div class="media-left">
			    <img src="./imagenes/caprepol.jpg" class="media-object" style="width:60px">
		        </div>
       	                <div class="media-body">
		            <h4 class="media-heading">&nbsp;&nbsp;Caja de Previsi&oacute;n de la Polic&iacute;a Preventiva </h4>
		            <h5 class="media-heading">&nbsp;&nbsp;de la Ciudad de M&eacute;xico </h5>
        	        </div>
 
 	  <div class="media">
	         <div class="media-right">
	           <img src="./imagenes/cdmx.png" class="media-object" style="width:160px">
                 </div>
		    <div class="media-body">
		       <h4 class="media-heading">&nbsp;&nbsp;</h4>
		       <p>&nbsp;&nbsp;</p>
                    </div>
          </div>
        </div>
   </tr>
       <tr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
	<td></td>
    </tr>
       <tr>
	<td></td>
             <div class='login'>
                 <h2>Iniciar sesi&oacute;n</h2>
                 <input name='username' placeholder='Usuario' type='text'/>
                 <input id='pw' name='password' placeholder='Password' type='password'/>
              <div class='remember'>
                 <input checked='' id='remember' name='remember' type='checkbox'/>
              </div>
                 <input type='submit' value='Entrar'/>
             </div>
       </tr>
       <tr>
        <br>
        <br>
        <br>
      </tr>
       <tr>
        <br>
        <br>
        <br>
      </tr>
       <tr>
	<td></td>
          <footer>
           <!-- Copyright -->
              <div class="footer-copyright text-center py-3">© 2018 Copyright:
                  <a href="http://www.caprepol.cdmx.gob.mx/index.html"><strong>CAPREPOL</strong></a>
         <address>
 	  Pedro Moreno 129, Col. Guerrero<br>
	  Cuauhtemoc, Ciudad de M&eacute;xico, 06300<br>
	  <abbr title="Phone">Tel:</abbr> 51-41-08-62
	</address>
              </div>
         </footer>
</tr>
</table>
  </body>

</html>

<script>

//Placeholder fixed for Internet Explorer
$(function() {
	var input = document.createElement("input");
	if(('placeholder' in input)==false) { 
		$('[placeholder]').focus(function() {
			var i = $(this);
			if(i.val() == i.attr('placeholder')) {
				i.val('').removeClass('placeholder');
				if(i.hasClass('password')) {
					i.removeClass('password');
					this.type='password';
				}			
			}
		}).blur(function() {
			var i = $(this);	
			if(i.val() == '' || i.val() == i.attr('placeholder')) {
				if(this.type=='password') {
					i.addClass('password');
					this.type='text';
				}
				i.addClass('placeholder').val(i.attr('placeholder'));
			}
		}).blur().parents('form').submit(function() {
			$(this).find('[placeholder]').each(function() {
				var i = $(this);
				if(i.val() == i.attr('placeholder'))
					i.val('');
			})
		});
	}
	});

//show password
$(document).ready(function(){
    $("#pw").focus(function(){
        this.type = "text";
    }).blur(function(){
        this.type = "password";
    })   
});
 
</script>