<!--main content start-->
	<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->




    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Sub-categories
          </header>
          <div class="panel-body">

            <br>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal bucket-form" action="sub_cat_insert" method="POST">
                  <div class="form-group">
										<input type="hidden" name="tbl" value="<?php echo $tbl ?>">
                    <label class="col-sm-3 ">Select Summary: </label>

                          <div class="row col-md-9">
                    <?php foreach($data as $data){  ?>

                      <div class="col-sm-4 icheck ">

                        <div class="minimal single-row">
                          <div class="radio ">

                            <input tabindex="3" type="radio" value="<?php echo $data['eng_lang'] ?>"  name="col" >

                            <label><?php echo $data['nepali_lang'] ?></label>
                          </div>
                        </div>
                      </div>


                    <?php } ?>


                      </div>







                  </div>
                  <br/>
                  <button type="submit" name="submit" class="btn btn-info">Update</button>
                </form>
              </div>

            </div>



          </section>
        </div>
      </div>










      <!-- page end-->
    </section>
  </section>
  <!--main content end-->