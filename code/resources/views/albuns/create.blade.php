<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>New Album</title>
    </head>
    <body>
    	<form action="{{ route('saveAlbum') }}" method="POST">
    		@csrf
    		<label for="">Artist</label>
    		<select name="artist" id="artistDrop">
    			<option value="Led Zeppelin">Led Zeppelin</option>
    			<option value="Nirvana">Nirvana</option>
    			<option value="Pink Floyd">Pink Floyd</option>
			</select><br />
    		<label for="">Name</label>
    		<input type="text" name="name"><br />
    		<label for="">Year</label>
    		<input type="number" name="year"><br />
    		<button>Salvar</button>
    	</form>
    	<script>
    	/*
        	$(document).ready(function () {
					
        		    //Basic ZGV2ZWxvcGVyOlpHVjJaV3h2Y0dWeQ==
                	var url = "https://moat.ai/api/task/";
    
                    $.getJSON(url, function (data) {
                        $.each(data, function (index, value) {
                            // APPEND OR INSERT DATA TO SELECT ELEMENT.
                            $('#sel').append('<option value="' + value.ID + '">' + value.Name + '</option>');
                        });
                    });
                });
           */
        </script>
    </body>

</html>