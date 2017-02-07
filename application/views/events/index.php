<?php include('/../partials/header.php'); ?>

<div class="jumbot">
	
	<div class="row">
		<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
			<h2>Events Managment Form 			
				<span class="small pull-right">					
          <?php
          echo date('d-m-Y'); 
          echo " | ";
          date_default_timezone_set("Asia/Kolkata");
          echo date("h:i A"); 
          ?> 
        </span>
      </h2>						 
    </div>
  </div>
  
  <div class="row">		
    
    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
     <div class="alert alert-success text-center" id="success_delete"></div>        		
     <div class="alert alert-danger text-center" id="failed_delete"></div>		

     <a href="#" data-toggle="modal" data-target="#modalAdd" type="submit" class="btn btn-danger pull-right">
       <i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Events</a>	
     </div>

     <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1" id="showTable" style="margin-top: 15px;">
       <table class="table table-bordered table-hover" cellspacing="0" width="100%" id="example" style="margin-top: 15px;">
        
        <thead>
         <tr>
          <th>Sr.No</th>
          <th>Event Title</th>
          <th>Event Date</th>
          <th>Event Time</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>

    </table>			 
  </div>
  
  <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1" id="showAlterModal">
   <h5>Sorry there is no events found...start with <a href="#" data-toggle="modal" data-target="#modalAdd" id="colorh">creating new</a> one</h5>
 </div>
</div>
</div>


<!-- Modal for Add record-->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
   <div class="modal-content" id="modalMsg">
    
    <div class="modal-header">
      <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Event Management</h4>
    </div>
    
    <div class="modal-body" >
      <div class="row loader_single">
       <div class="col-md-2 col-md-offset-5">
        <div class="single8 pull-right"></div>
        
      </div>
    </div>

    <div class="alert alert-success text-center" id="success"></div>        		
    <div class="alert alert-danger text-center" id="failed"></div>	
    
    <form id="event_add_form" method="post" action="<?php echo site_url('events/addEvent'); ?>">			  
     <div class="form-group">
       <label for="exampleInputTitle1">Event Title</label>
       <input type="text" class="form-control" id="event_title" placeholder="Enter Your Event">
     </div>

     <div class="row">				 	
       <div class="col-md-6">
        <div class="input-append datePicker">
          <label for="exampleInputTitle1">Event Date</label>
          <input data-format="dd-MM-yyyy" type="text" class="form-control" placeholder="Select Event Date" id="event_date"></input>
          <span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group timePicker">
          <label for="exampleInputTitle1">Event Time</label>
          <input data-format="hh:mm:ss PP" type="text" class="form-control" placeholder="Select Event Time" id="event_time"></input>
          <span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="exampleInputDesc1">Event Description</label>
      <textarea rows="3" class="form-control" id="event_desc"  placeholder="Event Description"></textarea>			    
    </div>
  </div>
  
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-danger">Save</button>
  </div>
</div>
</form>
</div>
</div>

<!-- Modal for Edit record-->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
   <div class="modal-content">
    
    <div class="modal-header">
      <button type="button" class="close" id="closeModel" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Event Management</h4>
    </div>

    <div class="modal-body">  

      <div class="row loader_single">
       <div class="col-md-2 col-md-offset-5">
        <div class="single8 pull-right"></div>
        
      </div>
    </div>
    
    <div class="alert alert-success text-center" id="success_e"></div>        		
    <div class="alert alert-danger text-center" id="failed_e"></div>	
    
    <form id="event_edit_form" method="post" action="<?php echo site_url('events/editEvent'); ?>">
     
     <div class="form-group">
       <label for="exampleInputTitle1">Event Title</label>
       <input type="hidden" id="e_id">
       <input type="text" class="form-control" id="e_title" placeholder="Enter Your Event">
     </div>

     <div class="row">			 	
       
       <div class="col-md-6">
        <div  class="input-append datePicker">
          <label for="exampleInputTitle1">Event Date</label>
          <input data-format="dd-MM-yyyy" type="text" class="form-control" placeholder="Select Event Date" id="e_date"></input>
          <span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
        </div>
      </div> 

      <div class="col-md-6">
        <div class="form-group timePicker">
          <label for="exampleInputTitle1">Event Time</label>
          <input data-format="hh:mm:ss PP" type="text" class="form-control" placeholder="Select Event Time" id="e_time"></input>
          <span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
        </div>
      </div>				 	
    </div>	
    
    <div class="form-group">
     <label for="exampleInputDesc1">Event Description</label>
     <textarea rows="3" class="form-control" id="e_desc"  placeholder="Event Description"></textarea>			    
   </div>	
 </div>
 
 <div class="modal-footer">
  <button type="button" id="closeModel" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-danger">Update</button>
</div>
</div>
</form>
</div>
</div>



<?php include('/../partials/footer.php'); ?>




