<?php Session::init(); ?>
<main >
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-id" data-slide-to="0" class=""></li>
      <li data-target="#carousel-id" data-slide-to="1" class=""></li>
      <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item">
        <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="public/img/pic3.jpg">
        <div class="container">
          <div class="carousel-caption" style="">
            <h1>Earn and Learn</h1>
              <p>Earn while learning about climate change.</p>
          </div>
        </div>
      </div>
      <div class="item">
        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="public/img/pic2.jpg">
        <div class="container">
          <div class="carousel-caption" style="color:skyblue;">
            <h1>Help Saveing mother Earth</h1>
            <p></p>
          </div>
        </div>
      </div>
      <div class="item active">
        <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="public/img/pic1.jpg">
        <div class="container">
          <div class="carousel-caption" style="color:green;">
            <h1>Recycle at your most convenient time</h1>
            
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>




   

   <!-- Page Content -->
  <a  name="contact"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Why Should We Recycle</h2>
                </div>
                
            </div>

        </div>
        <!-- /.container -->

    </div>
  <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Reduce pollution</h2>
                    <p class="lead">The more you recycle old products the less you will require the need of buying new products. As a result there will be energy saving.

Reduction in the harmful gasses will not only help in cleaning the environment but will also clean the air we breathe. The more clean air we breathe the more positive impact it will have on our life.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="public/img/pollution.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Reduction in Landfills</h2>
                    <p class="lead">Size of the landfills can be significantly reduced if we reduce our daily waste and recycle more. If we don’t recycle the product the landfills site will become more common around the city which will certainly affect wildlife and environment. So to reduce it we must recycle as much as we can.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="public/img/landfills.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Conservation of materials</h2>
                    <p class="lead">All the new products are made from the raw materials which are procured from harvesting the earth’s natural resources. for e.g.: you need wood to make paper and wooden products.<br>

If more trees are cut down to make such products it will affect wildlife and environment in a significant way. This can be reduced if recycle more and more paper and rely less on new products.</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="public/img/materials.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Save Energy</h2>
                    <p class="lead">When there will be less demand for new products then of course less products will be produced which will help in saving the energy. Conservation of energy is the key element for the fight against climate change.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="public/img/energy.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Save Money</h2>
                    <p class="lead">When you will recycle old products and have less dependency on new products the obviously you will end up in saving some money. That money can then be used for some other purposes. When recycling is done on large scale the money saved can have huge impact on your monthly expenditure.</a></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="public/img/money.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->  
	<?php print_r($_SESSION); ?>
	<?php if (!empty(Session::exists('message'))): ?>
		<script type="text/javascript">
			alert("<?php echo Session::get('message')['message'] ?>");
		</script>
		<?php Session::delete('message') ?>
	<?php endif; ?>
</main>
