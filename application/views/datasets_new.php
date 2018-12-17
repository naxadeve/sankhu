<style>
  .nav-tabs,
  .nav-pills {
    position: relative;
  }
  .tabdrop{
    width: 120px;
    margin-top: .5rem;
  }

  .nav-tabs li li i{
    visibility: hidden;
  }

  .hide {
    display: none;
  }

  .input-group-addon {
    position: absolute;
    right: 10px;
    bottom: 13px;
    z-index: 2;
  }

  .contact-search-1 {
    padding: 50px;
    border-bottom: 1px solid #eee;
    padding-left: 0px;
  }

  .responstable th {
    display: none;
    border: 1px solid transparent;
    background-color: lightslategray;
    color: #FFF;
    padding: 1em;
  }

  #reportable{
    overflow: auto;
    margin: 0em auto 3em;
  }
  .responstable {
    margin: 1em 0em;
    width: 100%;
    overflow:auto;
    background: #FFF;
    color: #000;
    border-radius: 0px;
    border: 1px solid #1f5cb2;
    font-size: 16px;
  }
  .responstable tr {
    border: 1px solid #D9E4E6;
  }
  .responstable tr:nth-child(odd) {
    background-color: #EAF3F3;
  }

  .responstable th:first-child {
    display: table-cell;
    text-align: center;
  }
  .responstable th:nth-child(2) {
    display: table-cell;
  }
  .responstable th:nth-child(2) span {
    display: none;
  }
  .responstable th:nth-child(2):after {
    content: attr(data-th);
  }
  @media (min-width: 480px) {
    .responstable th:nth-child(2) span {
      display: block;
    }
    .responstable th:nth-child(2):after {
      display: none;
    }
  }
  .responstable td {
    display: block;
    word-wrap: break-word;
    max-width: 7em;
  }
  .responstable td:first-child {
    display: table-cell;
    text-align: center;
    border-right: 1px solid #D9E4E6;
  }
  @media (min-width: 480px) {
    .responstable td {
      border: 1px solid #D9E4E6;
    }
  }
  .responstable th, .responstable td {
    text-align: left;
    margin: .5em 1em;
  }
  @media (min-width: 480px) {
    .responstable th, .responstable td {
      display: table-cell;
      padding: 0.3em;
    }
  }

  .tabdrop .dropdown-menu a{
    padding: 20px;
  }
  #map-table-jana{
       margin: 20px 0px 60px;
       background: #fff;
       overflow: hidden;
   }

   #reportable{
       overflow: auto;
       margin: 0.5em;
       /* margin-left: 253px; */
   }
   #map-table-jana .text-center h3{

   }

   #map-table-jana .report-down{
     padding: 25px;
     border-bottom: 1px solid #e7e7e7;
   }

   #map-table-jana .repo_filter{
     margin: 30px auto 15px;
   }
   table.dataTable.no-footer{
     border-bottom: 0;
   }
   .dataTables_filter label > input{
   visibility: visible;
   position: relative;
      padding: .1rem .75rem;
       font-size: 1rem;
       line-height: 1.5;
       color: #495057;
       background-color: #fff;
       background-clip: padding-box;
       border: 1px solid #ced4da;
       border-radius: .1rem;
       -webkit-transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
       transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
       transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
       transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
   }


.select_d {
    margin-top: 21px;
}
</style>
<div class="datset-page">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
            	<?php if($data_panel): ?>
            	<form action="<?php echo base_url('view_table') ?>">
	                <div class="form-group">
	                	<h5 align="center" class="select_d">Select Data</h5>
		                <select class="form-control" id="categoryGet">
		                	<option value="">-------Select Category--------</option>
		                	<?php foreach ($data_panel as $key => $cat) { ?>
								<option data-id="<?php echo $cat['category_name']; ?>" value="<?php echo $cat['category_table']; ?>" <?php if($cat['category_table'] ==$this->input->get('tbl')) echo "SELECTED=SELECTED"; ?>><?php echo $cat['category_name']; ?></option>
							<?php } ?>
		                </select>
	                </div>
	            </form>
            <?php endif; ?>
            <div class="tab-content" id="myTabContent">
			    <div class="tab-pane fade show active" id="health" role="tabpanel" aria-labelledby="health-tab">
			      <div class="row">
			        <div class="col-md-12">
			          <div class="p-4">
			            <div class="row">
			                  <div class="col-md-9"><h4 class="text-uppercase m-0"><strong class="keywords"></strong></h4></div>
			                  <div class="col-md-3 clearfix">
			                  </div>
			            </div>
			          </div>
			      </div>
			      </div>
			      <div class="row" id="reportable">

			       <!-- responsive table for displaying contact directory -->
			       <table  class="table table-striped table-bordered table-hover"  id="hydropower">
			         <thead class='thead-light' >
			        <tr>

			        <?php if($data):
			         foreach ($data[0] as $key => $value){

			            if($key == "the geom"){



			            }else{
			          ?>

			          <th><strong><?php echo $key ?></strong></th>
			        <?php }} endif;?>

			        </tr>
			        </thead>


			       <?php if($data):
			        foreach ($data as $v) {

			        ?>

			        <tr class="tr_tbl">
			           <?php foreach ($v as $key => $value ) {

			             if($key == 'the geom'){

			             }else{

			             ?>
			          <td><?php echo $value ?></td>
						<?php } }?>
						        </tr>
						 <?php } endif; ?>
			      </table>
			    </div>
			  </div>
			</div>
            </div>
        </div>
	</div>
</div>
<script>
	$(document).ready( function  () {
		var txt = $('#categoryGet :selected').text();
		$(".keywords").html(txt);
	    $('#categoryGet').on('change',function () {
	        var $this = $(this);
	        var keywords = $('#categoryGet').val();
	        var ntxt = $('#categoryGet :selected').text();
	        $(".keywords").html(ntxt);
	        if(keywords == '') {
	            return false;
	        }   else {
	            var url = $this.closest('form').attr('action');
	            location.href=url + '?tbl=' + keywords;
	        }
	    })
	});
</script>
