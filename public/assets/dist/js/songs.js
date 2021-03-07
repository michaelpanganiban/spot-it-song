$.ajaxSetup({
	headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
}); //handles csrf token for all request

$("#add-song-submit").submit(function(e){
	e.preventDefault()
	const title = $("#song-title").val()
	const author = $("#author").val()
	const lyrics = $("#lyrics").val()
	$.post("addSong", {title, author, lyrics}, function(response){
		if(response.success == true){
			swal("Great! "+response.message, {
		      	icon: "success",
		    });
		}
		else{
			swal("Error! "+response.message, {
		      	icon: "error",
		    });
		}
		setTimeout(function(e){
			location.reload()
		}, 1500)
	})
}) //adding of song

$(".edit-song").click(function(e){
	const song_id = $(this).data('pk')
	const title =  $(this).data('title')
	const author =  $(this).data('author')
	const lyrics =  $(this).data('lyrics')

	$("#edit-song-title").attr('data-pk', song_id)
	$("#edit-song-title").val(atob(title))
	$("#edit-author").val(atob(author))
	$("#edit-lyrics").val(atob(lyrics))

	$("#edit-song-title").attr('data-pk', song_id)
	$("#edit-song-modal").modal('show')
}) //assign value to modal for editing

$("#edit-song-submit").submit(function(e){
	e.preventDefault()
	const song_id = $("#edit-song-title").data('pk')
	const title = $("#edit-song-title").val()
	const author = $("#edit-author").val()
	const lyrics = $("#edit-lyrics").val()
	console.log(title, author, lyrics)
	$.post("editSong", {title, author, lyrics, song_id}, function(response){
		// console.log(response)
		if(response.success == true){
			swal("Great! "+response.message, {
		      	icon: "success",
		    });
		}
		else{
			swal("Error! "+response.message, {
		      	icon: "error",
		    });
		}
		setTimeout(function(e){
			location.reload()
		}, 1500)
	})
}) //editting of song

$(".delete-song").click(function(e){
	const song_id = $(this).data('pk')
	swal({
	  title: "Are you sure?",
	  text: "Once deleted, you will not be able to recover this song!",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  	if (willDelete) {
		    $.post("deleteSong", {song_id}, function(response){
		    	console.log(response)
		    	if(response.success == true){
		    		swal("Great! Your song has been deleted!", {
				      icon: "success",
				    });
		    	}
		    	else{
		    		swal("Error! "+response.message, {
				      	icon: "error",
				    });
		    	}
		    })
	    	setTimeout(function(e){
				location.reload()
			}, 1500)
	  	} 
	  	else {
	    	swal("Your song is safe!");
	  	}
	});
}) //delete song