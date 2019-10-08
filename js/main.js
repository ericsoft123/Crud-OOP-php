
$(function(){
  display_table();  //show table on load
     
});

function display_table(){
  //
  $('.table_data').show();//to show table;
  $('#cover-spin').show();
        //
        $.ajax({
         url:"viewall",
         type:"get",
         
         
         dataType:"json",
         success:function(data)
         {
            var htmldata1='';
            $.each(data,function(i,item){

                
                htmldata1+=`<tr>
                <th scope="row">${item.id}</th>
                <td>${item.first_name}</td>
                <td>${item.surname}</td>
                <td>${item.email}</td>

                <td><a href="#" onclick="return view_user('${item.id}')" class="btn-green bt-sm">Edit</a> <a class="btn-red bt-sm" href="#" onclick="return viewdelete_user('${item.id}')">delete</a></td>
                
                </tr>
                `;
           
            });
            $("#user_table tbody").html(htmldata1);//dynamic display data in table
         
           setTimeout(function(){
            $('#cover-spin').hide();
          }, 500);
           
         }
         
       });
        //
  //
}

function add_form(){//add user form
  $('.resetform').val('');//to reset form
  $('.button_action').html(`<a href="#" class="btn-green bt-big bt-right" onClick="return insert();">Submit</a>`);//here is to add insert btn actions;

return false;
}
function view_user(id){
  $('.message').html('');//delete message (successful or error)
  //
  $('.button_action').html(`<a href="#" class="btn-green bt-big bt-right" onClick="return update();">Update</a>`);//here is to add insert btn actions;
  $('#cover-spin').show();
        //
        $.ajax({
         url:"view_user",
         type:"post",
         data:{id:id},
         
         
         dataType:"json",
         success:function(data)
         {
            $('#id').val(data.id);
            $('#first_name').val(data.first_name);
            $('#surname').val(data.surname);
            $('#email').val(data.email);
            $('#username').val(data.username);
            $('#password').val(data.password);
            setTimeout(function(){
              $('#cover-spin').hide();
            }, 500);
         }
         
       });
       return false;
        //
  //
}


function insert(){
    //start
    $('#cover-spin').show();
    $.ajax({
            url:"insert",
            type:"post",
            data:$('#form_user').serialize(),
            dataType:"json",
            success:function(data)
            {
              $('.errors').hide();//hide all errors by default;
              $('.form-control').css({"border": "1px solid #32cd32"});//success field
              $('.message').html('');

              if(data=='1')
              {
                //succeed
$('.message').html(`<div class="alert alert-primary" role="alert">
Your Submission has been successful
</div>`);
display_table(); 
$('.resetform').val('');
                //
                setTimeout(function(){
                  $('#cover-spin').hide();
                }, 500);
              }
              else{
                //failed
               
                $('.message').html(`<div class="alert alert-danger" role="alert">
                Please check your entry ,fields with errors are highlighted in red
              </div>`);
            for(var i=0;i<data.length;i++)
            {
  console.log(data[i]);
  $('#'+data[i]).css({"border": "1px solid red"});//when form filled return with errors
  $('.'+data[i]).show();//show errors
            }
                setTimeout(function(){
                  $('#cover-spin').hide();
                }, 500);

                //
              }
              
                
            }
            
          });
          return false;
    //end code
        }
      

        function update(){
          //start
          $('#cover-spin').show();
          $.ajax({
                  url:"update",
                  type:"post",
                  data:$('#form_user').serialize(),
                  dataType:"json",
                  success:function(data)
                  {
                    $('.errors').hide();//hide all errors by default;
                    $('.form-control').css({"border": "1px solid #32cd32"});//success field
                    $('.message').html('');
      
                    if(data=='1')
                    {
                      //succeed
      $('.message').html(`  <div class="alert alert-primary" role="alert">
      Your Submission has been successful
      </div>`);
      display_table(); 
                      //
                      setTimeout(function(){
                        $('#cover-spin').hide();
                      }, 500);
                    }
                    else{
                      //failed
                     
                      $('.message').html(`<div class="alert alert-danger" role="alert">
                      Please check your entry ,fields with errors are highlighted in red
                    </div>`);
                  for(var i=0;i<data.length;i++)
                  {
        console.log(data[i]);
        $('#'+data[i]).css({"border": "1px solid red"});//when form filled return with errors
        $('.'+data[i]).show();//show errors
                  }
                      setTimeout(function(){
                        $('#cover-spin').hide();
                      }, 500);
      
                      //
                    }
                    
                      
                  }
                  
                });
                return false;
          //end code
              }



              function viewdelete_user(id){
                //
                $('.message').html('');//delete message
                $('#cover-spin').show();
                      //
                    
                          $('#id').val(id);
                
                         
                          setTimeout(function(){
                            $('#cover-spin').hide();
                            $('#deleteModal').modal('show');
                          }, 500);
                      
                     return false;
                      //
                //
              }
              
 
              function delete_user(){
                //
               var id=$('#id').val();
                $('#cover-spin').show();
                      //
                      $.ajax({
                       url:"delete_user",
                       type:"post",
                       data:{id:id},
                       
                       
                       dataType:"json",
                       success:function(data)
                       {
                      if(data=='1'){//when successful deleted
                        display_table(); 
                        setTimeout(function(){
                          $('#cover-spin').hide();
                          $('#deleteModal').modal('hide');
                        }, 500);
                      }
                          
                       }
                       
                     });
                     return false;
                      //
                //
              }
            