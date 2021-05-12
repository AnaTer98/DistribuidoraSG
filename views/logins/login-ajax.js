$('#formLogin').submit(function (e) { 
    e.preventDefault();

    var usuario = $.trim($('#inputNombre').val());
    var correo = $.trim($('#inputCorreo').val());
    var password = $.trim($('#inputContrasena').val());
    var number = $.trim($('#inputNumber').val());

    if(usuario.length == ""|| password == ""){
     console.log('Nel perro ingresa los datos');
     console.log(password);
return false;
    }else{
        $.ajax({
            method:"POST",
            url:"../libs/registro-user.php",
            //type:"POST",
            datatype:"json",
            data:{usuario:usuario,correo:correo,password:password,number:number},
            success:function(data){
                if (data == "null") {
                  console.log('Datos no jalados');
                }else{
                   console.log(data);
                            window.location.href = "../index.php";
                
                }
            }


        });
    }


    
});