@extends('layouts.master')
@section('content')
<div class="breadcrumbs theme-clearfix"><div class="container"><ul class="breadcrumb"><li><a href="/">Home</a><span class="divider"> </span></li><li class="active"><span>Home</span></li></ul></div></div>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://reskytnew.s3.amazonaws.com/3716/fustes-montgros-sl-banner-129049-med.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="http://www.villaseca.com.mx/images/banner_02-crop-u17312.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=1920x400:format=jpg/path/s41b3de04ce91035e/image/i47131dfa31e83c86/version/1486418190/image.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-md-8 col-md-offset-2" id="container-text">
<hr>
<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <hr>
<h2>Titulo1</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod labore delectus molestias atque, eos doloribus quidem fuga culpa blanditiis, nulla at accusamus id incidunt doloremque nobis autem eveniet minus quis!
</p>
<hr>
<h2>Titulo2</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod labore delectus molestias atque, eos doloribus quidem fuga culpa blanditiis, nulla at accusamus id incidunt doloremque nobis autem eveniet minus quis!
</p>
<hr>
<h2>Titulo3</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod labore delectus molestias atque, eos doloribus quidem fuga culpa blanditiis, nulla at accusamus id incidunt doloremque nobis autem eveniet minus quis!
</p>
<hr>
</div>
@stop