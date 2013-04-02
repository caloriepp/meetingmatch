$(document).ready(function() {
            $("#submitProfile").click(function(){
                console.log('submitProfile click');
  
                var formData = $("#postProfile").serialize();
  
                $.ajax({
                    type: "POST",
                    url: "meetingmatch.php",
                    cache: false,
                    data: formData,
                    success: function(){
                        console.log('success insert to skills table')
                    },
                    error: function(){
                        console.log('fail insert to skills table')
                    }
                });
  
                return false;
            });
        });