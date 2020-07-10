$(document).ready(function(){
    function showEditBox(editobj,id) {
	    $('#frmAdd').hide();
	    $(editobj).prop('disabled','true');
	    var currentMessage = $("#message_" + id + " .message-content").html();
	    var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage_'+id+'">'+currentMessage+'</textarea><button name="ok" onClick="callCrudAction(\'edit\','+id+')">Save</button><button name="cancel" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
	    $("#message_" + id + " .message-content").html(editMarkUp);
    }

    function cancelEdit(message,id) {
	    $("#message_" + id + " .message-content").html(message);
	    $('#frmAdd').show();
    }

    function callCrudAction(action,id) {
	    $("#loaderIcon").show();
	    var queryString;
	    switch(action) {
		    case "add":
			    queryString = 'action='+action+'&txtmessage='+ $("#txtmessage").val();
		    break;
		    case "edit":
			    queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#txtmessage_"+id).val();
		    break;
		    case "delete":
			    queryString = 'action='+action+'&message_id='+ id;
		    break;
	    }	 
	    $.ajax({
	        url: "crud_messages.php",
	        data:queryString,
	        type: "POST",
	        success:function(data){
		        switch(action) {
			    case "add":
				    $("#comment-list-box").append(data);
			    break;
			    case "edit":
				    $("#message_" + id + " .message-content").html(data);
				    $('#frmAdd').show();
				    $("#message_"+id+" .btnEditAction").prop('disabled','');	
			    break;
			    case "delete":
				    $('#message_'+id).fadeOut();
			    break;
		    }
		        $("#txtmessage").val('');
		        $("#loaderIcon").hide();
	    },
	    error:function (){}
	    });
    }
});