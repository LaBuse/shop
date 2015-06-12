<?php include_once 'header.php' ?>
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">Search</h1>

                <form class="search form-inline" method="GET">
                    <div class="form-group">
                        <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Keywords" value="">
                    </div>

                    <div class="form-group">
                        <select id="category" name="category" class="form-control">
                            <option value="">Category</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        0 € <input id="price" name="price" type="text" value="" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[0,100]"/> 100 €
                    </div>

                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="picture" name="picture" value="1"> Picture
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                    </div>
                </form>

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">X search results</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="pull-right">
                    <form class="form-inline" method="GET">
                        <div class="form-group">
                            <label for="sort">Sort by</label>
                            <select id="sort" name="sort" class="form-control">
                                <option value="name">Name</option>
                                <option value="price">Price</option>
                                <option value="rating">Rating</option>
                                <option value="reviews">Reviews</option>
                            </select>
                            <select id="direction" name="direction" class="form-control">
                                <option value="ASC">Ascending</option>
                                <option value="DESC">Descending</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                </div>

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-lg-12">

                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">64.99 €</h4>
                            <h4><a href="#">Second Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                        <div class="btns clearfix">
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">64.99 €</h4>
                            <h4><a href="#">Second Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                        <div class="btns clearfix">
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">64.99 €</h4>
                            <h4><a href="#">Second Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                        <div class="btns clearfix">
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">64.99 €</h4>
                            <h4><a href="#">Second Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                        <div class="btns clearfix">
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

        <!-- Footer -->
        <footer>
            <div class="footer" id="footer">
                <div class="container">

                    <div class="row marketing">
                        <div class="col-lg-3 text-center">
                            <div class="img-circle">
                                <span class="glyphicon glyphicon-time text-warning"></span>
                            </div>
                            <h2>Heading</h2>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 text-center">
                            <div class="img-circle">
                                <span class="glyphicon glyphicon-gift text-info"></span>
                            </div>
                            <h2>Heading</h2>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 text-center">
                            <div class="img-circle">
                                <span class="glyphicon glyphicon-envelope text-primary"></span>
                            </div>
                            <h2>Heading</h2>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        </div><!-- /.col-lg-3 -->
                         <div class="col-lg-3 text-center">
                            <div class="img-circle">
                                <span class="glyphicon glyphicon-thumbs-up text-success"></span>
                            </div>
                            <h2>Heading</h2>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3>Services</h3>
                            <ul>
                                <li> <a href="#">Etiam porta sem malesuada</a> </li>
                                <li> <a href="#">Magna mollis euismod</a> </li>
                                <li> <a href="#">Nullam id dolor id</a> </li>
                                <li> <a href="#">Lacinia odio sem nec elit</a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
                            <h3>Help</h3>
                            <ul>
                                <li> <a href="#">Donec sed odio dui</a> </li>
                                <li> <a href="#">Cras justo odio</a> </li>
                                <li> <a href="#">Dapibus ac facilisis inm</a> </li>
                                <li> <a href="#">Egestas eget quam</a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3>Follow Us</h3>
                            <ul class="social">
                                <li class="facebook"> <a href="#"> <i class="fa fa-facebook">   </i> </a> </li>
                                <li class="twitter"> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                                <li class="google-plus"> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                                <li class="pinterest"> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                                <li class="youtube"> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
                            <h3>Contact</h3>
                            <address>
                                <strong>Shop</strong><br>
                                15 springfield way<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">(+33)</abbr>1 23 45 67 89
                                <a href="mailto:contact@shop.com">contact@shop.com</a>
                            </address>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">Copyright © Shop 2014. All right reserved.</div>
                        <div class="col-lg-6">
                            <div class="pull-right">
                                <ul class="nav nav-pills payments">
                                    <li><i class="fa fa-cc-visa"></i></li>
                                    <li><i class="fa fa-cc-mastercard"></i></li>
                                    <li><i class="fa fa-cc-amex"></i></li>
                                    <li><i class="fa fa-cc-paypal"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
            <!--/.footer-bottom-->
        </footer>

    </div><!-- /.container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-slider.js"></script>

    <script>
    $("form.search #price").slider({});
    </script>

</body>
</html>
