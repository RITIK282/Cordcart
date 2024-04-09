<?php include 'header.php' ?>

<?php $gcd = getAllCourseData(); ?>

<title>Courses</title>

        <section class="main-section">
                <div class="product-container">
                    <main>
                    <h3 style="color: red;font-size: 50px;margin-bottom: 30px;">OUR COURSES</h3>
                    <div class="products">
                        <?php foreach($gcd as $scd){ ?>
                        <div class="product">
                            <div class="product-under">
                                <figure class="product-image">
                                    <img src="Course Images\<?php echo $scd[8] ?>" height="200px"  width="200px">
                                    <div class="product-over">
                                        <button
                                            class="btn btn-small addToCart"
                                            data-product-id="<?php echo $scd[0] ?>"
                                        >
                                            <i class="fas fa-cart-plus"></i>Add
                                            to cart
                                        </button>
                                        <a
                                            href="courses/standard-course.php?course_id=<?php echo $scd[0] ?>"
                                            class="btn btn-small"
                                            >More Info</a
                                        >
                                    </div>
                                </figure>
                                <div class="product-summary">
                                    <h4 class="productName"><?php echo $scd[1] ?></h4>
                                
                                    <p>
                                    <?php echo $scd[2] ?>
                                    </p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <h6 class="price">
                                        Rs.<span class="priceValue"><?php echo $scd[7] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
        </section>

<?php include 'footer.php' ?>