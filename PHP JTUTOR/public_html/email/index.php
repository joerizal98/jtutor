<?include('header.php');?>
<!-- Bootstrap -->
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<!-- dataTables -->
<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
body {
	padding: 20px 10px 20px 10px;
	background:#ADD8E6;
}
html{
    
}
</style>
<?
    if (empty($_GET['id'])){
        header("location: https://jtutor.ml/emails/");
    }else if($_GET['id'] == "noreply"){
        $email = "noreply.jtutor@gmail.com";
        $file = "json_noreply.php";
    }else if($_GET['id'] == "juliana"){
        $email = "juliana.jtutor@gmail.com";
        $file = "json_juliana.php";
    }else if($_GET['id'] == "feedback"){
        $email = "feedback.jtutor.ml";
        $file = "json_feedback.php";
    }else{
        header("location: https://jtutor.ml/emails/");
    }
?>

<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			<h3 align="center">Email Inbox <a href="https://mail.google.com" target="_blank"><?echo $email;?></a></h3>
			<hr>

			<table id="myTable" class="display" cellspacing="0" width="100%" >
				<thead>
					<tr>
						<th>No</th>
						<th>Subject</th>
						<th>Name</th>
						<th>Email</th>
						<th>Date</th>
						<th>Reply</th>
					</tr>
				</thead>
				<tbody id="inbox" >

				</tbody>
			</table>
				
		</div>					
	</div>					
</div>

<!-- Modal message -->		
<div id="addModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <div class="modal-content" style="width: 130%">
       <div class="modal-header" style="width: 100%">
         <h4 class="modal-title">Message</h4>
         <button type="button" class="close" data-dismiss="modal" style="float:left">&times;</button>
         
       </div>
       <div class="modal-body" id="message" style="width: 100%">
         
       </div>
     </div>
   </div>
</div>
    <style>
        .modals {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 5; /* Sit on top */
            padding-top: 80px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modals ::-webkit-scrollbar {
            width: 0px;  /* remove scrollbar space */
            background: transparent;  /* optional: just make scrollbar invisible */
        }
        /* optional: show position indicator in red */
        .modals ::-webkit-scrollbar-thumb {
            background: #FF0000;
        }
        
        /* Modal Content */
        .modals-content {
            background-color: #fefefe;
            margin-top:0px;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
        }
        
        /* The Close Button */
        .closes {
            color: #000;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .closes:hover,
        .closes:focus {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    
    <div id="myModal" class="modals">
    
      <!-- Modal content -->
      <div class="modals-content">
        <span class="closes">&times;</span>
        <p><iframe id="profile" style="width:100%; height:470px" frameBorder="0" scrolling="yes"></iframe></p>
      </div>
    
    </div>
    <script>
        function myFunction(name) {
            var modal = document.getElementById('myModal');
        
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("closes")[0];
        
            // When the user clicks the button, open the modal 
        
                document.getElementById('profile').src = name;
                modal.style.display = "block";
        
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
        
            }
        
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        
        }
    </script>

<br><br>
<!-- jQuery -->
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<!-- dataTables -->
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<!-- loading-overlay -->
<script src="//cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@1.6.0/src/loadingoverlay.min.js"></script>
<script>		
$(function() {

	var json;
	
	$.LoadingOverlay("show");

	$.ajax({
		type: "POST",
		url: "<?echo $file;?>",
		data: {
			inbox: ""
		},
        dataType: 'json'
	}).done(function(d) {
		if(d.status === "success"){
			var tbody = "";
			json = d.data;
			$.each(json, function(i, a) {
				tbody += '<tr><td>' + (i + 1) + '</td>';
				tbody += '<td><a href="#" data-id="' + i + '" class="view" data-toggle="modal" data-target="#addModal">' + a.subject.substring(0, 20) + '</a></td>';
				tbody += '<td>' + (a.from.name === "" ? "[empty]" : a.from.name) + '</td>';
				tbody += '<td><a href="mailto:' + a.from.address + '?subject=Re:' + a.subject + '">' + a.from.address + '</a></td>';
				tbody += '<td>' + a.date + '</td>';
				var lins = "'https://www.jtutor.ml/email/reply/?email="+ a.from.address +"&subject="+ a.subject + "'"
				tbody += '<td><button onclick="myFunction('+lins+')" style="cursor:select">Reply</button></td></tr>';
			});
			$('#inbox').html(tbody);
			$('#myTable').DataTable();
			$.LoadingOverlay("hide");
		}else{
			alert(d.message);
		}
	});
	$('body').on('click', '.view', function () {
		var id = $(this).data('id'); 
		var message = json[id].message;
		var attachments = json[id].attachments;
		var attachment = '';
		if(attachments.length > 0){
			attachment += "<hr>Attachments:";
			$.each(attachments, function(i, a) {
				var file = json[id].uid + ',' + a.part + ',' + a.file + ',' + a.encoding;
				attachment += '<br><a href="#" class="file" data-file="' + file + '">' + a.file + '</a>';
			});
		}
		$('#message').html(message + attachment); 
	});
	$('body').on('click', '.file', function () {
		$.LoadingOverlay("show");
		var file = $(this).data('file').split(",");
		$.ajax({
			type: "POST",
			url: "<?echo $file;?>",
			data: {
				uid: file[0],
				part: file[1],
				file: file[2],
				encoding: file[3]
			},
			dataType: 'json'
		}).done(function(d) {
			if(d.status === "success"){
				$.LoadingOverlay("hide");
				window.open(d.path, '_blank');
			}else{
				alert(d.message);
			}
		});
	});
			
});
</script>
<? include('../cursor.html'); ?>
