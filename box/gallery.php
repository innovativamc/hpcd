
<? if($galeria == 'activa'){ ?>
<div class="gallery">
<section class="content"> 
    <div class="contenedorGaleria">
      <div id="main" role="main">
      <section class="slider">
        <div class="flexslider carousel">
          <center>
          <ul class="slides">
            <li>
              <img src="images/galeria/foto1.png" />
            </li>
            <li>
              <img src="images/galeria/foto2.png" />
            </li>
            <li>
              <img src="images/galeria/foto3.png" />
            </li>
            <li>
              <img src="images/galeria/foto4.png" />
            </li>
            <li>
              <img src="images/galeria/foto2.png" />
            </li>
            <li>
              <img src="images/galeria/foto3.png" />
            </li>
            <li>
              <img src="images/galeria/foto4.png" />
            </li>
            <li>
              <img src="images/galeria/foto2.png" />
            </li>
          </ul>
        </center>
        </div>
      </section>
        
      </div>
    

<? /*<div id="main" role="main">
      <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
            <li>
  	    	    <img src="images/galeria/foto1.png" />
  	    		</li>
  	    		<li>
              <img src="images/galeria/foto2.png" />
            </li>
            <li>
              <img src="images/galeria/foto3.png" />
            </li>
            <li>
              <img src="images/galeria/foto4.png" />
            </li>
            
          </ul>
        </div>
      </section>
      <aside>
        <div class="cf">
          <h3>Basic Carousel</h3>
          <ul class="toggle cf">
            <li class="js"><a href="#view-js">JS</a></li>
            <li class="html"><a href="#view-html">HTML</a></li>
          </ul>
        </div>
        <div id="view-js" class="code">
          <pre class="brush: js; toolbar: false; gutter: false;">
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 210,
                itemMargin: 5
              });
            });
          </pre>
        </div>
        
      </aside>
    </div>
  

  */?>
</div>
  </section>  
</div>

<script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>
  
  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>
   <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  <script defer src="jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5,
        start: function(slider){
          $('body').removeClass('loading');
          $(".slides img").css( "display", "block" );
        }
      });
    });
  </script>
  <?php } ?>