<script>   

	$( document ).ready(function() {
   
		$('.loader_single').hide(); 

		$('.timePicker').datetimepicker({
      pickDate: false,
      pick12HourFormat: true
    });

		$('.datePicker').datetimepicker({
      language: 'en',
      pickTime: false
    });

   getAllRecord('Fetching Data...Please Wait..');

 }); 

	function loaderAnimate(msg)
	{
		$('body').prelodr({
     prefixClass: 'prelodr',
     show: function(){
	            //console.log('Show callback')
	          },
	          hide: function(){
	            //console.log('Hide callback')
	          }
	        })		 
   $('body').prelodr('in', msg);	       
 }
 
 function getAllRecord(msg)
 {	
  if (msg !== undefined) {
    
   loaderAnimate(msg);
 }	
 
 $('#example').DataTable( {
   "bInfo" : false,   
   "ajax": {
     "url": "<?php echo site_url('events/getAllRecords');?>",
     "deferRender": true,            	             
     "dataSrc": "", 
   },
   "columns": [        	         	
   { "data": "id" },
   { "data": "title" },
   { "data": "date" },
   { "data": "time" },
   { "data": "desc" },
   {
     "mData": null,
     "bSortable": false,
     "mRender": function(data, type, full) 
     {	              
      return '<a onClick="editEvent('+data.id+')" class="btn btn-info btn-sm" href="javascript:void(0)">' + 'Edit ' + ' </a>  <a onClick="deleteEvent('+data.id+')" class="btn btn-danger btn-sm" href="javascript:void(0)">' + 'Delete' + '</a>';              
    }
  }],
  "bDestroy": true,
  "aaSorting": [[ 0, "desc" ]],
  
} );

 
 $('body').prelodr('out');		 

 
 
}    


$('#event_add_form').submit(function(e){

 $('.loader_single').show();

 var frm = $('#event_add_form');
 
 var formData = {
  'event_title'  : $('#event_title').val(),
  'event_date'   : $('#event_date').val(),
  'event_time'   : $('#event_time').val(),
  'event_desc'   : $('#event_desc').val()
}; 

$.ajax({
  type        : frm.attr('method'), 
  url         : frm.attr('action'), 
  data        : formData, 
  success:function(data){
   
    

    if (data){
     $('#success').show();		 
     $('#success').text('Success : Event created successfully');
     $('#event_title').val(''),
     $('#event_date').val(''),
     $('#event_time').val(''),
     $('#event_desc').val('')
   }
   else
   {
     $('#failed').show();
     $('#failed').text('Oopps : Event can not be created');	
   }                
 }            
}).done(function(data) {
 $('.loader_single').hide();
 $("#success").delay(2000).fadeOut("slow");
 $("#failed").delay(2000).fadeOut("slow");
 getAllRecord();	         	
});
        // stop the form from submitting the normal way and refreshing the page
        e.preventDefault();
      });


function deleteEvent(id)
{
  loaderAnimate('Deleting Record...Please Wait...');

  $.ajax({
    type        : 'GET',
    url         : '<?php echo site_url('events/deleteRecord');?>',
    data        : {id:id}, 
    success:function(data){
      
       		// $('body').prelodr('out');      
           if (data) 
           {
             $('#success_delete').show();	
             $('#success_delete').text('Success : Event Deleted successfully');             		
           }
           else
           {
             $('#failed_delete').show();	
             $('#failed_delete').text('Oopps : Event can not delete');
           }		    
         }
       }).done(function(data){        	
        
         getAllRecord();

         $("#success_delete").delay(3000).fadeOut("slow");
         $("#failed_delete").delay(3000).fadeOut("slow"); 
         
       });
     }

     function editEvent(id)
     { 		 
       $.ajax({
        type        : 'GET',
        url         : '<?php echo site_url('events/getRow');?>',
        data        : {id:id}, 
        success:function(data){
         data = $.parseJSON(data);             
         $('#e_id').val(data.id);
         $('#e_title').val(data.title);
         $('#e_date').val(data.date);
         $('#e_time').val(data.time);
         $('#e_desc').val(data.desc);
       }
     }).done(function(){
       $('#modalEdit').modal();
     });  	
   }

   $('#event_edit_form').submit(function(e){

     $('.loader_single').show();
     var frm = $('#event_edit_form');
     
     var formData = {
       'e_id'  : $('#e_id').val(),
       'e_title'  : $('#e_title').val(),
       'e_date'   : $('#e_date').val(),
       'e_time'   : $('#e_time').val(),
       'e_desc'   : $('#e_desc').val()
     }; 
     
     $.ajax({
      type        : frm.attr('method'), 
      url         : frm.attr('action'), 			
            data        : formData, //data      : frm.serialize(),
            success:function(data){
              
              if (data)
              {
               $('#success_e').show();		 
               $('#success_e').text('Success : Event Updated successfully');
               $('#e_title').val(''),
               $('#e_date').val(''),
               $('#e_time').val(''),
               $('#e_desc').val('')
             }
             else
             {
               $('#failed_e').show();
               $('#failed_e').text('Oopps : Event can not updated');	
             }
           }            
         }).done(function(data) { 
           
           $('.loader_single').hide();
           $("#success_e").delay(2000).fadeOut("slow",function(){
            $('#modalEdit').modal("hide");
          });
           $("#failed_e").delay(2000).fadeOut("slow",function(){
            $('#modalEdit').modal("hide");
          }); 
           
           getAllRecord();	 
         });
         
         e.preventDefault();
       });

     </script>