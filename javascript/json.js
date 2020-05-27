$(document).ready(function(){
    // signin section
    $('#submit1').on( 'click', function(e){
        e.preventDefault();
        var accessId = $('#accessId').val();
        var accessPassword = $('#accessPassword').val();
        
        $.ajax({
            url: "php/signin.php",
            method: "post",
            data: {"accessId": accessId, "accessPassword":accessPassword},
            success: (data)=>{
                if (typeof(data)== "string" ){
                    data = JSON.parse(data);
                }
                if(data.response == "success"){
                            $('.sidenav').attr("id","mySidenav");

                            $('#RmySidenav').css("width","0px");
                            $('#main').css("margin-left", "0px"); 
                            $('body').css("backgroundColor", "white");
                            $('#accessId').val("");
                            $('#accessPassword').val("");
                            $('#err').css("color","green");
                            $('#err').text("Signed In");


                            if(data.export == "success"){
                            window.open("php/excel.php", '_blank');
                            }
                }
                else{
                    $('#adminAlert').show();
                    $('#adminAlert').text(data.message);
                }

            },
            error:(err) => {
                alert(err)
            }
        })

    });

    // registration section
    $('#submit2').on( 'click', function(e){
        e.preventDefault();
         var fname = $('#fname').val();
         var sname = $('#sname').val();
         var othernames = $('#othernames').val();
         var email = $('#email').val();
         var sex = $("input[type=radio]:checked ").val();
         var age = $('#age').val();
         var programme = $('#programme').val();
         var department = $('#department').val();
         var phone = $('#phone').val();
         var residence = $('#residence').val();
        //  {"fname":fname,"sname":sname,"othernames":othernames, "email":email,"sex":sex, "age":age,"programme":programme, "department":department,"phone":phone,"residence":residence},
        //  $('#register_form').serialize()
        // console.log($('#register_form').serialize({}));
        // console.log(sex);
        // console.log(programme);

        if(!fname||!sname||!email||!sex||!age||!programme||!department||!phone||!residence){
            $('#alert').show();
            $('#alert').text("Please Fill All Fields");
            $('#alert').hide(4000);
         }else{
            $.ajax({
                url: "php/register.php",
                method: 'post',
                data: {"fname":fname,"sname":sname,"othernames":othernames, "email":email,"sex":sex, "age":age,"programme":programme, 
                "department":department,"phone":phone,"residence":residence},
                datatype: 'json',
    
                success: (data) =>{
                    if(typeof(data)== "string"){
                        data = JSON.parse(data);
                    }
                    if(data.response == "success"){
                        $('#alert').hide();
                        $('#alert2').show();
                        $('#alert2').text(data.message);
                        $('#fname').val("");
                        $('#sname').val("");
                        $('#othernames').val("");
                        $('#email').val("");
                        $('#age').val("");
                        $('#programme').val("");
                        $('#department').val("");
                        $('#phone').val("");
                        $('#residence').val("");

                        $('#alert2').hide(4000);



    
                    }else if(data.response == "error"){
                        console.log(data.message);
                    }
                }
            })  
        } 
    });

    $('#search').on( 'keyup', function(e){
        e.preventDefault();
         var search = $('#search').val();

            if (search != ""){            
            $.ajax({
            url: "php/search.php",
            method: 'post',
            data: {"search":search},
            datatype: 'json',

            success: (data) =>{
                if(typeof(data)== "string"){
                    data = JSON.parse(data);
                }
                if(data.response == "success"){
                    // console.log(data.search);

                    var new_table = "";
	
						$.each(data.search, (i,val)=>{
							new_table += '<tr>'+
							'<td>'+ val.firstname +'</td>'+
							'<td>'+ val.lastName+'</td>'+
							'<td>'+ val.othernames +'</td>'+
							'<td>'+ val.sex +'</td>'+
                            '<td>'+ val.age +'</td>'+
                            '<td>'+ val.email +'</td>'+
                            '<td>'+ val.residence +'</td>'+
                            '<td>'+ val.programme+'</td>'+
                            '<td>'+ val.department +'</td>'+
                            '<td>'+ val.phone +'</td>'+
							'<tr>';
						});
						$("#find").text(data.search.length + " SEARCH RESULT(S) FOUND " );
                        $("#find").fadeIn();
                        // $("#search").val("")
                        $("#disp_tbl tbody tr").remove();
                        $("#disp_tbl tbody").append(new_table);

                }else if(data.response == "error"){
                    console.log(data.message);
                }
            }
        })
     }else{
        $("#disp_tbl tbody tr").remove();
        $("#find").hide();
     }
         });

            $.ajax({
                url: "php/date.php",
                method: 'post',
                datatype: 'json',

                success: (data) =>{
                    if(typeof(data)== "string"){
                        data = JSON.parse(data);
                    }
                    if(data.response == "success"){
                    
                    }else if(data.response == "error"){
                        console.log(data.message);
                    }
                }
            })

              
               
                    
            

            $('.level').on( 'change', 'select', function(e){
                e.preventDefault();
                e.stopPropagation();

                var selected = $(this).find('option:selected');
                var search = selected.val();

                
                //  var search1 = $('#search_butt1').val();
                //  var search2 = $('#search_butt2').val();
                //  var search3 = $('#search_butt3').val();
                //  var search4 = $('#search_butt4').val();

                // console.log(search1);
                // console.log(search2);
                // console.log(search3);
                    if (search != ""){            
                    $.ajax({
                    url: "php/level.php",
                    method: 'post',
                    data: {"search_btn":search},
                    datatype: 'json',
        
                    success: (data) =>{
                        if(typeof(data)== "string"){
                            data = JSON.parse(data);
                        }
                        if(data.response == "success"){
                            // console.log(data.search);
        
                            var new_table = "";
            
                                $.each(data.search, (i,val)=>{
                                    new_table += '<tr>'+
                                    '<td>'+ val.firstname +'</td>'+
                                    '<td>'+ val.lastName+'</td>'+
                                    '<td>'+ val.othernames +'</td>'+
                                    '<td>'+ val.sex +'</td>'+
                                    '<td>'+ val.age +'</td>'+
                                    '<td>'+ val.email +'</td>'+
                                    '<td>'+ val.residence +'</td>'+
                                    '<td>'+ val.programme+'</td>'+
                                    '<td>'+ val.department +'</td>'+
                                    '<td>'+ val.phone +'</td>'+
                                    '<tr>';
                                });
                                $("#find").text(data.search.length + " SEARCH RESULT(S) FOUND " );
                                $("#find").fadeIn();
                                // $("#search").val("")
                                $("#disp_tbl tbody tr").remove();
                                $("#disp_tbl tbody").append(new_table);
        
                        }else if(data.response == "error"){
                            console.log(data.message);
                        }
                    }
                })
             }else{
                $("#disp_tbl tbody tr").remove();
                $("#find").hide();
             }
                 });

});