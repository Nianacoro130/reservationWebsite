/*verif login*/
$(function(){

    $("#form1").on("submit",function (event)
    {
        event.preventDefault();

        $.post(
        './login.php',
            {
                email : $('#inputEmailC').val(),
                motdepasse : $('#inputMdpC').val()
            },
            
            function(data){
                
                if(data == 1){
                    $('#ErreurMembers').html('<li>Succes</li>');
                    $('#ErreurMembers').fadeOut();
                    document.location.reload();
                }
                else if (data == 0){
                    $('#ErreurMembers').modal('show');
                    $("#ErreurMembers .errormtxt").text('Veuillez remplir tous les champs !');

                }
                else if(data == -1){
                    $('#ErreurMembers').modal('show');
                    $("#ErreurMembers .errormtxt").text('Compte non existant !');

                }
                else if (data == -2){
                    $('#ErreurMembers').modal('show');
                    $("#ErreurMembers .errormtxt").text('Motdepasse inccorect !');
                }
                console.log(data);
                console.log($('.messagerFlash'))
                  
            }
            
        ),
        'text'

    });

});

/* verif register*/
$(function(){

    $("#form2").on("submit",function (event)
    {
        event.preventDefault();

        $.post(
        './register.php',

            {   nom: $('#inputNom').val(),
                prenom: $('#inputPrenom').val(),
                adresse: $('#inputAdr').val(),
                ville: $('#inputVille').val(),
                codePostal: $('#inputCdp').val(),
                email : $('#inputMail').val(),
                motdepasse : $('#inputMdp').val()
            },

            
            function(data){
                
                if(data == 1){
                    $('#ErreursMembers').modal('show');
                    $("#ErreurMembers .errormtxt").text('Succes');
                    $('#ErreurMembers').fadeOut();
                    document.location.reload();
               
                }
                else if (data == 0){
                    $('#ErreurMembers').modal('show');
                    $("#ErreurMembers .errormtxt").text('Veuillez remplir tous les champs !');
                    // $('.messager').html('<li>Veuillez remplir tous les champs!</li>');
                   
                   
                 }
                else if(data == -1){
                    $('#ErreurMembers').modal('show');
                    $("#ErreurMembers .errormtxt").text('Compte déjà existant !');
                    //  $('.messager').html('<li> Le mail est deja utilisée !</li>');
                    
                }
            
                else if(data == -300){
                    $('#ErreurMembers').modal('show');
                    $("#ErreurMembers.errormtxt").text('Erreur lors de l\'inscription !');
                    // $('.messager').html("<li>Erreur lors de l'inscription !</li>");
                    
                }

                console.log(data);
                  console.log($('.messager'));
            }
        ),
        'text'

    });

});